<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\UpdateProfileRequest;
use App\Http\Resources\Api\UserResource;
 use App\Repositories\IUserRepositories;
use App\Http\Requests\Auth\SearchUsersRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App; // Make sure to import the App facade
use App\Traits\ResponseTrait;
use App\Services\UserService;


class UserController extends Controller
{
    use ResponseTrait  ;
    protected $userRepository  , $userService ;

    public function __construct(IUserRepositories $userRepository  ,UserService $userService)
    {
        $this->userRepository = $userRepository; // Inject the repository
        $this->userService = $userService;

    }

    public function getAllUsers()
    {
        $users = $this->userRepository->getAll();
        return $this->successResponse('DATA_RETRIEVED_SUCCESSFULLY',UserResource::collection($users), 200, App::getLocale());
    }
//    public function getAllUsersWithFriends()
//    {
//        $users = $this->userRepository->getWith(['friends']);
//        return $this->successResponse('DATA_RETRIEVED_SUCCESSFULLY',UserWithFriendsResource::collection($users), 200, App::getLocale());
//    }

    public function getTranslatedPagesAuthentication()
    {
        $translatedPage = $this->userService->getTranslatedPagesAuthentication();
         return $this->successResponse(
            $translatedPage['status'],
             $translatedPage['data'],
            200,
            app()->getLocale()
        );
    }
    public function getSearchUsers(SearchUsersRequest $request)
    {
        $searchResult = $this->userRepository->getWhereSerach([[$request->query('search_type'), 'like', "%{$request->query('search_value')}%"]]);
         return ($searchResult)
            ? $this->successResponse('DATA_RETRIEVED_SUCCESSFULLY', UserResource::collection($searchResult), 200, App::getLocale())
            : $this->errorResponse('NO_DATA', [], 200, App::getLocale());
    }

    public function getCurrentUser(Request $request)
    {

        $currentUser = $request->user();
             return (!empty($currentUser))
            ? $this->successResponse('DATA_RETRIEVED_SUCCESSFULLY',new UserResource($currentUser), 200, App::getLocale())
            : $this->errorResponse('NOTAUTHORIZED', [], 403, App::getLocale());

    }
    public function updateProfile(UpdateProfileRequest $request)
    {
        try {
            $user = $request->user();
            $updatedUser = $request->updateUserData($user);
            return $this->successResponse(
                'PROFILE_UPDATED_SUCCESSFULLY',
                new UserResource($updatedUser),
                200,
                App::getLocale()
            );
        } catch (\Exception $exception) {
            return $this->errorResponse(
                'ERROR_OCCURRED',
                ['error' => $exception->getMessage()],
                500,
                App::getLocale()
            );
        }

    }




    // Other methods using the user repository...
}
