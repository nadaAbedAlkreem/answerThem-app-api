<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Resources\Dashboard\CategoryResource;
use App\Models\Category;
use App\Repositories\ICategoryRepositories;
use App\Services\CategoryDatatableService;
use Illuminate\Http\Request;
use Throwable;

class CategoryController extends Controller
{

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

    public function create()
    {

    }

    public  function changeLangVersion(Request $request)
    {

        $language = $request->input('language'); // Retrieve the language parameter
        dd($language);

    }

}
