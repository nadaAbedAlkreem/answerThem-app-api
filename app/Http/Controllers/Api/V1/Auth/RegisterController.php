<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Resources\Api\UserResource;
use App\Http\Resources\Api\UserWithTokenAccessResource;
use App\Traits\ResponseTrait;
use App ;
use Illuminate\Http\Request;
use App\Services\UserService;
use Illuminate\Support\Facades\Auth;
class RegisterController extends Controller
{

    use ResponseTrait ;
     protected $userService ;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }


    public function register(RegisterRequest $request)
    {
        try {
             $user = $this->userService->register($request->getDataWithImage());
             $request->session()->regenerate();
             return $this->successResponse('CREATE_USER_SUCCESSFULLY',  new UserWithTokenAccessResource($user), 201, app()->getLocale());
        } catch (\Exception $e) {
            if ($e->getCode() === '23000') {
                return $this->errorResponse('ERROR_OCCURRED'  ,['error' =>  __('messages.phone.unique')],    400 ,app()->getLocale() );
            }
             return $this->errorResponse('ERROR_OCCURRED', ['error' => $e->getMessage()], 500, app()->getLocale());
        }
     }
}
