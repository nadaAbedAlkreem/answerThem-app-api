<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Resources\Api\UserWithTokenAccessResource;
 use App\Traits\ResponseTrait;
use App ;
use App\Services\UserService;
use Illuminate\Http\Request;

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

    public function logout(Request $request)
    {
        $this->offlineUserActive($request);
        $request->user()->currentAccessToken()->delete();
        return $this->successResponse('LOGGED_OUT_SUCCESSFULLY' ,[] ,202, app()->getLocale());

    }
    public function offline(Request $request)
    {
        $this->offlineUserActive($request);
        return $this->successResponse('UPDATE_STATUS_USER_ACTIVE' ,[] ,202, app()->getLocale());

    }
    private function  offlineUserActive($request)
    {
        $currentUser = $request->user();
         $currentUser->is_online = false;
        $currentUser->last_active_at = now();
        $currentUser->save();
    }
}
