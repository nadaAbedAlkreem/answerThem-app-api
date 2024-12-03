<?php

namespace App\Http\Controllers\Api\V1\Game;

use App\Http\Controllers\Controller;

use App\Http\Resources\Api\CategoryResource;
 use App\Repositories\ICategoryRepositories;
use App\Repositories\ISettingRepositories;
use App\Traits\ResponseTrait;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{

    use ResponseTrait ;
    protected $categoryRepository  , $settingRepositories ;

    public function __construct(ICategoryRepositories $categoryRepository  , ISettingRepositories $settingRepositories)
    {
        $this->categoryRepository = $categoryRepository;
        $this->settingRepositories = $settingRepositories;

    }

    /**
     * Display a listing of the resource.
     */
    public function getPrimaryCategories()
    {
        $categories = $this->categoryRepository->getPrimaryCategories();
        return $this->successResponse('DATA_RETRIEVED_SUCCESSFULLY', CategoryResource::collection($categories), 202, app()->getLocale());

    }
    //
//    public function getCategoriesByLevel($level)
//    {
//        $validator = Validator::make(
//            ['level' => $level],
//            ['level' => 'required|in:1,2,3']
//        );
//        if ($validator->fails()) {
//            return $this->errorResponse('INVALID_LEVEL', [], 400, app()->getLocale());
//        }
//        $categories = $this->categoryRepository->getWhere(['level'=>$level]);
//        return $this->successResponse('DATA_RETRIEVED_SUCCESSFULLY', CategoryResource::collection($categories), 202, app()->getLocale());
//    }

    public function searchCategories(Request $request)
    {
        $categories = $this->categoryRepository->searchCategories($request);
        return $this->successResponse('DATA_RETRIEVED_SUCCESSFULLY', CategoryResource::collection($categories), 202, app()->getLocale());
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
        return $this->successResponse('DATA_RETRIEVED_SUCCESSFULLY', CategoryResource::collection($subcategories), 202, app()->getLocale());
    }

    public function searchSubCategories( Request $request)
    {
        $subcategories = $this->categoryRepository->searchSubcategories($request);
        if ($subcategories instanceof \Illuminate\Http\JsonResponse) {
            return $subcategories; // Return error response directly
        }
        return $this->successResponse('DATA_RETRIEVED_SUCCESSFULLY', CategoryResource::collection($subcategories), 202, app()->getLocale());
    }

    public function getSubAndPrimeCategoryById($id)
    {
        $category = $this->categoryRepository->getCategoryById($id);
        if ($category instanceof \Illuminate\Http\JsonResponse) {
            return $category; // Return error response directly
        }
        return $this->successResponse('DATA_RETRIEVED_SUCCESSFULLY', new CategoryResource($category), 202, app()->getLocale());
    }




    public function getCategoriesDetails(Request $request)
    {
        try {
            $categories = $this->categoryRepository->getCategoriesDetails();
            $banner = $this->settingRepositories->getWhereFirst(['base_term' => 'app banner' , 'lang' => App::getLocale()]);
            $this->onlineUserActive($request);
            return $this->successResponse('DATA_RETRIEVED_SUCCESSFULLY',
                [
                    'banners' => json_decode($banner['value']),
                    'games' => CategoryResource::collection($categories['games']),
                    'latestGames' => CategoryResource::collection($categories['latestGames']),
                    'famousGames' => CategoryResource::collection($categories['famousGames']),
                ], 202, app()->getLocale());
        } catch (\Exception $exception) {
              return $this->errorResponse('NOTAUTHORIZED', [], 401, app()->getLocale());
        }

    }
    private function  onlineUserActive($request)
    {
        $currentUser = $request->user();

        if($currentUser == null)
        {
            throw new Exception('NOTAUTHORIZED');

        }

         $currentUser->is_online = true;
        $currentUser->last_active_at = now();
        $currentUser->save();
    }
}
