<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class ResetPasswordRequest extends FormRequest
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
            'verification_method' => 'required|in:email,phone', // Ensure this is present and valid
            'email' => 'required_if:verification_method,email|string|email|max:255',
            'country_prefix' => 'required_if:verification_method,phone|required|string',  // Add the country prefix field
            'phone' =>   'required_if:verification_method,phone|string',
            'token' => 'required|digits:4', // Ensure it's a 4-digit token
            'password' => 'required|string|min:8|confirmed',

        ];
    }

    protected function failedValidation(\Illuminate\Contracts\Validation\Validator $validator)
    {
        $errors = $validator->errors()->all();

        // Format the errors as required
        $formattedErrors = array_map(function ($error) {
            return ['error' => $error];
        }, $errors);

        // Create a response with the desired format
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

            'email.required' => __('messages.email.required'),
            'email.string' => __('messages.email.string'),
            'email.email' => __('messages.email.email'),
            'email.max' => __('messages.email.max'),

            'phone.required' => __('messages.phone.required'),
            'phone.string' => __('messages.phone.string'),
            'phone.prefix' => __('messages.phone.prefix'),

            'token.required' => __('messages.token.required'),
            'token.digits' => __('messages.token.digits'),


            'password.required' => __('messages.password.required'),
            'password.string' => __('messages.password.string'),
            'password.min' => __('messages.password.min'),
            'password.confirmed' => __('messages.password.confirmed'),



        ];
    }


    public  function getDataWithImage()
    {
        $data=$this->validated();
        if (!empty($data['country_prefix'])) {
            $data['phone'] = $data['country_prefix'].$data['phone'] ;
        }
         return $data;
    }



}
