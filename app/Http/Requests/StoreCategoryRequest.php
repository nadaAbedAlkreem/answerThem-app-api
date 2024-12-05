<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\App;

class StoreCategoryRequest extends FormRequest
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
      if(app::getLocale() == 'en'){
          return [
              'name_en' => 'nullable|string|unique:categories,name_en|max:255',
              'description_en' => 'nullable|string',
              'rating' => 'required|numeric|min:0|max:5', // Assuming rating should not exceed 5
              'image' => 'required|string|max:255', // Modify if you need specific image validations
              'parent_id' => 'nullable|integer|min:0|exists:categories,id',
              'level' => 'required|integer|in:1,2,3',
               'famous_gaming' => 'boolean',
          ];
      }else
      {
          return [
              'name_ar' => 'required|string|unique:categories,name_ar|max:255',
              'description_ar' => 'nullable|string',
              'rating' => 'required|numeric|min:0|max:5', // Assuming rating should not exceed 5
              'image' => 'required|string|max:255', // Modify if you need specific image validations
              'parent_id' => 'nullable|integer|min:0|exists:categories,id',
              'level' => 'required|integer|in:1,2,3',
              'famous_gaming' => 'boolean',
          ];
      }

    }
    public function getData()
    {
        $data= $this::validated();

        return $data;
    }



}
