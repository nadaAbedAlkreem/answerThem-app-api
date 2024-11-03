<?php

namespace App\Repositories\Eloquent;

use App\Models\Friend;
use App\Models\FriendRequest;
use App\Models\User;
use App\Repositories\IFriendRepositories;
use http\Env\Request;
use Illuminate\Support\Facades\Auth;

class FriendRepository extends BaseRepository implements   IFriendRepositories
{
    protected $table = "friends"  ;

    public function __construct()
    {
        $this->model = new Friend();
    }
    public function __toString()
    {
        return 'FriendsRepository instance';
    }

    // FriendRepository.php
    public function getNonFriends($request)
    {
        $user =  $request->user();
        if (!$user) {
            throw new \Exception('UNAUTHORISED', 401);
        }

        $friendIds = Friend::where('user_id', $user->id)
            ->pluck('friend_id')
            ->toArray();

        $friendRequestIds= FriendRequest::where('sender_id', $user->id)
            ->pluck('receiver_id')
            ->toArray();
         return User::where('users.id', '!=', $user)
            ->whereNotIn('users.id', $friendIds)
            ->whereNotIn('users.id', $friendRequestIds)
            ->get();
    }

}
