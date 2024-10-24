<?php

namespace App\Http\Requests\Auth;

use Exception;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class RegisterRequest extends FormRequest
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
            'image' =>  $this->hasFile('image')
            ? 'required|file|mimes:jpeg,png,jpg,gif,svg|max:2048'
            : 'required|string|max:255',
            'name' => 'required|string|max:255',
            'full_name' => 'required|string|max:255',
            'country' => 'required' ,
            'country_prefix' => 'required|string',  // Add the country prefix field
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => [
                'required',
                'string',
                function ($attribute, $value, $fail) {
                    $phoneWithPrefix = request()->country_prefix . $value;
                    if (\App\Models\User::where('phone', $phoneWithPrefix)->exists()) {
                        $fail(__('validation.unique', ['attribute' => $attribute]));
                    }
                },
            ],
            'password' => [
                'required',
                'string',
                'confirmed',
                Password::min(8)]
        ];
    }

    protected function failedValidation(\Illuminate\Contracts\Validation\Validator $validator)
    {
        $errors = $validator->errors()->all();
        $formattedErrors = array_map(function ($error) {
            return ['error' => $error];
        }, $errors);

        throw new \Illuminate\Validation\ValidationException($validator, response()->json([
            'success' => false,
            'message' => 'ERROR OCCURRED',
            'data' => $formattedErrors,
            'status' => 'Internal Server Error'
        ], 500));
    }
    public function messages()
    {
        return [
            'image.required' => __('messages.image.required'),
            'image.file' => __('messages.image.file'),
            'image.mimes' => __('messages.image.mimes'),
            'image.max' => __('messages.image.max'),

            'name.required' => __('messages.name.required'),
            'name.string' => __('messages.name.string'),
            'name.max' => __('messages.name.max'),

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

    public  function getDataWithImage()
    {
        $data=$this->validated();
        if ($this->hasFile('image')) {
            $userName = (!empty($data['full_name']))
                ? $data['full_name'] . time() + rand(1, 10000000)
                : time() + rand(1, 10000000);

            $path = 'uploads/images/users/';
            $nameImage = $userName . '.' . $this->file('image')->getClientOriginalExtension();
             Storage::disk('public')->put($path . $nameImage, file_get_contents($this->file('image')));

             $absolutePath = storage_path('app/public/' . $path . $nameImage);

             if (file_exists($absolutePath)) {
                chmod($absolutePath, 0775);
            } else {
                 throw new \Exception('File not found: ' . $absolutePath);
            }
            $data['image'] = Storage::url($path . $nameImage);
        }


        if (!empty($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        }
        if (!empty($data['country_prefix'])) {
            $data['phone'] = $data['country_prefix'].$data['phone'] ;
        }



        return $data;
    }

}
