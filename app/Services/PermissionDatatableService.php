<?php

namespace App\Services;

use App\Helpers\Messages;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ControllersService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;
use Yajra\DataTables\DataTables;



class PermissionDatatableService extends Controller
{
    public function handle( $request,$data)
    {
        return DataTables::of($data)
            ->addIndexColumn()

            ->filter(function ($instance) use ($request) {

            })
            ->addColumn('action', function ($data)
            {
                $buttons = '';

                if (auth()->user()->can("update permission")) {
                    $buttons .= '<a href="' . url('permissions/' . $data->id . '/edit') . '?lang=' . app()->getLocale() . '" class="btn btn-outline-success mx-2 ">'.__('setting.Edit').'</a>';
                }

                // Delete button (conditionally rendered based on user permission)
                if (auth()->user()->can("delete permission")) {
                    $buttons .= '<a href="#" data-id="' . $data->id . '" class="deleteRecord btn btn-outline-danger mx-2 show_confirm">'.__('setting.Delete').'</a>';
                }

                return '<td>' . $buttons . '</td>';
            })





            ->rawColumns([ 'action'   ])
            ->make(true);

    }


}
