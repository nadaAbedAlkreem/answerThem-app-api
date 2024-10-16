<?php
namespace App\Services;

use App\Models\User;
use App\Repositories\IUserRepository;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class UserService
{

    protected $userRepository;

    public function __construct(IUserRepository $userRepository)
    {
        $this->userRepository = $userRepository; // Inject the repository
    }

    public function register($data)
    {
        try {
            return $this->userRepository->create($data);
        } catch (\Exception $e) {
             throw new \Exception($e->getMessage());
        }

    }



        public function login($credentials)
        {
            $user = Auth::user();
            $token = $user->createToken('auth_token')->plainTextToken;

            return [
                'access_token' => $token,
                'token_type' => 'Bearer',
                'user' => $user,
                'status' => 200
            ];
        }

    public function getTranslatedPageDataRegister()
    {
        $page_en = [
            'register_new_account' => __('auth.register_new_account'),
            'username' => __('auth.username'),
            'full_name' => __('auth.full_name'),
            'email' => __('auth.email'),
            'mobile_number' => __('auth.mobile_number'),
            'password' => __('auth.password'),
            'confirm_password' => __('auth.confirm_password'),
            'create_account' => __('auth.create_account'),
            'remember_me' => __('auth.remember_me'),
            'forgot_password' => __('auth.forgot_password'),
            'or_via' => __('auth.or_via'),
            'already_have_account' => __('auth.already_have_account'),
            'register_now' => __('auth.register_now'),
            'login' => __('auth.login'),
            'account_created' => __('auth.account_created'),
        ];

        $page_ar = [
            'register_new_account' => __('auth.register_new_account'),
            'username' => __('auth.username'),
            'full_name' => __('auth.full_name'),
            'email' => __('auth.email'),
            'mobile_number' => __('auth.mobile_number'),
            'password' => __('auth.password'),
            'confirm_password' => __('auth.confirm_password'),
            'create_account' => __('auth.create_account'),
            'remember_me' => __('auth.remember_me'),
            'forgot_password' => __('auth.forgot_password'),
            'or_via' => __('auth.or_via'),
            'already_have_account' => __('auth.already_have_account'),
            'register_now' => __('auth.register_now'),
            'login' => __('auth.login'),
            'account_created' => __('auth.account_created'),
        ];

        // Return the correct translation based on the application's locale
        if (app()->getLocale() == 'en') {
            return [
                'status' => 'PAGE_TRANSLATED_SUCCESS',
                'data' => $page_en,
            ];
        } else {
            return [
                'status' => 'PAGE_TRANSLATED_SUCCESS',
                'data' => $page_ar,
            ];
        }
    }
    public function getTranslatedPageDataForgetPasseord()
    {
        $page_en = [
            'forget_password'=>  __('auth.forget_password'),
            'enter_email_or_password'=>  __('auth.enter_email_or_password'),
            'send'=>  __('auth.send'),
            'mobile_number' => __('auth.mobile_number'),
            'email' => __('auth.email'),
        ];

        $page_ar = [
            'forget_password'=>  __('auth.forget_password'),
            'enter_email_or_password'=>  __('auth.enter_email_or_password'),
            'send'=>  __('auth.send'),
            'mobile_number' => __('auth.mobile_number'),
            'email' => __('auth.email'),
        ];

        // Return the correct translation based on the application's locale
        if (app()->getLocale() == 'en') {
            return [
                'status' => 'PAGE_TRANSLATED_SUCCESS',
                'data' => $page_en,
            ];
        } else {
            return [
                'status' => 'PAGE_TRANSLATED_SUCCESS',
                'data' => $page_ar,
            ];
        }




    }


    public function getTranslatedPageDataChangePassword()
    {
        $page_en = [
            'forget_password'=>  __('auth.forget_password'),
            'enter_new_password'=>  __('auth.enter_new_password'),
            'send'=>  __('auth.send'),
            'confirm_password' => __('auth.confirm_password'),
            'password' => __('auth.password'),

        ];

        $page_ar = [
            'forget_password'=>  __('auth.forget_password'),
            'enter_new_password'=>  __('auth.enter_new_password'),
            'send'=>  __('auth.send'),
            'confirm_password' => __('auth.confirm_password'),
            'password' => __('auth.password'),

        ];

        // Return the correct translation based on the application's locale
        if (app()->getLocale() == 'en') {
            return [
                'status' => 'PAGE_TRANSLATED_SUCCESS',
                'data' => $page_en,
            ];
        } else {
            return [
                'status' => 'PAGE_TRANSLATED_SUCCESS',
                'data' => $page_ar,
            ];
        }




    }


    public function getTranslatedPageverifyToken()
    {
        $page_en = [
            'enter_verification'=>  __('auth.enter_verification'),
            'enter_verification_text'=>  __('auth.enter_verification_text'),
            'verification'=>  __('auth.verification'),
        ];

        $page_ar = [
            'enter_verification'=>  __('auth.enter_verification'),
            'enter_verification_text'=>  __('auth.enter_verification_text'),
            'verification'=>  __('auth.verification'),

        ];

        // Return the correct translation based on the application's locale
        if (app()->getLocale() == 'en') {
            return [
                'status' => 'PAGE_TRANSLATED_SUCCESS',
                'data' => $page_en,
            ];
        } else {
            return [
                'status' => 'PAGE_TRANSLATED_SUCCESS',
                'data' => $page_ar,
            ];
        }




    }
    public function getTranslatedPageDataLogin()
    {

        $page_en = [
            'welcome_back' => __('auth.welcome_back'),
            'email' => __('auth.email'),
            'password' => __('auth.password'),
            'confirm_password' => __('auth.confirm_password'),
            'create_account' => __('auth.create_account'),
            'remember_me' => __('auth.remember_me'),
            'forgot_password' => __('auth.forgot_password'),
            'or_via' => __('auth.or_via'),
            'register_now' => __('auth.register_now'),
            'dont_have_account' => __('auth.dont_have_account'),
            'login' => __('auth.login'),
            'account_created' => __('auth.account_created'),
        ];

        $page_ar = [
            'register_new_account' => __('auth.register_new_account'),
            'username' => __('auth.username'),
            'full_name' => __('auth.full_name'),
            'email' => __('auth.email'),
            'mobile_number' => __('auth.mobile_number'),
            'password' => __('auth.password'),
            'confirm_password' => __('auth.confirm_password'),
            'create_account' => __('auth.create_account'),
            'remember_me' => __('auth.remember_me'),
            'forgot_password' => __('auth.forgot_password'),
            'or_via' => __('auth.or_via'),
            'already_have_account' => __('auth.already_have_account'),
            'register_now' => __('auth.register_now'),
            'login' => __('auth.login'),
            'account_created' => __('auth.account_created'),
        ];

        // Return the correct translation based on the application's locale
        if (app()->getLocale() == 'en') {
            return [
                'status' => 'PAGE_TRANSLATED_SUCCESS',
                'data' => $page_en,
            ];
        } else {
            return [
                'status' => 'PAGE_TRANSLATED_SUCCESS',
                'data' => $page_ar,
            ];
        }
    }


}
