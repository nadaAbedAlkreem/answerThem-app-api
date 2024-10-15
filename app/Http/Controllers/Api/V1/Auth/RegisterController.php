<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
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
    public function create(Request $request)
    {
        $translatedPage = $this->userService->getTranslatedPageDataRegister();

        return $this->successResponse(
            $translatedPage['status'],
            $translatedPage['data'],
            200,
            app()->getLocale()
        );
    }

    public function register(RegisterRequest $request)
    {
        try {
             $user = $this->userService->register($request->getDataWithImage());
             return $this->successResponse('CREATE_USER_SUCCESSFULLY', $user, 201, app()->getLocale());
        } catch (\Exception $e) {
             return $this->errorResponse('ERROR_OCCURRED', ['error' => $e->getMessage()], 500, app()->getLocale());
        }

     }
}
