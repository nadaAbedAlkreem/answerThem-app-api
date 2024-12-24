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
        auth::user()->syncRoles('super-admin');
        $dataNative = Question::select('*')->orderBy('created_at', 'desc')->get() ;
        $name = (app::getLocale() == 'ar')? 'name_ar' : 'name_en'  ;
        $category = Category::with('parent' , 'parent.parent')->where('level', 3)->get() ;
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

        return view('dashboard.pages.questions' , ['lang' => app::getLocale()  ,  'category'=>CategoryResource::collection($category)->toArray($request) ]);
    }
    public function store(StoreQuestionRequest $request)
    {
        try {
             $question = $this->questionRepository->create($request->getData());
             if($question)
             {
                 for ($i = 1; $i <= 4; $i++) {
                     $isCorrectAr = ($request->input('correct_answer_ar') == $i) ? 1 : 0;
                     $this->answerRepository->create([
                         'question_id' => $question->id,
                         'answer_text_ar' => $request->input("answer_text_ar_$i"),
                         'answer_text_en' => $request->input("answer_text_en_$i"),
                         'is_correct' => $isCorrectAr,
                     ]);
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
                $item = $this->questionRepository->findOne($request['id'] );
                 $item->answers()->each(function($answer, $index) use ($request) {
                    $isCorrectAr = ($request->input('correct_answer_ar') == ($index + 1)) ? 1 : 0;
                    $answer->update([
                        'answer_text_ar' => $request->input("answer_text_ar_" . ($index + 1)),
                        'answer_text_en' => $request->input("answer_text_en_" . ($index + 1)),
                        'is_correct' => $isCorrectAr,
                    ]);
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

}
