<?php

namespace App\Services;


use App\Models\FriendRequest;
use App\Models\User;
use App\Traits\ResponseTrait;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class FriendRequestService
{

    use ResponseTrait ;
    protected $fcmNotificationService ;

    public function __construct(
        FcmNotificationService $fcmNotificationService
    )
    {
        $this->fcmNotificationService = $fcmNotificationService;
    }





    public function acceptFriendRequest($requestId)
    {
         DB::beginTransaction();
        try {
            // Find the friend request
            $friendRequest = FriendRequest::with('receiver')->find($requestId);
            if(!$friendRequest)
            {
                throw new \Exception(__('messages.id_not_found'));
            }
            $friend = User::find($friendRequest->receiver_id);

            if (!$friend->friends()->where('friend_id', $friendRequest->sender_id)->exists()) {
                $friend->friends()->attach($friendRequest->sender_id);
            }
            $sender = User::find($friendRequest->sender_id);
            if (!$sender->friends()->where('friend_id', $friendRequest->receiver_id)->exists()) {
                $sender->friends()->attach($friendRequest->receiver_id);
            }
            $friendRequest->status = 'accepted';
            $friendRequest->save();
            $title = __('messages.accept_friend_request_notification_title'); ;
            $body  = $friendRequest->receiver->name .' '. __('messages.accept_friend_request_notification_body'); ;
            $type  = "friend_request" ;
            $this->fcmNotificationService->sendNotification($friendRequest->receiver_id ,$friendRequest->sender_id , $title , $body  , $type );
            $friendRequest->delete();
            DB::commit();
            return $this->successResponse('accept_friend_request', [], 200, App::getLocale());
        } catch (\Exception $e) {
            // Rollback the transaction in case of error
            DB::rollBack();
            return $this->errorResponse('ERROR_OCCURRED', ['error' => $e->getMessage()], 500, app()->getLocale());
        }
    }

    public function declinedFriendRequest($requestId , $request)
    {
        DB::beginTransaction();
        try {

            $friendRequest = FriendRequest::find($requestId);
             if(!$friendRequest)
            {
                 throw new \Exception(__('messages.id_not_found'));
            }
             $friendRequest->status = 'declined';
             $friendRequest->save();
             $friendRequest->delete();
            DB::commit();

            return $this->successResponse('delete_friend_request', [], 200, App::getLocale());
        } catch (\Exception $e) {
            // Rollback the transaction in case of error
            DB::rollBack();
            return $this->errorResponse('ERROR_OCCURRED', ['error' => $e->getMessage()], 500, app()->getLocale());
        }
    }

}
