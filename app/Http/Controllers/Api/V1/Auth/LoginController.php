<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Resources\Api\UserWithTokenAccessResource;
 use App\Traits\ResponseTrait;
use App ;
use App\Services\UserService;
 ;
class LoginController extends Controller
{

    use ResponseTrait ;
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
    public function index()
    {
         throw new \Illuminate\Auth\AuthenticationException('Unauthenticated.');
    }


    public function login(LoginRequest $request)
    {
        try {
            $user = $request->authenticate();
             return $this->successResponse(
                'LOGGED_IN_SUCCESSFULLY',
                new UserWithTokenAccessResource($user),
                202,
                app()->getLocale()
            );
        } catch (\Exception $e) {
            return $this->errorResponse(
                'ERROR_OCCURRED',
                ['error' => $e->getMessage()],
                500,
                app()->getLocale()
            );
        }
    }
}
