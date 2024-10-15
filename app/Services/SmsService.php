<?php

namespace App\Services;

use Twilio\Rest\Client;

class SmsService
{
    protected $client;
    protected $twilioNumber;
    protected $verifyServiceSid; // Add this line for your Verify Service SID

    public function __construct()
    {
        $this->client = new Client(env('TWILIO_SID'), env('TWILIO_AUTH_TOKEN'));
        $this->twilioNumber = env('TWILIO_PHONE_NUMBER');
        $this->verifyServiceSid = env('TWILIO_VERIFY_SERVICE_SID'); // Initialize your Verify Service SID
    }

    public function sendSms($to, $message)
    {
        try {
            $this->client->messages->create(
                $to, // Recipient's phone number
                [
                    'from' =>"+19093031507", // Your Twilio phone number
                    'body' => $message,
                ]
            );

              $this->client->messages
                ->create($to, // to
                    array(
                        "from" => "+19093031507",
                        "body" =>  $message
                    )
                );
            return ['status' => 'success', 'message' => 'SMS sent successfully.'];
        } catch (\Exception $e) {
            return ['status' => 'error', 'message' => $e->getMessage()];
        }
    }

    public function sendVerificationCode($to)
    {
        try {
            // Create a message with the verification code
//            $message = "Your verification code is: $code";

            // Send the verification code
            $verification = $this->client->verify->v2->services($this->verifyServiceSid)
                ->verifications
                ->create($to, "sms"); // Assuming your service supports a body parameter
             return [
                'status' => 'success',
                'message' => 'Verification code sent successfully.',
                'verification_sid' => $verification->sid,
            ];
        } catch (\Exception $e) {
            return [
                'status' => 'error',
                'message' => $e->getMessage(),
            ];
        }
    }


    public function verifyCode($to, $code)
    {
        try {
            // Verify the code
            $verificationCheck = $this->client->verify->v2->services($this->verifyServiceSid)
                ->verificationChecks
                ->create([
                    'to' => $to,
                    'code' => $code,
                ]);

            if ($verificationCheck->status === 'approved') {
                return [
                    'status' => 'success',
                    'message' => 'Phone number verified successfully.',
                ];
            } else {
                return [
                    'status' => 'error',
                    'message' => 'Invalid verification code.',
                ];
            }
        } catch (TwilioException $e) {
            return [
                'status' => 'error',
                'message' => $e->getMessage(),
            ];
        }
    }
}

