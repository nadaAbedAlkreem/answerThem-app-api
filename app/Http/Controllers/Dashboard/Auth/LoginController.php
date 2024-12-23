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
               if (auth('admin')->attempt($credentials)) {
                   $user =auth('admin')->user();

                   if($user->getRoleNames()[0] == 'staff')
                  {
                      return redirect()->route('dashboard.question' , ['lang' => app()->getLocale()]);

                  }

                   return redirect()->route('dashboard.home' , ['lang' => app()->getLocale()]);
             }
            else
            {
                throw new Exception(__('messages.invalid_credentials'));

            }
        } catch (\Exception $e) {
             return redirect()->route('admin.login' , ['error' => $e->getMessage()]);
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
