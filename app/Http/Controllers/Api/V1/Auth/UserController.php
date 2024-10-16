<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\UserResource;
use App\Repositories\IUserRepository;
use App\Http\Requests\Auth\SearchUsersRequest;
use Illuminate\Support\Facades\App; // Make sure to import the App facade
use App\Traits\ResponseTrait;

class UserController extends Controller
{
    use ResponseTrait  ;
    protected $userRepository;

    public function __construct(IUserRepository $userRepository)
    {
        $this->userRepository = $userRepository; // Inject the repository
    }

    public function getAllUsers()
    {
        $users = $this->userRepository->getAll();
        return UserResource::collection($users);
    }


    public function getSearchUsers(SearchUsersRequest $request)
    {
        $searchResult = $this->userRepository->getWhereSerach([[$request->query('search_type'), 'like', "%{$request->query('search_value')}%"]]);
         return ($searchResult)
            ? $this->successResponse('DATA_RETRIEVED_SUCCESSFULLY', UserResource::collection($searchResult), 200, App::getLocale())
            : $this->errorResponse('NO_DATA', [], 200, App::getLocale());
    }



    // Other methods using the user repository...
}
