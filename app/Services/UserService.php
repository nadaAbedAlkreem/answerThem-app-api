<?php
namespace App\Services;

use App\Models\User;
use App\Repositories\IUserRepositories;
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class UserService
{

    protected $userRepository;

    public function __construct(IUserRepositories $userRepository)
    {
        $this->userRepository = $userRepository; // Inject the repository
    }

    public function register($data)
    {
        try {

            $user = $this->userRepository->create($data);
            $credentials = $user->only('email', 'password');
            $user = User::where('email', $credentials['email'])->first();

            if ($user) {
                $userToken =  $user->createToken('API Token')->plainTextToken;
            }else
            {
                throw new Exception('Invalid credentials');
            }
            return   [
                'access_token' =>  $userToken ,
                'token_type' => 'Bearer',
                'user' => $user
            ] ;
        } catch (\Exception $e) {
             throw new \Exception($e->getMessage());
        }

    }



    public function getTranslatedPagesAuthentication()
    {

        $page_register = [
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

        $page_forget_password =  [
            'forget_password'=>  __('auth.forget_password'),
            'enter_email_or_password'=>  __('auth.enter_email_or_password'),
            'send'=>  __('auth.send'),
            'mobile_number' => __('auth.mobile_number'),
            'email' => __('auth.email'),
        ];

        $page_change_password = [
            'forget_password'=>  __('auth.forget_password'),
            'enter_new_password'=>  __('auth.enter_new_password'),
            'send'=>  __('auth.send'),
            'confirm_password' => __('auth.confirm_password'),
            'password' => __('auth.password'),

        ];
        $page_verify_token = [
            'enter_verification'=>  __('auth.enter_verification'),
            'enter_verification_text'=>  __('auth.enter_verification_text'),
            'verification'=>  __('auth.verification'),

        ];

        $page_login = [
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
             return [
                'status' => 'PAGE_TRANSLATED_SUCCESS',
                'data' => [
                    'page_register' => $page_register,
                    'page_forget_password' => $page_forget_password,
                    'page_change_password' => $page_change_password,
                    'page_verify_token' => $page_verify_token,
                    'page_login' => $page_login,
                ],
            ];

    }







}
