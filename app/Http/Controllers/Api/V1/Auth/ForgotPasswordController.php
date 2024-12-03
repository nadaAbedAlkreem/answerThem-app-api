<?php
namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\ForgotPasswordRequest;
use App\Http\Requests\Auth\VerifyTokenRequest;
use App\Http\Requests\Auth\ResetPasswordRequest;
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
    protected $client ;
    protected $smsService ;
    protected $maxAttempts = 5;
    protected $lockoutTime = 60;
    protected $userService;

    public function __construct(SmsService $smsService ,UserService $userService)
    {
        $this->client = new Client(config('services.twilio.sid'), config('services.twilio.token'));
        $this->smsService = $smsService;
        $this->userService = $userService;

    }


     public function sendResetLink(ForgotPasswordRequest $request)
     {


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

         if ($attempts >= $this->maxAttempts) {
             Cache::put($identifier . '_lockout_time', Carbon::now()->addMinutes($this->lockoutTime), $this->lockoutTime * 60);
             Cache::forget($identifier . '_attempts');
             return $this->errorResponse('TOO_MANY_ATTEMPTS', ['error'=> __('messages.TOO_MANY_ATTEMPTS')], 429, app()->getLocale());
         }

         $user = $request->verification_method === 'email'
             ? User::where('email', $request->email)->first()
             : User::where('phone', $request->phone)->first();

         if (!$user) {
             return $this->errorResponse('USER_NOT_FOUND', [], 404, app()->getLocale());
         }

         $token = random_int(1000, 9999);
         $user->update(['remember_token' => $token]);
         $utcNow = Carbon::now();
         $localNow = $utcNow->setTimezone('Asia/Baghdad');
         $expiryTime = $localNow->copy()->addMinutes(1);
          Cache::put($identifier . '_token', ['token' => $token, 'expires_at' => $expiryTime], 60); // Store token and expiry time
         $cachedData = Cache::get($identifier . '_token');

         if ($request->verification_method === 'email') {
              Mail::to($user->email)->send(new RestPasswordMail($token));
         } elseif ($request->verification_method === 'phone') {
             $this->smsService->sendSms($user->phone, "Your verification code is: $token");
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
         $identifier = $this->getIdentifier($request);
         $cachedData = Cache::get($identifier . '_token');
          if (!$cachedData || Carbon::now()->setTimezone('Asia/Baghdad')->greaterThan(Carbon::parse($cachedData['expires_at']))) {
             return $this->errorResponse('TOKEN_EXPIRED', [], 400, app()->getLocale());
         }
         $user = User::where('email', $request->email)
             ->orWhere('phone', $request->phone)
             ->first();
         if (!$user) {
             return $this->errorResponse('USER_NOT_FOUND', [], 404, app()->getLocale());
         }
         if ($cachedData['token'] == $request->token) {
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
