<?php

namespace App\Http\Controllers\Dashboard\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Resources\Api\UserWithTokenAccessResource;
use App\Services\UserService;
use App\Traits\ResponseTrait;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use ResponseTrait ;

    public function index()
    {
    return view('dashboard.auth.pages.sign_in');
    }


    public function login(Request $request)
    {
         try {
            $credentials = $request->only('email', 'password');
             if (Auth::guard('admin')->attempt($credentials)) {
                 return $this->successResponse('LOGGED_IN_SUCCESSFULLY',[], 202, App::getLocale())  ;
            }
            else
            {
                throw new Exception(__('messages.invalid_credentials'));

            }
        } catch (\Exception $e) {
              return $this->errorResponse(
                'ERROR_OCCURRED',
                ['error' => $e->getMessage()],
                500,
                app()->getLocale()
            );
        }
    }
    public function logout()
    {
        Auth::guard('admin')->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect()->route('admin.login')->with('success', 'You have been logged out.');

    }
}
