<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Traits\ResponseTrait;
use App ;
use App\Services\UserService;
use App\Http\Resources\Api\UserResource;
class LoginController extends Controller
{

    use ResponseTrait ;
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
    public function notAuthorized()
    {
        return $this->errorResponse('NOTAUTHORIZED', 401 , app()->getLocale());

    }

    public function login(LoginRequest $request)
    {
        try {
            $user = $this->userService->login($request->getData());
            $request->session()->regenerate();
            return $this->successResponse('LOGGED_IN_SUCCESSFULLY',new UserResource($user) , 202, app()->getLocale());
        } catch (\Exception $e) {
            return $this->errorResponse('ERROR_OCCURRED', ['error' => $e->getMessage()], 500, app()->getLocale());
        }
    }
}
