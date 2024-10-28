<?php

namespace App\Http\Controllers\Api\V1\Friends;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\UserResource;
use App\Models\Notification;
use App\Models\User;
use App\Repositories\Eloquent\FriendRequestRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;
use Google\Client as Google_Client; // Correct class name
use App\Traits\ResponseTrait;
use App\Services\FriendRequestService ;

use App\Repositories\Eloquent\NotificationRepository;

class FriendRequestController extends Controller
{

    use ResponseTrait ;


    protected $notificationRepo  , $friendRequestService   , $friendRequestsRepository;

    public function __construct(NotificationRepository $notificationRepo ,  FriendRequestRepository $friendRequestsRepository , FriendRequestService $friendRequestService)
    {
        $this->notificationRepo = $notificationRepo;
        $this->friendRequestService = $friendRequestService;
        $this->friendRequestsRepository= $friendRequestsRepository ;


    }


    public function index()
    {
        //
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

    public function sendFcmNotification(Request $request) {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'title' => 'required|string',
            'body' => 'required|string',
        ]);

        $user = User::find($request->user_id);
        $fcm = $user->fcm_token;

        if (!$fcm) {
            return $this->errorResponse('ERROR_FCM_TOKEN', [], 400, app()->getLocale());

        }

        $title = $request->title;
        $description = $request->body;

        $projectId = config('services.fcm.project_id');

        $credentialsFilePath = Storage::path('app/json/answerthem-api-notification-231882995917.json');
        try {
            $client = new Google_Client();
            $client->setAuthConfig($credentialsFilePath);
        } catch (\Google\Exception $e) {
            throw new \Exception('Google Auth Configuration Error: ' . $e->getMessage());
        }

        $client->addScope('https://www.googleapis.com/auth/firebase.messaging');
        $client->refreshTokenWithAssertion();
        $token = $client->getAccessToken();
        $access_token = $token['access_token'];

        $headers = [
            "Authorization: Bearer $access_token",
            'Content-Type: application/json'
        ];

        $data = [
            "message" => [
                "token" => $fcm,
                "notification" => [
                    "title" => $title,
                    "body" => $description,
                ],
                "data" => [
                    "action" => "accept_friend_request",
                    "screen" => "FriendRequestScreen",
                ],
            ]
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://fcm.googleapis.com/v1/projects/{$projectId}/messages:send");
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

        $response = curl_exec($ch);
        $err = curl_error($ch);
        curl_close($ch);

        if ($err) {
             return $this->errorResponse('CURL_ERROR', [$err], 500, app()->getLocale());
        } else {
            return $this->successResponse('NOTIFICATION_SENT_SUCCESSFULLY', [$response], 202,  app()->getLocale());

        }
    }




    public function acceptRequest(Request $request, $id)
    {
        $this->friendRequestService->acceptFriendRequest($id);

        return response()->json(['status' => 'success', 'message' => 'Friend request accepted and friend added.']);
    }


    public function getFriendRequestsForCurrentUser()
    {
        try{
        $friendRequest = $this->friendRequestsRepository->getFriendRequestsForCurrentUser();

        return $this->successResponse('DATA_RETRIEVED_SUCCESSFULLY', UserResource::collection($friendRequest), 200, App::getLocale());
       } catch (\Exception $e) {
            return $this->errorResponse($e->getMessage(), [] ,  $e->getCode()  , app()->getLocale());
       }

}
}
