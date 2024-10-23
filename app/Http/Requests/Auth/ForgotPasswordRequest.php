<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class ForgotPasswordRequest extends FormRequest
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
            'email' => 'required_if:verification_method,email|email',
            'phone' => 'required_if:verification_method,phone|string|max:15',
            'verification_method' => 'required|in:email,phone',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => __('messages.email.required'),
            'email.email' => __('messages.email.email'),
            'phone.required' => __('messages.phone.required'),
            'verification_method.required' => __('messages.verification_method.required'),
            'verification_method.in' => __('messages.verification_method.in'),
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


}
