<?php
namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\ForgotPasswordRequest;  //VerifyTokenRequest
use App\Http\Requests\Auth\VerifyTokenRequest;  //VerifyTokenRequest
use App\Http\Requests\Auth\ResetPasswordRequest;  //VerifyTokenRequest
use App\Models\User;
use App\Services\UserService;
use Illuminate\Support\Facades\Hash;
use App\Services\SmsService;
use App\Traits\ResponseTrait;
use App\Mail\RestPasswordMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cache;
use Carbon\Carbon;
use Twilio\Rest\Client;
 class ForgotPasswordController extends Controller
{
    use ResponseTrait ;
    protected $client;
    protected $verifyServiceSid; // Add this line for your Verify Service SID

    protected $smsService;

    protected $maxAttempts = 5;

    protected $lockoutTime = 60;
    protected $userService;

    public function __construct(SmsService $smsService ,UserService $userService)
    {
        $this->client = new Client(env('TWILIO_SID'), env('TWILIO_AUTH_TOKEN'));
        $this->verifyServiceSid = env('TWILIO_VERIFY_SERVICE_SID'); // Initialize your Verify Service SID
        $this->smsService = $smsService;
        $this->userService = $userService;

    }



    public function createForgetPasseord()
    {
        $translatedPage = $this->userService->getTranslatedPageDataForgetPasseord();

        return $this->successResponse(
            $translatedPage['status'],
            $translatedPage['data'],
            200,
            app()->getLocale()
        );
    }

     public function createVerifyToken()
     {
         $translatedPage = $this->userService->getTranslatedPageverifyToken();

         return $this->successResponse(
             $translatedPage['status'],
             $translatedPage['data'],
             200,
             app()->getLocale()
         );
     }

     public function createChangePassword()
     {
         $translatedPage = $this->userService->getTranslatedPageDataChangePassword();

         return $this->successResponse(
             $translatedPage['status'],
             $translatedPage['data'],
             200,
             app()->getLocale()
         );
     }


     public function sendResetLink(ForgotPasswordRequest $request)
    {


        $sid = config('services.twilio.sid');
        $token = config('services.twilio.token');

        // Check if the credentials are loaded properly
        if (!$sid || !$token) {
            throw new \Twilio\Exceptions\ConfigurationException('Twilio credentials not configured properly.');
        }


        $identifier = $this->getIdentifier($request);
        if (!Cache::has($identifier . '_attempts')) {
            Cache::put($identifier . '_attempts', 0);
        }
        $attempts = Cache::get($identifier . '_attempts', 0);
        $lockoutExpiresAt = Cache::get($identifier . '_lockout_time');

         if ($lockoutExpiresAt && Carbon::now()->lessThan(Carbon::parse($lockoutExpiresAt))) {
            $minutesRemaining = Carbon::now()->diffInMinutes(Carbon::parse($lockoutExpiresAt));
            return $this->errorResponse('TOO_MANY_ATTEMPTS', ['minutes_remaining' => $minutesRemaining], 429, app()->getLocale());
        }

        // Check if attempts exceed the maximum allowed
        if ($attempts >= $this->maxAttempts) {
            Cache::put($identifier . '_lockout_time', Carbon::now()->addMinutes($this->lockoutTime), $this->lockoutTime * 60);
            Cache::forget($identifier . '_attempts');
            return $this->errorResponse('TOO_MANY_ATTEMPTS', ['minutes_remaining' => $this->lockoutTime], 429, app()->getLocale());
        }

        // Proceed with normal password reset logic
        if ($request->verification_method === 'email') {
            $user = User::where('email', $request->email)->first();
        } elseif ($request->verification_method === 'phone') {
            $user = User::where('phone', $request->phone)->first();
        }

        if (!$user) {
            return $this->errorResponse('USER_NOT_FOUND',[], 404, app()->getLocale());
        }
        $token = random_int(1000, 9999);
        $user->update(['remember_token' => $token]);

        if ($request->verification_method === 'email')
        {
            Mail::to($user->email)->send(new RestPasswordMail($token));
        } elseif ($request->verification_method === 'phone') {
           $this->smsService->sendSms("+970567083000", "TEST NADA ".$token);
          }

          Cache::increment($identifier . '_attempts');

         return $this->successResponse('PASSWORD_RESET_LINK_SEND', [], 201, app()->getLocale());
    }



    protected function getIdentifier($request)
    {
        if ($request->verification_method === 'email') {
            return 'password_reset_' . $request->email;
        } elseif ($request->verification_method === 'phone') {
            return 'password_reset_' . $request->phone;
        }
        return 'password_reset_' . $request->ip();
    }



    public function verifyToken(VerifyTokenRequest $request)
    {
        $user = User::where('email', $request->email)
                    ->orWhere('phone', $request->phone)
                    ->first();

        if (!$user) {
            return $this->errorResponse('USER_NOT_FOUND', [], 404, app()->getLocale());
        }
        if ($user->remember_token == $request->token) {
            return $this->successResponse('TOKEN_VALID', [], 200, app()->getLocale());
        } else {
            return $this->errorResponse('INVALID_TOKEN', [], 400, app()->getLocale());
        }
    }

    public function resetPassword(ResetPasswordRequest $request)
    {


        $user = User::where('email', $request->email)
                    ->orWhere('phone', $request->phone)
                    ->where('remember_token', $request->token)
                    ->first();

        if (!$user) {
            return $this->errorResponse('INVALID_TOKEN',[], 404, app()->getLocale());
         }

        $user->password = Hash::make($request->password);
        $user->remember_token = null;
        $user->save();

        return $this->successResponse('PASSWORD_RESET_SUCCESFULL', [], 202, app()->getLocale());
    }
}
