<?php

namespace App\Repositories\Eloquent;

use App\Models\FriendRequest;
use App\Models\User;
use App\Repositories\IFriendRequestRepositories;
use Illuminate\Support\Facades\Auth;

class FriendRequestRepository extends BaseRepository implements   IFriendRequestRepositories
{
    protected $table = "FriendRequest"  ;

    public function __construct()
    {
        $this->model = new FriendRequest();
    }
    public function getFriendRequestsForCurrentUser()
    {
        $currentUserId = Auth::id();
        if (!$currentUserId) {
             throw new \Exception('UNAUTHORISED', 401);
        }
        $friendRequests= FriendRequest::with(['sender'])->where('receiver_id', $currentUserId)->where('status','pending')->get();
        return $friendRequests->pluck('sender') ;
    }


}
