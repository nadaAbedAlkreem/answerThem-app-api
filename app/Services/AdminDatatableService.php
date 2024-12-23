<?php

namespace App\Services;

use App\Helpers\Messages;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ControllersService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Throwable;
use Yajra\DataTables\DataTables;
use App\Models\Admin;
use Illuminate\Support\Str;




class AdminDatatableService extends Controller
{
    public function handle( $request,$data )
    {
          return DataTables::of($data)
            ->addIndexColumn()

            ->filter(function ($query) use ($request) {
                if (!empty($request->get('filter_column_type_user')) && $request->get('filter_column_type_user') != -1) {
                    $role = $request->get('filter_column_type_user');
                    $query->whereHas('roles', function ($roleQuery) use ($role) {
                        $roleQuery->where('id', $role);
                    });
                }
            })
            ->addColumn(
                'roles' , function($data)
            {
                $buttons = '';
                if (!empty($data->getRoleNames()))
                {
                    foreach ($data->getRoleNames() as $rolename)
                    {
                        $buttons .= '<label class="badge bg-primary mx-1"> '.$rolename.'</label>' ;
                    }
                }
                return $buttons ;



            }
            )
            ->addColumn('action', function ($data)
            {
                  $buttons ="" ;
                  if (auth()->user()->can("update admin")) {
                    $buttons .= '<a href="' . url("admins/" . $data->id . "/edit") . '?lang=' . app()->getLocale() . '" class="btn btn-outline-success mx-2 ">' . __('setting.Edit') . '</a>';
                }


                return '<td>' . $buttons . '</td>';
            })





            ->rawColumns([ 'action'  ,'roles'   ])
            ->make(true);

    }


}
