<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Resources\Dashboard\CategoryResource;
use App\Models\Category;
use App\Repositories\ICategoryRepositories;
use App\Services\CategoryDatatableService;
use App\Traits\ResponseTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
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
        $dataNative = Category::select('*')->get() ;


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
         return view('dashboard.pages.category');
    }

    public function store(StoreCategoryRequest $request)
    {
        try {

            $this->categoryRepository->create($request->getData());
            return $this->successResponse('CREATE_SUCCESS',[], 201, App::getLocale())  ;

        } catch (Throwable $e) {
            return response([
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    public  function changeLangVersion(Request $request)
    {

        $language = $request->input('language'); // Retrieve the language parameter
        dd($language);

    }
    public function destroy($id)
    {
         try {
             $this->categoryRepository->delete($id);
            return $this->successResponse('DELETE_SUCCESS',[], 202, App::getLocale())  ;

        }catch (Throwable $e){
            return response([
                'message' => $e->getMessage(),
            ], 500);
        }


    }

}
