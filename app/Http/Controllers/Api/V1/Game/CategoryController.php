<?php

namespace App\Http\Controllers\Api\V1\Game;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Http\Resources\Api\CategoryResource;
use App\Models\Category;
use App\Repositories\ICategoryRepositories;
use App\Traits\ResponseTrait;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    use ResponseTrait ;
    protected $categoryRepository;

    public function __construct(ICategoryRepositories $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function getPrimaryCategories()
    {
        $categories = $this->categoryRepository->getPrimaryCategories();
        return $this->successResponse('DATA_RETRIEVED_SUCCESSFULLY', CategoryResource::collection($categories) , 202, app()->getLocale());

    }

    public function searchPrimaryCategories(Request $request)
    {
        $categories = $this->categoryRepository->searchPrimaryCategories($request);
        return $this->successResponse('DATA_RETRIEVED_SUCCESSFULLY', CategoryResource::collection($categories) , 202, app()->getLocale());
    }


    /**
     * Show the form for creating a new resource.
     */
    public function getSubcategories($id)
    {

        $subcategories = $this->categoryRepository->getSubcategories($id);
        if ($subcategories instanceof \Illuminate\Http\JsonResponse) {
            return $subcategories; // Return error response directly
        }
        return $this->successResponse('DATA_RETRIEVED_SUCCESSFULLY', CategoryResource::collection($subcategories) , 202, app()->getLocale());
    }

    public function searchSubcategories($id , Request $request)
    {
        $subcategories = $this->categoryRepository->searchSubcategories($id , $request);
        if ($subcategories instanceof \Illuminate\Http\JsonResponse) {
            return $subcategories; // Return error response directly
        }
        return $this->successResponse('DATA_RETRIEVED_SUCCESSFULLY', CategoryResource::collection($subcategories) , 202, app()->getLocale());
    }
    public function getSubAndPrimeCategoryById($id)
    {
        $category = $this->categoryRepository->getCategoryById($id);
        if ($category instanceof \Illuminate\Http\JsonResponse) {
            return $category; // Return error response directly
        }
        return $this->successResponse('DATA_RETRIEVED_SUCCESSFULLY', new CategoryResource($category) , 202, app()->getLocale());
    }

    public function getCategoriesDetails()
    {
        $categories = $this->categoryRepository->getCategoriesDetails();
        return $this->successResponse('DATA_RETRIEVED_SUCCESSFULLY',
           [
           'games' => CategoryResource::collection($categories['games']),
           'latestGames' => CategoryResource::collection($categories['latestGames']),
           'famousGames' => CategoryResource::collection($categories['famousGames'])
           ], 202, app()->getLocale());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
