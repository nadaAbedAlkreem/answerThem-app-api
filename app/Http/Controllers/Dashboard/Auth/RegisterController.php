<?php

namespace App\Http\Controllers\Dashboard\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterAdminRequest;
use App\Models\Admin;
use App\Repositories\IUserRepositories;
use App\Traits\ResponseTrait;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    use ResponseTrait ;
    protected $userRepositories;

    public function __construct(IUserRepositories $userRepositories)
    {
        $this->userRepositories = $userRepositories;
    }
    public function index()
    {
         return view('dashboard.auth.pages.sign_up');
    }
    public function register(RegisterAdminRequest $request)
    {
        try {
            $user = Admin::create($request->getData());
            $user->assignRole('staff');
            return $this->successResponse('CREATE_USER_SUCCESSFULLY',[], 201, app()->getLocale());
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
