<?php

namespace App\Http\Controllers\Api\V1\Friends;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFriendRequestRequest;
use App\Http\Resources\Api\FriendRequestsResource;
use App\Http\Resources\Api\UserResource;
use App\Models\Notification;
use App\Repositories\Eloquent\FriendRequestRepository;
use App\Services\FcmNotificationService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Traits\ResponseTrait;
use App\Services\FriendRequestService ;
use App\Repositories\Eloquent\NotificationRepository;

class FriendRequestController extends Controller
{

    use ResponseTrait ;


    protected $notificationRepo  , $friendRequestService   , $friendRequestsRepository  , $fcmNotificationService ;

    public function __construct(
           NotificationRepository $notificationRepo ,
           FriendRequestRepository $friendRequestsRepository ,
           FriendRequestService $friendRequestService ,
           FcmNotificationService $fcmNotificationService
    )
    {
        $this->notificationRepo = $notificationRepo;
        $this->friendRequestService = $friendRequestService;
        $this->friendRequestsRepository= $friendRequestsRepository ;
        $this->fcmNotificationService = $fcmNotificationService;
    }


    public function sendFriendRequest(StoreFriendRequestRequest $request)
    {
        try {
                $friendRequest = $this->friendRequestsRepository->create($request->getData());
                $friendRequest->load('sender');
                $title = __('messages.friend_request_notification_title'); ;
                $body  = $friendRequest->sender->name .' '. __('messages.friend_request_notification_body'); ;
                $type  = "friend_request" ;
                $this->fcmNotificationService->sendNotification($friendRequest->sender_id ,$friendRequest->receiver_id , $title , $body  , $type );
                return $this->successResponse(
                'CREATE_FRIEND_REQUEST_SUCCESSFULLY',
                [],
                202,
                app()->getLocale()
            );
        } catch (\Exception $e) {
             return $this->errorResponse(
                'ERROR_OCCURRED',
                ['error' => $e->getMessage()],
                500,
                App::getLocale()
            );
        }

    }

    /**
     * Show the form for creating a new resource.
     */

    public function updateDeviceToken(Request $request)
    {
         $response = Notification::updateDeviceToken($request);
         if (isset($response['message']) && $response['message'] === 'UPDATE_FCM_TOKEN_SUCCESSFULLY') {
            return $this->successResponse('UPDATE_FCM_TOKEN_SUCCESSFULLY', [], 202 ,  app()->getLocale());
        }
        return  $this->errorResponse('USER_NOT_FOUND' , [], 404 , app()->getLocale());
    }


    public function acceptFriendRequest($id)
    {
        return $this->friendRequestService->acceptFriendRequest($id);
     }
    public function declinedFriendRequest($id ,Request $request)
    {
       return $this->friendRequestService->declinedFriendRequest($id , $request);
     }
    public function getFriendRequestsForCurrentUser(Request $request)
    {
        try{

         $friendRequest = $this->friendRequestsRepository->getFriendRequestsForCurrentUser($request);
          return $this->successResponse('DATA_RETRIEVED_SUCCESSFULLY', FriendRequestsResource::collection($friendRequest), 200, App::getLocale());
       } catch (\Exception $e) {
            return $this->errorResponse($e->getMessage(), [] ,  $e->getCode()  , app()->getLocale());
       }

}
}
