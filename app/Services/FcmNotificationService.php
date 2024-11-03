<?php

namespace App\Services;



use App\Traits\ResponseTrait;
use App\Models\User;
use Google\Client as Google_Client;
use Exception;
use App\Repositories\INotificationRepositories;

class FcmNotificationService
{

    use ResponseTrait ;
    protected $credentialsFilePath ,  $notificationRepository ;


    public function __construct(INotificationRepositories $notificationRepository)
    {
        $this->notificationRepository = $notificationRepository;
        $this->credentialsFilePath = 'C:/xampp/htdocs/answerThem-api-main/storage/app/public/json/gaweb7om-firebase-adminsdk-8ici3-49f79ae7ba.json';
    }

    public function sendNotification($senderId ,$receiverId, $title, $body, $type  )
    {

        $user = User::find($senderId);
        $fcmToken = $user->fcm_token;

        if (!$fcmToken) {
            throw new Exception('ERROR_FCM_TOKEN');
        }

        $client = new Google_Client();
        $client->setAuthConfig($this->credentialsFilePath);
        $client->setScopes(['https://www.googleapis.com/auth/firebase.messaging']);
        $client->useApplicationDefaultCredentials();

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
                    "type" =>  $type,
                 ],
            ]
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://fcm.googleapis.com/v1/projects/" . config('services.fcm.project_id') . "/messages:send");
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

        $response = curl_exec($ch);
        $err = curl_error($ch);
        curl_close($ch);

        if ($err) {
            throw new Exception('CURL_ERROR: ' . $err);
        }
           $this->notificationRepository->create(
              [   'type' => $type,
                  'sender_id' => $senderId  ,
                  'receiver_id' => $receiverId,
                  'data' =>  json_encode($data),
              ]);
        return $response;
    }
}
