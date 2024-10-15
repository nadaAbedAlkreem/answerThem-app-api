<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\Controller;
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
    public function redirectToGoogle()
    {
         return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();
            return $this->handleSocialUser($googleUser, 'google');
        } catch (Exception $e) {
            return $this->errorResponse('ERROR_OCCURRED', ['error' => $e->getMessage()], 500, app()->getLocale());
        }
    }

    public function redirectToTwitter()
    {
        return Socialite::driver('twitter')->redirect();
    }

    public function handleTwitterCallback()
    {
        try {
            $twitterUser = Socialite::driver('twitter')->user();
            return $this->handleSocialUser($twitterUser, 'twitter');
        } catch (Exception $e) {
             return $this->errorResponse('ERROR_OCCURRED', ['error' => $e->getMessage()], 500, app()->getLocale());
        }
    }

    public function redirectToInstagram()
    {
        return Socialite::driver('instagram')->redirect();
    }

    public function handleInstagramCallback()
    {
        try {
            $instagramUser = Socialite::driver('instagram')->user();
            return $this->handleSocialUser($instagramUser, 'instagram');
        } catch (Exception $e) {
            return $this->errorResponse('ERROR_OCCURRED', ['error' => $e->getMessage()], 500, app()->getLocale());
        }
    }

    private function handleSocialUser($socialUser, $provider)
    {
        $user = User::where('provider_id', $socialUser->getId())->first();
        if (!$user) {
              $user = User::create([
                'full_name' => $socialUser->getName(),
                'name' => $socialUser->getNickname(),
                'email' => $socialUser->getEmail(),
                'phone' => $socialUser->getEmail(),
                'image' => $socialUser->getAvatar(),
                'provider' => $provider,
                'provider_id' => $socialUser->getId(),
                'password' => Hash::make(Str::random(8)),
            ]);
        }else
        {
            return $this->errorResponse('ERROR_OCCURRED', ['error' => $user], 500, app()->getLocale());

        }
         Auth::login($user);
         $token = $user->createToken('auth_token')->plainTextToken;
         $dataUser =[
            'access_token' => $token,
            'token_type' => 'Bearer',
            'user' => $user] ;


        return $this->successResponse('CREATE_USER_SUCCESSFULLY', $dataUser, 201, app()->getLocale());

    }
    public function handleInstagramDeauthorization(Request $request)
    {
        $instagramUserId = $request->input('user_id');
        $user = User::where('instagram_id', $instagramUserId)->first();
        if ($user) {
            $user->delete();
        }
         return response()->json(['status' => 'success'], 200);
    }



}
