<?php

namespace App\Services;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class ContactUsDatatableService
{

    public function handle($request, $data)
    {

        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($data) {
                                        return  '

                                                  <a  class="btn btn-icon btn-color-gray-400 btn-sm btn-active-color-primary deleteRecord btn btn-xs btn show_confirm "  data-id="' . $data['id'] . '" data-bs-toggle="tooltip" data-bs-placement="right" title="Mark as important">
                                                         <span class="svg-icon svg-icon-3 mt-1">
                                                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
//                                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
//                                                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
//                                                                    </svg>
                                                                    </span>
                                                     </a>

                                            </td>';

            })
            ->addColumn('status', function ($data) {
                return '
                <div class="mb-3">
                     <select name="status" id="status" style ="border: none !important;" class="form-select" style="height: 40px;">
                        <option value="important" ' . ($data['status'] == 'important' ? 'selected' : '') . '>Important</option>
                        <option value="middle" ' . ($data['status'] == 'middle' ? 'selected' : '') . '>Middle</option>
                        <option value="not_important" ' . ($data['status'] == 'not_important' ? 'selected' : '') . '>Not Important</option>
                    </select>
                </div>';
            })

            ->addColumn('sender', function ($data) {

                return $data['sender']['name'] ;

            })

            ->rawColumns(['action' ,'status'])
            ->make(true);
    }





}
