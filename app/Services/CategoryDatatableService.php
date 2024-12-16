<?php

namespace App\Services;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class CategoryDatatableService
{

    public function handle($request, $data)
    {
        $transformedData = $data->toArray($request);
        if ($request->has('level_category') && !empty($request->level_category)) {
            $transformedData = array_filter($transformedData, function ($item) use ($request) {
                return $item['level'] == $request->level_category;
            });
        }
        if ($request->has('categorySelect') && !empty($request->categorySelect)) {
            $transformedData = array_filter($transformedData, function ($item) use ($request) {
                return $item['parent_id'] == $request->categorySelect;
            });
        }
        return DataTables::of($transformedData)
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
                                                 <a  class="btn btn-icon btn-color-gray-400 btn-sm btn-active-color-primary updateRecord" data-bs-toggle="modal" data-bs-target="#kt_modal_update_app"  data-famous_gaming="' . $data['famous_gaming']. '"  data-id="' . $data['id']. '"  data-name_ar="' . $data['name_ar']. '" data-name_en="' . $data['name_en']. '"  data-description_ar="' . $data['description_ar']. '"  data-description_en="' . $data['description_en']. '"  data-rating="' .$data['rating']. '"  data-level="' .$data['level']. '"  data-category_id="' .$data['parent_id']. '"  data-image="' .$data['image']. '"  data-bs-toggle="tooltip" data-bs-placement="right" title="Mark as important">
                                                     <span class="svg-icon svg-icon-3 mt-1">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                <path d="M14.06 2.939l6.364 6.364c.195.195.195.51 0 .707l-9.182 9.182c-.195.195-.51.195-.707 0l-6.364-6.364c-.195-.195-.195-.51 0-.707l9.182-9.182c.195-.195.51-.195.707 0zm-3.88 9.056L4.5 16.939v3.061h3.061l5.686-5.686-3.061-3.061z" fill="currentColor"/>
                                                                      </svg>

																</span>
                                                 </a>
                                                <!--end::Important-->
                                            </td>';




            })
            ->addColumn('famous gaming' , function ($data){
                $data = ($data['famous_gaming'])  ;
                $result = ' ' ;

                 if($data == 1)
                {
                     $result = '<td class="min-w-80px">

                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" name="famous_gaming" id="radioSwitch" value="on" checked disabled>
                                         </div>
                               </td>
                ' ;
                }else
                {
                    $result = '<td class="min-w-80px">
                              <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" name="famous_gaming" id="radioSwitch" value="off" disabled>
                                         </div>
                            </td>
                            ' ;
                }
                return $result ;

            })
            ->addColumn('name' , function ($data){
                $initialOrImage = '';

                $imageUrl = asset($data['image']);

                if (!empty($data['image'])) {
                    $initialOrImage = '<img src="' . $imageUrl . '" alt="' . htmlspecialchars($data['name'], ENT_QUOTES) . '" class="img-fluid" style="width: 35px; height: 35px; border-radius: 50%;">';
                } else {
                    $initialOrImage = '<span class="text-warning">' . mb_substr($data['name'], 0, 1, 'UTF-8') . '</span>';
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
                $description = $data['description'];
                  return '<td>' .
                    '<div class="text-dark mb-1">' .
                    '<a class="text-dark">' .
                    '<span class="fw-bolder">' . $description . '</span>' .
                     '</a>' .
                    '</div>' .
                    '</td>';

            })

            ->addColumn('rating',function ($data){
                return  '<td class="w-100px text-end fs-7 pe-9">
                                           <span class="fw-bold text-muted">'.$data['rating'].'</span>
                             </td>' ;

            })
            ->addColumn('dependency',function ($data){
                $dependency = "" ;
                $name = (app::getLocale() == 'ar')?  'name_ar': 'name_en';  ;
                if($data['level'] == 1)
                {
                   $dependency .= '<td class="w-100px text-end fs-7 pe-9">
                                           <span class="fw-bold text-muted">Not affiliated</span>
                                  </td>';

                }elseif ($data['level'] == 2)
                {
                    $dependency .= '<td class="w-100px text-end fs-7 pe-9">
                                           <span class="fw-bold text-muted">'.$data['parent'][$name].'</span>
                                  </td>';

                }
                elseif ($data['level'] == 3)
                {
                    $dependency .= '<td class="w-100px text-end fs-7 pe-9">
                                           <span class="fw-bold text-muted">'.$data['parent'][$name].'-'.$data['parent']['parent'][$name].'</span>
                                  </td>';

                }
                return $dependency;


                return  '<td class="w-100px text-end fs-7 pe-9">
                                           <span class="fw-bold text-muted">'.$data['rating'].'</span>
                             </td>' ;

            })


            ->rawColumns(['action',  'dependency',  'name'  , 'famous gaming', 'rating' , 'description'])
            ->make(true);
    }





}
