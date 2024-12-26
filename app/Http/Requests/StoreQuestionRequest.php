<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;

class StoreQuestionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        app::setLocale($this->input('lang'));

        return [
            'question_ar_text' => 'required|string|unique:questions,question_ar_text ,NULL,id,deleted_at,NULL|max:255',
            'question_en_text' => 'required|string|unique:questions,question_en_text ,NULL,id,deleted_at,NULL|max:255',
             'image' =>  $this->hasFile('image')
                 ? 'required|file|mimes:jpeg,png,jpg,gif,svg|max:2048'
                 : 'required|string|max:255',

             'category_id' => 'required',
         ];
    }
    public function getData()
    {
        $data= $this::validated();


            if ($this->hasFile('image')) {
                $userName =  (!empty($data['name']))
                    ? str_replace(' ', '_', $data['name']) . time() . rand(1, 10000000)
                    : time() . rand(1, 10000000);

                $path = 'uploads/images/categories/';
                $nameImage = $userName . '.' . $this->file('image')->getClientOriginalExtension();
                Storage::disk('public')->put($path . $nameImage, file_get_contents($this->file('image')));
                $this->file('image')->move('storage/'.($path), $nameImage);


                $absolutePath = storage_path('app/public/' . $path . $nameImage);
                if (file_exists($absolutePath)) {
                    chmod($absolutePath, 0775);
                } else {
                    throw new \Exception(__('messages.ERROR_OCCURRED') . $absolutePath);
                }

                $data['image'] = Storage::url($path . $nameImage);
            }


        return $data;
    }
    protected function failedValidation(\Illuminate\Contracts\Validation\Validator $validator)
    {
        $errors = $validator->errors()->all();
        $formattedErrors = ['error' => $errors[0]] ;
        throw new \Illuminate\Validation\ValidationException($validator, response()->json([
            'success' => false,
            'message' => __('messages.ERROR_OCCURRED'),
            'data' => $formattedErrors,
            'status' => 'Internal Server Error'
        ], 500));
    }
    public function messages()
    {
        return [
            'question_ar_text.required' => __('messages.question_ar_text.required'),
            'question_ar_text.string' => __('messages.question_ar_text.string'),
            'question_ar_text.max' => __('messages.question_ar_text.max'),

            'question_en_text.required' => __('messages.question_en_text.required'),
            'question_en_text.string' => __('messages.question_en_text.string'),
            'question_en_text.max' => __('messages.question_en_text.max'),

            'image.required' => __('messages.image.required'),
            'image.file' => __('messages.image.file'),
            'image.mimes' => __('messages.image.mimes'),
            'image.max' => __('messages.image.max'),

            'category_id.required' => __('messages.category_id.required'),
        ];
    }

}
