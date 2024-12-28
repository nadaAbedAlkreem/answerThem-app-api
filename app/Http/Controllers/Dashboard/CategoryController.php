<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Http\Resources\Dashboard\CategoryResource;
use App\Models\Admin;
use App\Models\Category;
use App\Models\User;
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
            $category = $this->categoryRepository->create($request->getData());
            $usersWithoutCategory = Admin::whereNull('category_id')->whereHas('roles', function($query) {
                $query->where('name', 'staff');
            })->first();
            if ($usersWithoutCategory != null)
            {
                if($category->level == '3')
                {
                    $usersWithoutCategory->category_id = $category->id;
                    $usersWithoutCategory->save();

                }

            }

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

    public function getCategories(Request $request)
    {
        app::setLocale($request->query('lang'));
        $name = (app::getLocale() == 'ar')? 'name_ar' : 'name_en' ;
        $categories = Category::with('parent')
        ->select('id', 'level', $name, 'parent_id')
            ->get()
            ->map(function ($category) use ($name) {
                return [
                    'id' => $category->id,
                    'level' => $category->level,
                    'name' => $category->$name,
                    'parent_name' => $category->parent ? $category->parent->$name : null,

                ];
            });



         return response()->json($categories);

    }

}
