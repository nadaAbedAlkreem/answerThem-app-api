<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
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
         return [
             'question_ar_text' => 'required|string|unique:questions,question_ar_text|max:255',
             'question_en_text' => 'required|string|unique:questions,question_en_text|max:255',
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

}
