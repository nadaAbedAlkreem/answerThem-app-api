<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;

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
 //       if(app::getLocale() == 'en'){
//          return [
//              'name_en' => 'nullable|string|unique:categories,name_en|max:255',
//              'description_en' => 'nullable|string',
//              'rating' => 'required|numeric|min:0|max:5', // Assuming rating should not exceed 5
//              'image' => 'required|string|max:255', // Modify if you need specific image validations
//              'parent_id' => 'nullable|integer|min:0|exists:categories,id',
//              'level' => 'required|integer|in:1,2,3',
//               'famous_gaming' => 'boolean',
//          ];
//      }else
//      {

        return [
              'name' => 'required|string|unique:categories,name_ar|max:255',
              'description' => 'nullable|string',
              'rating' => 'required|numeric|min:0|max:5', // Assuming rating should not exceed 5
            'image' =>  $this->hasFile('image')
            ? 'required|file|mimes:jpeg,png,jpg,gif,svg|max:2048'
            : 'required|string|max:255',// Modify if you need specific image validations
              'parent_id' => 'nullable|integer|min:0|exists:categories,id',
              'level' => '',
              'famous_gaming' => 'boolean',
              'category_id' => 'required',
              'lang' => '' ,
          ];
//      }

    }
    public function getData()
    {
        $data= $this::validated();

        $name = ($data['lang'] == 'ar') ?  'name_ar': 'name_en' ;
        $description = ($data['lang'] == 'ar') ?  'description_ar': 'description_en' ;
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
            if($data['name'] != null)
            {
                $data[$name] = $data['name'] ;
            }
            if($data['description'] != null)
            {
                $data[$description] = $data['description'] ;
            }
            if ($this->hasFile('image')) {
                $userName =  (!empty($data['name']))
                    ? str_replace(' ', '_', $data['name']) . time() . rand(1, 10000000)
                    : time() . rand(1, 10000000);

                $path = 'uploads/images/categories/';
                $nameImage = $userName . '.' . $this->file('image')->getClientOriginalExtension();
                Storage::disk('public')->put($path . $nameImage, file_get_contents($this->file('image')));
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



}
