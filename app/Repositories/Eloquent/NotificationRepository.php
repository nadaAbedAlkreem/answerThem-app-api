<?php

namespace App\Repositories\Eloquent;

use App\Http\Resources\Api\NotificationResource;
use App\Models\FriendRequest;
use App\Models\Notification;
use App\Repositories\INotificationRepositories;
use Google_Client;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
class NotificationRepository extends BaseRepository implements INotificationRepositories
{

    public function __construct()
    {
        $this->model = new Notification();

    }
    public function sendFcmNotification($userId, $title, $body)
    {
        // Validate the user ID
        $user = User::find($userId);
        if (!$user) {
            return ['error' => 'User not found'];
        }

        $fcm = $user->fcm_token;

        if (!$fcm) {
            return ['error' => 'ERROR_FCM_TOKEN'];
        }

        // Prepare the FCM notification payload
        $data = [
            "message" => [
                "token" => $fcm,
                "notification" => [
                    "title" => $title,
                    "body" => $body,
                ],
                "data" => [
                    "action" => "accept_friend_request",
                    "screen" => "FriendRequestScreen",
                ],
            ]
        ];

        // Send the notification using FCM
        return $this->sendNotificationToFcm($data);
    }

    private function sendNotificationToFcm($data)
    {
        $projectId = config('services.fcm.project_id');
        $credentialsFilePath = Storage::path('app/json/answerthem-api-notification-231882995917.json');

        try {
            $client = new Google_Client();
            $client->setAuthConfig($credentialsFilePath);
            $client->addScope('https://www.googleapis.com/auth/firebase.messaging');
            $client->refreshTokenWithAssertion();
            $token = $client->getAccessToken();
            $access_token = $token['access_token'];

            $headers = [
                "Authorization: Bearer $access_token",
                'Content-Type: application/json'
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
                return ['error' => 'CURL_ERROR', 'details' => $err];
            }

            return ['success' => true, 'response' => $response];

        } catch (\Exception $e) {
            return ['error' => 'Google Auth Configuration Error: ' . $e->getMessage()];
        }
    }

    public function getNotificationForCurrentUser($request)
    {
        $currentUserId = $request->user();
        if (!$currentUserId) {
            throw new \Exception('UNAUTHORISED', 401);
        }
        $notificationsForCurrentUser = Notification::with('sender')->where('receiver_id', auth()->id())             ->orderBy('created_at', 'desc')->paginate(10);


        return NotificationResource::collection($notificationsForCurrentUser);

    }



}
