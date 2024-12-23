<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Http\Resources\Dashboard\CategoryResource;
use App\Models\Category;
use App\Repositories\ICategoryRepositories;
use App\Services\CategoryDatatableService;
use App\Traits\ResponseTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Mockery\Exception;
use Throwable;

class CategoryController extends Controller
{

    use ResponseTrait ;
    protected $categoryRepository;

    public function __construct(ICategoryRepositories $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function index(Request $request ,  CategoryDatatableService $categoryDatatableService)
    {
        $dataNative = Category::with('parent' , 'parent.parent')->select('*')->orderBy('created_at', 'desc')->get() ;
          if ($request->ajax())
        {
            $data = CategoryResource::collection($dataNative);

            try {
                return $categoryDatatableService->handle($request,$data);
            } catch (Throwable $e) {
                return response([
                    'message' => $e->getMessage(),
                ], 500);
            }
        }

         return view('dashboard.pages.category' , ['category'=>CategoryResource::collection($dataNative)->toArray($request) , 'lang' => app::getLocale()]);
    }
    public function store(StoreCategoryRequest $request)
    {

        try {
            $this->categoryRepository->create($request->getData());
            return $this->successResponse('CREATE_SUCCESS',[], 201, App::getLocale())  ;
        } catch (\Exception $e) {
             return response([
                'message' => $e->getMessage(),
            ], 500);
        }
    }
    public function update(UpdateCategoryRequest $request)
    {
        try {

            $this->categoryRepository->update($request->getData() , $request['id']);
             return $this->successResponse('UPDATE_SUCCESS',[], 201, App::getLocale())  ;

        } catch (\Exception $e) {
            return $this->errorResponse('ERROR_OCCURRED',  ['error' =>  $e->getMessage()] ,  404 , app()->getLocale());
        }
    }
    public function destroy($id)
    {
         try {
             $this->categoryRepository->delete($id);
            return $this->successResponse('DELETE_SUCCESS',[], 202, App::getLocale())  ;

         } catch (\Exception $e) {
             return $this->errorResponse('ERROR_OCCURRED',  ['error' =>  $e->getMessage()] ,  404 , app()->getLocale());
         }
    }
    public function searchCategories(Request $request)
    {
         $searchTerm = $request->input('q');
        $categories = Category::where(function($query) use ($searchTerm) {
            $query->where('name_en', 'LIKE', "%{$searchTerm}%")
                ->orWhere('name_ar', 'LIKE', "%{$searchTerm}%");
          })
             ->where('level', 1)->orWhere('level', 2)
             ->get(['id', 'name_en', 'name_ar', 'level']);

        return response()->json([
            'results' => $categories->map(function ($category) {
                return [
                    'id' => $category->id,
                    'text' => app()->getLocale() === 'ar' ? $category->name_ar : $category->name_en
                ];
            }),
        ]);
    }



}
