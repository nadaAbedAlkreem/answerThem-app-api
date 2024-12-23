<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Repositories\IUserRepositories;
use App\Services\UsersDatatableService;
use App\Traits\ResponseTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Throwable;

class UserController extends Controller
{
    use ResponseTrait ;
    protected $userRepo;
    public function __construct(IUserRepositories $userRepositories )
    {
        $this->userRepo = $userRepositories;
     }
    public function index(Request $request ,  UsersDatatableService $userDatatableService)
    {
           if ($request->ajax())
            {
                $dataNative = User::select('*')->orderBy('created_at', 'desc') ;
                try {
                    return $userDatatableService->handle($request,$dataNative);
                } catch (Throwable $e) {
                    return response([
                        'message' => $e->getMessage(),
                    ], 500);
                }
            }
        return view('dashboard.pages.users' , ['lang' => app::getLocale()]);
    }

    public function destroy($id)
    {
         try {
            $this->userRepo->delete($id);
            return $this->successResponse('DELETE_SUCCESS',[], 202, App::getLocale())  ;
        }catch (Throwable $e){
            return response([
                'message' => $e->getMessage(),
            ], 500);
        }


    }
}
