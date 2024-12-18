<?php

namespace App\Services;



use App\Http\Controllers\Api\V1\Game\InvitationController;
use App\Repositories\IInvitationRepositories;
use App\Traits\ResponseTrait;
use App\Models\User;
use Google\Client as Google_Client;
use Exception;
use App\Repositories\INotificationRepositories;
use RuntimeException;

class FcmNotificationService
{

    use ResponseTrait ;
    protected $credentialsFilePath ,  $notificationRepository , $invitationRepository;


    public function __construct(INotificationRepositories $notificationRepository  , IInvitationRepositories  $invitationRepository)
    {
        $this->notificationRepository = $notificationRepository;
        $this->invitationRepository = $invitationRepository;
        $this->credentialsFilePath = storage_path('app/private/json/gaweb7om-a60e6a6acd46.json') ;


    }

    public function sendNotification($senderId ,$receiverId, $title, $body, $type , $challengeLink = null , $challengeId = null)
    {
        $user = User::find($receiverId);

        $fcmToken = $user->fcm_token;

        if (!$fcmToken) {
            throw new Exception('ERROR_FCM_TOKEN');
        }

        $client = new Google_Client();

        $client->setAuthConfig($this->credentialsFilePath);
        $client->setScopes(['https://www.googleapis.com/auth/cloud-platform']);
//        $client->useApplicationDefaultCredentials();
        $client->setAccessType("offline");
        $token = $client->fetchAccessTokenWithAssertion();
        $accessToken = $token['access_token'];
        $headers = [
            "Authorization: Bearer $accessToken",
            'Content-Type: application/json'
        ];

        $data = [
            "message" => [
                "token" => $fcmToken,
                "notification" => [
                    "title" => $title,
                    "body" => $body,
                ],

                "data" => [
                    "type" => $type,
                    "title" => $title ,
                    "body" => $body,
                    "sender" => (string)$senderId,
                    "receiver" => (string)$receiverId,
                ],
            ]
        ];
        if ($challengeLink) {
            $data["message"]["data"]["challengeLink"] = $challengeLink;
        }
        if ($challengeId) {
            $data["message"]["data"]["challengeId"] = (string)$challengeId;
        }


        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://fcm.googleapis.com/v1/projects/" . config('services.fcm.project_id') . "/messages:send");
        curl_setopt($ch, CURLOPT_POST, true);

        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);


        $response = curl_exec($ch);
        $err = curl_error($ch);
        curl_close($ch);

        if ($err) {
            throw new RuntimeException('CURL_ERROR: ' . $err);
        }
           $this->notificationRepository->create(
              [   'type' => $type,
                  'sender_id' => $senderId  ,
                  'receiver_id' => $receiverId,
                  'data' =>  json_encode($data),
              ]);
        if ($challengeId && $type != "competition_over" ) {
            $this->invitationRepository->create(
                [
                    'sender_id' => $senderId  ,
                    'receiver_id' => $receiverId,
                    'challenge_id' => $challengeId,
                    'status'=> 'pending',
                ]);
         }

        return $response;
    }
}
