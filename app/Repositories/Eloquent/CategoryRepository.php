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
        return Category::with(['parent', 'parent.parent'])->where('parent_id', 0)->get();
    }
    public function searchCategories($request)
    {
        $searchValue = $request->query('search_value');
        $name = (App::getLocale()== 'ar')?  'name_ar' : 'name_en'  ;
        $description = (App::getLocale()== 'ar')?  'description_ar' : 'description_en'  ;

        return Category::with(['parent', 'parent.parent'])->where(function($q) use ($searchValue  ,$name, $description) {
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

        return Category::with(['parent', 'parent.parent'])->where('parent_id', $primaryCategoryId)->get();
    }
    public function searchSubcategories($request)
    {
        $searchValue = $request->query('search_value');
        $level = $request->query('level');

        $name = (App::getLocale()== 'ar')?  'name_ar' : 'name_en'  ;
        $description = (App::getLocale()== 'ar')?  'description_ar' : 'description_en'  ;

        return Category::with(['parent', 'parent.parent'])->where('level',$level )->where(function($q) use ($searchValue  ,$name, $description) {
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

        return $this->findWith($CategoryId, ['parent', 'parent.parent']);
    }


    public function getCategoriesDetails()
    {
         // Get all games with the common condition
        $games = $this->getAllWhere(['parent_id' => '0']);

        $latestGames = Category::where('level', 3)
            ->with(['parent', 'parent.parent']) // Load parent and grandparent
            ->orderBy('created_at', 'DESC')
            ->take(5)
            ->get();

        // Retrieve famous games from the third level
        $famousGames = Category::where('level', 3)
            ->where('famous_gaming', '<>', 0)
            ->with(['parent', 'parent.parent']) // Load parent and grandparent
            ->get();

        // Return the results
        return [
            'games' => $games,
            'latestGames' => $latestGames, // Ensure it's a collection
            'famousGames' => $famousGames,
        ];
    }



}
