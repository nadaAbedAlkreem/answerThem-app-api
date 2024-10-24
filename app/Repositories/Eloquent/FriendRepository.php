<?php

namespace App\Repositories\Eloquent;

use App\Models\Friend;
use App\Models\User;
use App\Repositories\IFriendRepositories;
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
    public function getNonFriends()
    {
        $currentUserId = Auth::id();
        if (!$currentUserId) {
            throw new \Exception('UNAUTHORISED', 401);
        }
        $friendIds = Friend::where('user_id', $currentUserId)
            ->pluck('friend_id')
            ->toArray();
        return User::where('users.id', '!=', $currentUserId)
            ->whereNotIn('users.id', $friendIds)
            ->get();
    }

}
