<?php

namespace App\Services;
use Yajra\DataTables\Facades\DataTables;

class CategoryDatatableService
{

    public function handle($request, $data)
    {
        $transformedData = $data->toArray($request);

        return DataTables::of($transformedData)
            ->addIndexColumn()
            ->filter(function ($instance) use ($request) {

            })
            ->addColumn('action', function ($data) {
             return                    '  <td class="min-w-80px">
                                                <!--begin::Star-->
                                                <a href="#" class="btn btn-icon btn-color-gray-400 btn-sm btn-active-color-primary" data-bs-toggle="tooltip" data-bs-placement="right" title="Star">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                                                    <span class="svg-icon svg-icon-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path d="M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z" fill="black" />
																	</svg>
																</span>
                                                    <!--end::Svg Icon-->
                                                </a>
                                                <!--end::Star-->

                                                 <button name="bstable-actions" class="deleteRecord btn btn-xs btn show_confirm"    data-id="' . $data['id'] . '" > <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
//                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
//                                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
//                                              </svg> </button>

                                                 <a href="#" class="btn btn-icon btn-color-gray-400 btn-sm btn-active-color-primary" data-bs-toggle="tooltip" data-bs-placement="right" title="Mark as important">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen056.svg-->
                                                    <span class="svg-icon svg-icon-3 mt-1">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path d="M16.0077 19.2901L12.9293 17.5311C12.3487 17.1993 11.6407 17.1796 11.0426 17.4787L6.89443 19.5528C5.56462 20.2177 4 19.2507 4 17.7639V5C4 3.89543 4.89543 3 6 3H17C18.1046 3 19 3.89543 19 5V17.5536C19 19.0893 17.341 20.052 16.0077 19.2901Z" fill="black" />
																	</svg>
																</span>
                                                    <!--end::Svg Icon-->
                                                </a>
                                                <!--end::Important-->
                                            </td>';

//             return  '  <button type="button"  class="btn btn-xs btn"
//                                     ><a href = "news/' . $data->id . '/edit"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
//                                     <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
//                                    </svg></a>
//                        <button name="bstable-actions" class="deleteRecord btn btn-xs btn show_confirm"    data-id="' . $data->id . '" > <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
//                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
//                                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
//                                              </svg> </button>';



            })
            ->addColumn('name' , function ($data){
                $initialOrImage = '';

                // Check if the data contains an image
                if (!empty($data['image'])) {
                    $initialOrImage = '<img src="' . $data['image'] . '" alt="' . $data['name'] . '" class="img-fluid" style="width: 35px; height: 35px; border-radius: 50%;">';
                } else {
                    $initialOrImage = '<span class="text-warning">' . substr($data['name'], 0, 1) . '</span>';
                }

                // Return the full HTML structure
                return '<td class="w-150px w-md-175px">' .
                    '<a class="d-flex align-items-center text-dark">' .
                    '<div class="symbol symbol-35px me-3">' .
                    '<div class="symbol-label bg-light-warning">' .
                    $initialOrImage .
                    '</div>' .
                    '</div>' .
                    '<span class="fw-bold">' . $data['name'] . '</span>' .
                    '</a>' .
                    '</td>';
            })
            ->addColumn('description', function ($data) {
                 return '<td>' .
                    '<div class="text-dark mb-1">' .
                    '<a class="text-dark">' .
                    '<span class="fw-bolder">' . $data['description'] . '</span>' .
                    '<span class="d-none d-md-inline text-muted">' . substr($data['description'], 0, 20) . '...</span>' .
                    '</a>' .
                    '</div>' .
                    '</td>';

            })

            ->addColumn('rating',function ($data){
                return  '<td class="w-100px text-end fs-7 pe-9">
                                           <span class="fw-bold text-muted">'.$data['rating'].'</span>
                             </td>' ;

            })


            ->rawColumns(['action', 'name' , 'rating' , 'description'])
            ->make(true);
    }
}
