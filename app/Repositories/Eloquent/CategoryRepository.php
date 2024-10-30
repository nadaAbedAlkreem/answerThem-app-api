<?php

namespace App\Repositories\Eloquent;

use App\Models\Category;
use App\Repositories\ICategoryRepositories;
use App\Traits\ResponseTrait;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Validator;

class CategoryRepository  extends BaseRepository implements ICategoryRepositories
{
    use ResponseTrait ;
    public function __construct()
    {
        $this->model = new Category();
    }

    private function validateCategoryId($categoryId)
    {
        $validator = Validator::make(['id' => $categoryId], [
            'id' => 'required|integer|exists:categories,id',
        ]);

        if ($validator->fails()) {
            $errorMessage = $validator->errors()->first('id');
            return response()->json([
                'success' => false,
                'message' => __('messages.ERROR_OCCURRED'),
                'data' => [
                    'error' => [
                        'id' => $errorMessage,
                    ],
                ],
                'status' => 'Internal Server Error',
            ], 500);
        }

        return null;
    }
    public function getPrimaryCategories()
    {
        return Category::where('parent_id', 0)->get();
    }
    public function searchPrimaryCategories($request)
    {
        $searchValue = $request->query('search_value');
        $name = (App::getLocale()== 'ar')?  'name_ar' : 'name_en'  ;
        $description = (App::getLocale()== 'ar')?  'description_ar' : 'description_en'  ;

        return Category::where('parent_id', 0)->where(function($q) use ($searchValue  ,$name, $description) {
            $q->orWhere($name , 'like', "%{$searchValue}%")
                ->orWhere($description ,'like', "%{$searchValue}%")
                ->orWhere('rating' , 'like', "%{$searchValue}%");

        })->get();
    }

    public function getSubcategories($primaryCategoryId)
    {
        $validationError = $this->validateCategoryId($primaryCategoryId);
        if ($validationError) {
            return $validationError;
        }

        return Category::where('parent_id', $primaryCategoryId)->get();
    }
    public function searchSubcategories($primaryCategoryId , $request)
    {
        $searchValue = $request->query('search_value');
        $name = (App::getLocale()== 'ar')?  'name_ar' : 'name_en'  ;
        $description = (App::getLocale()== 'ar')?  'description_ar' : 'description_en'  ;
        $validationError = $this->validateCategoryId($primaryCategoryId);
        if ($validationError) {
            return $validationError;
        }
        return Category::where('parent_id', $primaryCategoryId)->where(function($q) use ($searchValue  ,$name, $description) {
            $q->orWhere($name , 'like', "%{$searchValue}%")
                ->orWhere($description ,'like', "%{$searchValue}%")
                ->orWhere('rating' , 'like', "%{$searchValue}%");

        })->get();
    }

    public function getCategoryById($CategoryId)
    {
        $validationError = $this->validateCategoryId($CategoryId);
        if ($validationError) {
            return $validationError;
        }
        return $this->findOne($CategoryId);
    }


    public function getSubCategoriesAll()
    {
        return $this->getAllWhere(['parent_id' => ['<>', 0]]);
    }

    public function getSubCategoriesLatest()
    {
         return $this->getAll(['column' => 'created_at', 'dir' => 'DESC'])->take(5);
    }

    public function getSubCategoriesFamous()
    {
         return $this->getAllWhere(['famous_gaming' => ['<>', 0]]);
    }
}