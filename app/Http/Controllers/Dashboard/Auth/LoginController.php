<?php

namespace App\Http\Controllers\Dashboard\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Resources\Api\UserWithTokenAccessResource;
use App\Services\UserService;
use App\Traits\ResponseTrait;
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
             dd(Auth::guard('admin'));
            if (Auth::guard('admin')->attempt($credentials)) {
                 return redirect()->route('dashboard.home' , ['lang'=>app::getLocale()]);
            }

        } catch (\Exception $e) {
             dd($e->getMessage());
             return $this->errorResponse(
                'ERROR_OCCURRED',
                ['error' =>'The attached data is incorrect, either the email or the password'],
                500,
                app()->getLocale()
            );
        }
    }
}
