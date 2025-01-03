<?php

namespace App\Http\Controllers\Api\V1\Friends;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Google\Client as Google_Client; // Correct class name


class FcmController extends Controller
{
//    public function updateDeviceToken(Request $request) {
//        $request->validate([
//            'user_id' => 'required|exists:users,id',
//            'fcm_token' => 'required|string',
//        ]);
//
//        $request->user()->update(['fcm_token' => $request->fcm_token]);
//
//        return response()->json(['message' => 'Device token updated successfully']);
//    }

//    public function sendFcmNotification(Request $request) {
//        $request->validate([
//            'user_id' => 'required|exists:users,id',
//            'title' => 'required|string',
//            'body' => 'required|string',
//        ]);
//
//        $user = \App\Models\User::find($request->user_id);
//        $fcm = $user->fcm_token;
//
//        if (!$fcm) {
//            return response()->json(['message' => 'User does not have a device token'], 400);
//        }
//
//        $title = $request->title;
//        $description = $request->body;
//
//        $projectId = config('services.fcm.project_id');
//
//        $credentialsFilePath = Storage::path('app/json/answerthem-api-notification-231882995917.json');
//        try {
//            $client = new Google_Client();
//            $client->setAuthConfig($credentialsFilePath);
//        } catch (\Google\Exception $e) {
//            throw new \Exception('Google Auth Configuration Error: ' . $e->getMessage());
//        }
//
//        $client->addScope('https://www.googleapis.com/auth/firebase.messaging');
//        $client->refreshTokenWithAssertion();
//        $token = $client->getAccessToken();
//        $access_token = $token['access_token'];
//
//        $headers = [
//            "Authorization: Bearer $access_token",
//            'Content-Type: application/json'
//        ];
//
//        $data = [
//            "message" => [
//                "token" => $fcm,
//                "notification" => [
//                    "title" => $title,
//                    "body" => $description,
//                ],
//                "data" => [
//                    "action" => "accept_friend_request",
//                    "screen" => "FriendRequestScreen",
//                ],
//            ]
//        ];
//
//        $ch = curl_init();
//        curl_setopt($ch, CURLOPT_URL, "https://fcm.googleapis.com/v1/projects/{$projectId}/messages:send");
//        curl_setopt($ch, CURLOPT_POST, true);
//        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
//
//        $response = curl_exec($ch);
//        $err = curl_error($ch);
//        curl_close($ch);
//
//        if ($err) {
//            return response()->json(['message' => 'Curl Error: ' . $err], 500);
//        } else {
//            return response()->json([
//                'message' => 'Notification has been sent',
//                'response' => json_decode($response, true)
//            ]);
//        }
//    }
}
