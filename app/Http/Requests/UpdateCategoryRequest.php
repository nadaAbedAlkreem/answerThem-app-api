<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;

class UpdateCategoryRequest extends FormRequest
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
            'id'=>'required' ,
            'name_ar' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'description_ar' => 'required|string|max:255',
            'description_en' => 'required|string|max:255',
            'rating' => 'required|numeric|min:0|max:5', // Assuming rating should not exceed 5
            'image' =>  $this->hasFile('image')
                ? 'file|mimes:jpeg,png,jpg,gif,svg|max:2048'
                : 'string|max:255',// Modify if you need specific image validations
            'parent_id' => 'nullable|integer|min:0|exists:categories,id',
            'level' => '',
            'famous_gaming' => 'boolean',
            'category_id' => 'required',
            'lang' => '' ,
        ];
    }
    public function getData()
    {
        $data= $this::validated();

        if(($data['category_id']) != null)
        {
            switch ($data['level']) {
                case '0':
                    $data['level'] =  1 ;
                    $data['parent_id'] = 0 ;
                    break ;
                case  '1' :
                    $data['level'] =  2  ;
                    $data['parent_id'] =(int)$data['category_id'];
                    break ;
                case '2' :
                    $data['level'] =  3  ;
                    $data['parent_id'] =(int)$data['category_id'];
                    break ;
            }
            if($data['famous_gaming'] != null)
            {
                $data['famous_gaming'] = (int)$data['famous_gaming'] ;
            }

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
            'name_ar.required' => __('messages.name_ar.required'),
            'name_ar.string' => __('messages.name_ar.string'),
            'name_ar.max' => __('messages.name_ar.max'),

            'name_en.required' => __('messages.name_en.required'),
            'name_en.string' => __('messages.name_en.string'),
            'name_en.max' => __('messages.name_en.max'),

            'description_ar.required' => __('messages.description_ar.required'),
            'description_ar.string' => __('messages.description_ar.string'),
            'description_ar.max' => __('messages.description_ar.max'),

            'description_en.required' => __('messages.description_en.required'),
            'description_en.string' => __('messages.description_en.string'),
            'description_en.max' => __('messages.description_en.max'),

            'rating.required' => __('messages.rating.required'),
            'rating.numeric' => __('messages.rating.numeric'),
            'rating.min' => __('messages.rating.min'),
            'rating.max' => __('messages.rating.max'),



            'parent_id.integer' => __('messages.parent_id.integer'),
            'parent_id.min' => __('messages.parent_id.min'),
            'parent_id.exists' => __('messages.parent_id.exists'),

            'famous_gaming.boolean' => __('messages.famous_gaming.boolean'),

            'category_id.required' => __('messages.category_id.required'),

        ];
    }



}
