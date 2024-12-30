<?php

namespace App\Http\Requests;

use App\Models\Admin;
use App\Models\Category;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class RegisterAdminRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return  true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
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
    public function rules(): array
    {
         return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admins',
            'password' => [
                'required',
                'string',
                Password::min(8)] ,
            'category_id' => [
                'required',
                'string',
                'exists:categories,id'
                ]
            ];


    }
    public  function getData()
    {
        $data=$this->validated();
         if (!empty($data['password'])) {

            $data['password'] = Hash::make($data['password']);
        }
//        $category = Category::whereDoesntHave('admin')->where('level' , 3 )->orderBy('created_at', 'asc')->first();
//         if ($category != null )
//        {
////            $usersCount = Admin::whereNull('category_id')->whereHas('roles', function($query) {
////                $query->where('name', 'staff');
////             })->count();
//            $data['category_id'] = $category->id;
//
//        }

        return $data;
    }
    public function messages()
    {
        return [
            'image.required' => __('messages.image.required'),
            'image.file' => __('messages.image.file'),
            'image.mimes' => __('messages.image.mimes'),
            'image.max' => __('messages.image.max'),

            'category_id.required' => __('messages.category_id.required'),
            'category_id.string' => __('messages.category_id.string'),
            'category_id.max' => __('messages.category_id.max'),

            'name.required' => __('messages.name.required'),
            'name.string' => __('messages.name.string'),
            'name.exists' => __('messages.name.exists'),

            'full_name.required' => __('messages.full_name.required'),
            'full_name.string' => __('messages.full_name.string'),
            'full_name.max' => __('messages.full_name.max'),

            'email.required' => __('messages.email.required'),
            'email.string' => __('messages.email.string'),
            'email.email' => __('messages.email.email'),
            'email.max' => __('messages.email.max'),
            'email.unique' => __('messages.email.unique'),

            'phone.required' => __('messages.phone.required'),
            'phone.string' => __('messages.phone.string'),
            'phone.unique' => __('messages.phone.unique'),
            'phone.prefix' => __('messages.phone.prefix'),

            'country.required' => __('messages.country.required'),

            'password.required' => __('messages.password.required'),
            'password.string' => __('messages.password.string'),
            'password.min' => __('messages.password.min', ['min' => 8]),
            'password.confirmed' => __('messages.password.confirmed'),

        ];
    }

}
