<?php

namespace App\Services;

use Illuminate\Support\Facades\App;
use Yajra\DataTables\Facades\DataTables;

class QuestionDatatableService
{

    public function handle($request, $data)
    {
        $transformedData = $data->toArray($request);
          if ($request->has('category') && !empty($request->category)) {
            $transformedData = array_filter($transformedData, function ($item) use ($request ) {
                 return $item['category']['id'] == $request->category;  // Check the level filter condition
            });
        }

        return DataTables::of($transformedData)
            ->addIndexColumn()

            ->addColumn('action', function ($data) {
                $isCorrectIndex = 0;

                 foreach ($data['answers'] as $answer)
                {
                    $isCorrectIndex ++ ;
                    if($answer->is_correct)
                    {
                     break;
                    }
                }

                          return  '
                                                  <a  class="btn btn-icon btn-color-gray-400 btn-sm btn-active-color-primary deleteRecord btn btn-xs btn show_confirm "  data-id="' . $data['id'] . '" data-bs-toggle="tooltip" data-bs-placement="right" title="Mark as important">
                                                         <span class="svg-icon svg-icon-3 mt-1">
                                                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
//                                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
//                                                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
//                                                                    </svg>
                                                                    </span>
                                                     </a>
                                                 <a  class="btn btn-icon btn-color-gray-400 btn-sm btn-active-color-primary  updateRecord" data-bs-toggle="modal" data-category="' . $data['category']['id'] . '" data-is_correct="' . $isCorrectIndex. '" data-question_en_text="' . $data['question_en_text'] . '" data-question_ar_text="' . $data['question_ar_text'] . '" data-image="' . $data['image'] . '"    data-id="' . $data['id'] . '"  data-answer_text_ar_1="' . $data['answers'][0]['answer_text_ar'] . '" data-answer_text_ar_2="' . $data['answers'][1]['answer_text_ar'] . '" data-answer_text_ar_3="' . $data['answers'][2]['answer_text_ar'] . '" data-answer_text_ar_4="' . $data['answers'][3]['answer_text_ar'] . '"  data-answer_text_en_1="' . $data['answers'][0]['answer_text_en'] . '" data-answer_text_en_2="' . $data['answers'][1]['answer_text_en'] . '"  data-answer_text_en_3="' . $data['answers'][2]['answer_text_en'] . '" data-answer_text_en_4="' . $data['answers'][3]['answer_text_en'] . '" data-bs-target="#kt_modal_update_question_app"     data-bs-toggle="tooltip" data-bs-placement="right" title="Mark as important">
                                                     <span class="svg-icon svg-icon-3 mt-1">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                <path d="M14.06 2.939l6.364 6.364c.195.195.195.51 0 .707l-9.182 9.182c-.195.195-.51.195-.707 0l-6.364-6.364c-.195-.195-.195-.51 0-.707l9.182-9.182c.195-.195.51-.195.707 0zm-3.88 9.056L4.5 16.939v3.061h3.061l5.686-5.686-3.061-3.061z" fill="currentColor"/>
                                                                      </svg>

																</span>
                                                 </a>
                                                <!--end::Important-->
                                            </td>';




            })

            ->addColumn('Question' , function ($data){
                $initialOrImage = '';

                $imageUrl = asset($data['image']);

                if (!empty($data['image'])) {
                    $initialOrImage = '<img src="' . $imageUrl . '" alt="' . htmlspecialchars($data['question_text'], ENT_QUOTES) . '" class="img-fluid" style="width: 35px; height: 35px; border-radius: 50%;">';
                } else {
                    $initialOrImage = '<span class="text-warning">' . mb_substr($data['question_text'], 0, 1, 'UTF-8') . '</span>';
                }


                // Return the full HTML structure
                return '<td class="w-150px w-md-175px">' .
                    '<a class="d-flex align-items-center text-dark">' .
                    '<div class="symbol symbol-35px me-3">' .
                    '<div class="symbol-label bg-light-warning">' .
                    $initialOrImage .
                    '</div>' .
                    '</div>' .
                    '<div class="text-dark mb-1">' .
                    '<a class="text-dark">' .
                    '<span class="fw-bolder">' . $data['question_text'] . '</span>' .
                    '</a>' .
                    '</div>' .
                    '</a>' .
                    '</td>';


             })
            ->addColumn('Category', function ($data) {

               $name = (app::getLocale() =='ar') ? 'name_ar' : 'name_en';
                  return '<td class="w-150px w-md-175px">' .
                    '<a class="d-flex align-items-center text-dark">' .
                    '<span class="fw-bold">' . $data['category']->$name. '</span>' .
                    '</a>' .
                    '</td>';


            })
            ->addColumn('Answers', function ($data) {
                $answer_text = (app::getLocale() == 'ar') ? 'answer_text_ar' : 'answer_text_en';
                $result = '';
                foreach ($data['answers'] as $key => $answer) {
                    $isCorrect = $answer->is_correct ? '✔️' : '';

                    // Add margin between elements
                    $result .= '<div class="btn btn-light shadow" style="pointer-events: none; cursor: default; margin: 5px;">
                              ' . $answer->$answer_text . ' ' . $isCorrect . '
                     </div>';
                }
                return $result;
            })



        ->rawColumns(['action', 'Question'  , 'Category' , 'Answers' ])
            ->make(true);
    }





}
