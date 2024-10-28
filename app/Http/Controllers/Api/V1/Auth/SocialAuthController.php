<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\UserWithTokenAccessResource;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Hash;
use App\Traits\ResponseTrait;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Exception;
use App ;
use Illuminate\Support\Str;




class SocialAuthController extends Controller
{
    use ResponseTrait ;
//    public function redirectToGoogle()
//    {
//         return Socialite::driver('google')->redirect();
//    }
//
//    public function handleGoogleCallback()
//    {
//        try {
//            $googleUser = Socialite::driver('google')->user();
//            return $this->handleSocialUser($googleUser, 'google');
//        } catch (Exception $e) {
//            return $this->errorResponse('ERROR_OCCURRED', ['error' => $e->getMessage()], 500, app()->getLocale());
//        }
//    }
    public function handleSocialLogin(Request $request)
    {
        try {
            $request->validate([
                'social_type' => 'required|string',
                'social_token' => 'required|string',
                'fcm_token' => 'required|string',
                'device_type' => 'required|string',
            ]);

             // Verify Google token and get user information
            $socialUser = Socialite::driver($request->input['social_type'])->stateless()->userFromToken($request->social_token);

            // Check if the user exists in your database
            $user = User::where('email', $socialUser->email)->first();

            if (!$user) {
                // If user does not exist, create a new user
                $user = User::create([
                    'full_name' => $socialUser->name,
                    'email' => $socialUser->email,
//                    'phone' => $socialUser->email, // You might want to modify this to handle phone numbers properly
                    'image' => $socialUser->avatar,
                    'provider' =>$request->input['social_type'] ,
                    'provider_id' => $socialUser->id,
                    'password' => Hash::make(Str::random(8)), // Generate a random password for security
                ]);
            }

             $userToken =  $user->createToken('API Token')->plainTextToken;
             $data = ['access_token' => $userToken,'user' => $user,];
             return $this->successResponse('LOGGED_IN_SUCCESSFULLY',   new UserWithTokenAccessResource($data) , 202, app()->getLocale());

            // Return the response
//            return response()->json([
//                'success' => true,
//                'data' => [
//                    'social_type' => 'required|string|in:google,twitter,instagram',
//                    'social_token' => $request->social_token,
//                    'fcm_token' => $request->fcm_token,
//                    'device_type' => $request->device_type,
//                ],
//                'user' => $user,
//                'token' => $token,
//            ]);
        } catch (Exception $e) {
              return $this->errorResponse('ERROR_OCCURRED', ['error' => $e->getMessage()], 500, app()->getLocale());

        }
    }
//    public function redirectToTwitter()
//    {
//        return Socialite::driver('twitter')->redirect();
//    }
//
//    public function handleTwitterCallback()
//    {
//        try {
//            $twitterUser = Socialite::driver('twitter')->user();
//            return $this->handleSocialUser($twitterUser, 'twitter');
//        } catch (Exception $e) {
//             return $this->errorResponse('ERROR_OCCURRED', ['error' => $e->getMessage()], 500, app()->getLocale());
//        }
//    }
//
//    public function redirectToInstagram()
//    {
//        return Socialite::driver('instagram')->redirect();
//    }
//
//    public function handleInstagramCallback()
//    {
//        try {
//            $instagramUser = Socialite::driver('instagram')->user();
//            return $this->handleSocialUser($instagramUser, 'instagram');
//        } catch (Exception $e) {
//            return $this->errorResponse('ERROR_OCCURRED', ['error' => $e->getMessage()], 500, app()->getLocale());
//        }
//    }

//    private function handleSocialUser($socialUser, $provider)
//    {
//        $user = User::where('provider_id', $socialUser->getId())->first();
//        if (!$user) {
//              $user = User::create([
//                'full_name' => $socialUser->getName(),
//                'name' => $socialUser->getNickname(),
//                'email' => $socialUser->getEmail(),
//                'phone' => $socialUser->getEmail(),
//                'image' => $socialUser->getAvatar(),
//                'provider' => $provider,
//                'provider_id' => $socialUser->getId(),
//                'password' => Hash::make(Str::random(8)),
//            ]);
//        }else
//        {
//            return $this->errorResponse('ERROR_OCCURRED', ['error' => $user], 500, app()->getLocale());
//
//        }
//         Auth::login($user);
//         $token = $user->createToken('auth_token')->plainTextToken;
//         $dataUser =[
//            'access_token' => $token,
//            'token_type' => 'Bearer',
//            'user' => $user] ;
//
//
//        return $this->successResponse('CREATE_USER_SUCCESSFULLY', $dataUser, 201, app()->getLocale());
//
//    }
//    public function handleInstagramDeauthorization(Request $request)
//    {
//        $instagramUserId = $request->input('user_id');
//        $user = User::where('instagram_id', $instagramUserId)->first();
//        if ($user) {
//            $user->delete();
//        }
//         return response()->json(['status' => 'success'], 200);
//    }
//


}
