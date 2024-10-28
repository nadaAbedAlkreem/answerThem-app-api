<?php

namespace App\Repositories\Eloquent;

use App\Models\Category;
use App\Repositories\ICategoryRepositories;
use App\Traits\ResponseTrait;
use Illuminate\Support\Facades\Validator;

class CategoryRepository  extends BaseRepository implements ICategoryRepositories
{
    use ResponseTrait ;
    public function __construct()
    {
        $this->model = new Category();
    }


    public function getPrimaryCategories()
    {
        return Category::where('parent_id', 0)->get();
    }
    public function searchPrimaryCategories($request)
    {
         return Category::where('parent_id', 0)->Where($request->query('search_type'), 'like', "%{$request->query('search_value')}%")->get();
    }

    public function getSubcategories($primaryCategoryId)
    {
        $validator = Validator::make(['id' => $primaryCategoryId], [
            'id' => 'required|integer|exists:categories,id',
        ]);
        if ($validator->fails()) {
             $errorMessage = $validator->errors()->first('id');
             return response()->json([
                'success' => false,
                'message' =>  __('messages.ERROR_OCCURRED'),
                'data' => [
                    'error' => [
                        'id' => $errorMessage,
                    ],
                ],
                'status' => 'Internal Server Error',
            ], 500);
        }

        return Category::where('parent_id', $primaryCategoryId)->get();
    }
    public function searchSubcategories($primaryCategoryId , $request)
    {
        $validator = Validator::make(['id' => $primaryCategoryId], [
            'id' => 'required|integer|exists:categories,id',
        ]);
        if ($validator->fails()) {
            $errorMessage = $validator->errors()->first('id');
            return response()->json([
                'success' => false,
                'message' =>  __('messages.ERROR_OCCURRED'),
                'data' => [
                    'error' => [
                        'id' => $errorMessage,
                    ],
                ],
                'status' => 'Internal Server Error',
            ], 500);
        }

        return Category::where('parent_id', $primaryCategoryId)->where($request->query('search_type'), 'like', "%{$request->query('search_value')}%")->get();
    }


}
