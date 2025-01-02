<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreQuestionRequest;
use App\Http\Requests\UpdateQuestionRequest;
use App\Http\Resources\Dashboard\CategoryResource;
use App\Http\Resources\Dashboard\QuestionResource;
use App\Models\Answer;
use App\Models\Category;
use App\Models\Question;
use App\Repositories\IAnswerRepositories;
use App\Repositories\IQuestionRepositories;
use App\Services\QuestionDatatableService;
use App\Traits\ResponseTrait;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Throwable;

class QuestionController extends Controller
{
    use ResponseTrait ;
    protected $questionRepository , $answerRepository;

    public function __construct(IQuestionRepositories $questionRepository , IAnswerRepositories  $answerRepository)
    {
        $this->questionRepository = $questionRepository;
        $this->answerRepository = $answerRepository;
        $this->middleware('permission:view questions', ['only' => ['index']]);
        $this->middleware('permission:create questions', ['only' => ['create','store']]);
        $this->middleware('permission:update questions', ['only' => ['update','edit']]);
        $this->middleware('permission:delete questions', ['only' => ['destroy']]);
    }
    public function index(Request $request ,  QuestionDatatableService $questionDatatableService)
    {
        $dataNative =  Question::select('*')->orderBy('created_at', 'desc')->get() ;
         $name = (app::getLocale() == 'ar')? 'name_ar' : 'name_en'  ;
        $category = [] ;
        $structureCategory =  null ;
        $isCollection  = false ;
        $categoryFilter = Category::with('parent' , 'parent.parent')->where('level', 3)->get() ;
          if( auth()->user()->getRoleNames()[0]  == 'super-admin')
        {
            $dataNative = Question::select('*')->orderBy('created_at', 'desc')->get() ;
            $isCollection = true;
            $category = Category::with('parent' , 'parent.parent')->where('level', 3)->get() ;
          }else if( auth()->user()->getRoleNames()[0]  == 'staff')
        {
            $categoryIds = auth()->user()->category()->pluck('category_id');

            if($categoryIds)
            {
                $dataNative = Question::whereIn('category_id', $categoryIds)->orderBy('created_at', 'desc')->get();
            }else
            {
                 $dataNative = Question::select('*')->where('category_id' , 0)->orderBy('created_at', 'desc')->get() ;

            }
            $isCollection = false ;
            $category = auth()->user()->category()->with(['admin' , 'parent' , 'parent.parent'])->get();

        }

        if ($request->ajax())
        {

            $data = QuestionResource::collection($dataNative);

            try {
                return $questionDatatableService->handle($request,$data);
            } catch (Throwable $e) {
                return response([
                    'message' => $e->getMessage(),
                ], 500);
            }
        }

        return view('dashboard.pages.questions' , ['lang' => app::getLocale()   ,  'category_filter'=>$categoryFilter, 'isCollection' => $isCollection ,   'category'=>$category ]);
    }
    public function store(StoreQuestionRequest $request)
    {
        try {
              $question = $this->questionRepository->create($request->getData());
              if($question)
             {
                 for ($i = 1; $i <= 4; $i++) {
                     $isCorrectAr = (1 == $i) ? 1 : 0;
                      $answerData = [
                         'question_id' => $question->id,
                         'answer_text_ar' => $request->input("answer_text_ar_$i"),
                         'answer_text_en' => $request->input("answer_text_en_$i"),
                         'is_correct' => $isCorrectAr,
                     ];
                     $this->storeAnswerWithImage($answerData, $request, $i);
                 }
             }

            return $this->successResponse('CREATE_SUCCESS',[], 201, App::getLocale())  ;

        } catch (Throwable $e) {
            return response([
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    public function update(UpdateQuestionRequest $request)
    {
        try {
            $question = $this->questionRepository->update($request->getData(), $request['id']);
            if ($question) {
                $item = $this->questionRepository->findOne($request['id']);
                $item->answers()->each(function ($answer, $index) use ($request) {
                    $this->updateAnswerWithImage($answer, $request, $index);
                });
            }

            return $this->successResponse('UPDATE_SUCCESS', [], 201, App::getLocale());
        } catch (Throwable $e) {
            return response([
                'message' => $e->getMessage(),
            ], 500);
        }
    }




    public function destroy($id)
    {
        try {
            $this->questionRepository->delete($id);
            return $this->successResponse('DELETE_SUCCESS',[], 202, App::getLocale())  ;
        }catch (Throwable $e){
            return response([
                'message' => $e->getMessage(),
            ], 500);
        }
    }
    protected function storeAnswerWithImage(array $answerData, StoreQuestionRequest $request, int $index)
    {
         if ($request->hasFile("image-answer-$index")) {
             $image = $request->file("image-answer-$index");
            $userName = time() . rand(1, 10000000);
            $path = 'uploads/images/answers/';
            $imageName = $userName . '.' . $image->getClientOriginalExtension();

             Storage::disk('public')->put($path . $imageName, file_get_contents($image));
             $request->file("image-answer-$index")->move('storage/' . $path, $imageName);

             $absolutePath = storage_path('app/public/' . $path . $imageName);
            if (file_exists($absolutePath)) {
                chmod($absolutePath, 0775);
            } else {
                throw new \Exception(__('messages.ERROR_OCCURRED') . $absolutePath);
            }
             $answerData['answer_image'] = Storage::url($path . $imageName);
             $answerData['is_have_image'] = true ;

         }
           $this->answerRepository->create($answerData);
    }


    protected function updateAnswerWithImage($answer, $request, $index)
    {
        $index = $index +1 ;
        $imageKey = "image-answer-update-$index";
        $removeImageKey = "remove_image_answer_$index";

        $answerData = [
            'answer_text_ar' => $request->input("answer_text_ar_" . $index),
            'answer_text_en' => $request->input("answer_text_en_" . $index),
            'is_have_image' => $answer->is_have_image,
        ];
        if ($request->input($removeImageKey) != 0) {

            if ($answer->answer_image) {
                $oldImagePath = str_replace('/storage/', 'public/', $answer->answer_image);
                Storage::delete($oldImagePath);
            }

            $answerData['answer_image'] = null;
            $answerData['is_have_image'] = false;

        }
         if ($request->hasFile($imageKey)) {
            $userName = time() . rand(1, 10000000);
            $path = 'uploads/images/answers/';
            $imageName = $userName . '.' . $request->file($imageKey)->getClientOriginalExtension();

            Storage::disk('public')->put($path . $imageName, file_get_contents($request->file($imageKey)));
            $request->file("image-answer-update-$index")->move('storage/' . $path, $imageName);

             $absolutePath = storage_path('app/public/' . $path . $imageName);
             if (file_exists($absolutePath)) {
                 chmod($absolutePath, 0775);
             } else {
                 throw new \Exception(__('messages.ERROR_OCCURRED') . $absolutePath);
             }
            $answerData['answer_image'] = Storage::url($path . $imageName);
            $answerData['is_have_image'] = true;
        }

        $answer->update($answerData);
    }

}
