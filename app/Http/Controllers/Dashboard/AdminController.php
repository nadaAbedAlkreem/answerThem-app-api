<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Services\AdminDatatableService;
use App\Traits\ResponseTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;
use Spatie\Permission\Models\Role;
use App\Services\UsersDatatableService  ;
use Throwable;

use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
   use ResponseTrait ;
    public function __construct()
    {
        $this->middleware('permission:view admin', ['only' => ['index']]);
        $this->middleware('permission:update admin',['only' => ['update','edit']]);
    }

    public function index(Request $request , AdminDatatableService $adminsDatatableService)
    {
         $roles = Role::pluck('name','id')->all();
          if ($request->ajax())
        {
            $users = Admin::select();

            try {
                return $adminsDatatableService->handle($request,$users );
            } catch (Throwable $e) {
                return response([
                    'message' => $e->getMessage(),
                ], 500);
            }
        }
         return view('dashboard.role&permission.admin.index'  ,[ 'lang' => app::getLocale(), 'roles' => $roles]);
    }

    // public function create()
    // {
    //     $roles = Role::pluck('name','name')->all();
    //     return view('role-permission.user.create', ['roles' => $roles]);
    // }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'full_name' => 'required|string|max:255',
    //         'email' => 'required|email|max:255|unique:users,email',
    //         'password' => 'required|string|min:8|max:20',
    //         'roles' => 'required'
    //     ]);

    //     $user = Admins::create([
    //                     'full_name' => $request->full_name,
    //                     'email' => $request->email,
    //                     'password' => Hash::make($request->password),
    //                 ]);

    //     $user->syncRoles($request->roles);

    //     return redirect('/users')->with('status','User created successfully with roles');
    // }

    public function edit(Admin $admins, $id)
    {
         $admins_ =  $admins::select('*')->where('id', $id)->first();
        $roles = Role::pluck('name','name')->all();

        $userRoles = $admins_->roles->pluck('name','name')->all();
        return view('dashboard.role&permission.admin.edit', [
            'user' => $admins_,
            'roles' => $roles,
            'userRoles' => $userRoles
        ]);
    }

    public function update(Request $request, Admin  $admins , $id)
    {
        try {

             $admins= Admin::select('*')->where('id', $request['id'])->first();
             $validation =  $request->validate([
                'name' => 'required|string|max:255',
                'roles' => [
                    'required',
                    function ($attribute, $value, $fail ) use ($admins) {
                     $superAdminsCount = Admin::role('super-admin')->count();

                        if ($admins->hasRole('super-admin') && !in_array('super-admin', $value) && $superAdminsCount <= 1) {
                            $fail('You cannot assign a role other than "super admin" as there is no other "super admin" in the table.');
                        }
                    },
                ],
            ]);
            $data = [
                'name' => $request->name,
                'email' => $request->email,

            ];
            $admins->update($data);
            $admins->syncRoles($request->roles);
            return $this->successResponse('UPDATE_SUCCESS',[], 201, app()->getLocale());

        }catch (Throwable $e) {
            return $this->errorResponse(
                'ERROR_OCCURRED',
                ['error' => $e->getMessage()],
                500,
                app()->getLocale()
            );
        }

    }

//     public function destroy($userId)
//     {
//         $admins = Admins::findOrFail($userId);
//         $admins->delete();

//         return redirect('/users')->with('status','User Delete Successfully');
//     }
}
