<?php

namespace App\Http\Controllers\Api\V1\Friends;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFriendRequest;
use App\Http\Requests\UpdateFriendRequest;
use App\Http\Resources\Api\FriendResource;
use App\Http\Resources\Api\UserResource;
use App\Http\Resources\Api\UserWithFriendsResource;
use App\Models\Friend;
use App\Models\User;
use App\Repositories\IFriendsRepositories;
use App\Repositories\IUserRepository;
use App\Services\UserService;
use App\Traits\ResponseTrait;
use Illuminate\Support\Facades\Auth;
use App  ;

class FriendController extends Controller
{

    use ResponseTrait ;
    protected $friendsRepository   , $userRepository ;
    public function __construct(IFriendsRepositories $friendsRepository  , IUserRepository  $userRepository)
    {
        $this->friendsRepository = $friendsRepository; // Inject the repository
        $this->userRepository = $userRepository; // Inject the repository
    }
    /**
     * Display a listing of the resource.
     */
    public function getFriendsForCurrentUser()
    {
        if (!Auth::check()) {
             return $this->errorResponse('Unauthenticated', [], 401, app()->getLocale());
        }
        $user = Auth::user();
        $userWithFriends = $this->userRepository->findWith($user->id ,  ['friends']);
        return $this->successResponse('DATA_RETRIEVED_SUCCESSFULLY',new UserWithFriendsResource($userWithFriends) , 202, app()->getLocale());

    }





    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFriendRequest $request)
    {
        //
    }



    /**
     * Display the specified resource.
     */
    public function show(Friend $friend)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Friend $friend)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFriendRequest $request, Friend $friend)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Friend $friend)
    {
        //
    }

    public  function  getUsersForFriendsRequest()
    {
        try {
            $nonFriends = $this->friendsRepository->getNonFriends();
            return $this->successResponse('DATA_RETRIEVED_SUCCESSFULLY',UserResource::collection($nonFriends), 200, \Illuminate\Support\Facades\App::getLocale());
        } catch (\Exception $e) {
            return $this->errorResponse($e->getMessage(), [] ,  $e->getCode()  , app()->getLocale());
        }

    }
}
