<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Exception;
use Illuminate\Validation\Rules\Password;

class LoginRequest extends FormRequest
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
            'email' => 'required|string|email',
            'password' => [
                'required',
                'string',
                'confirmed',
                Password::min(8) // Adjust the length as needed
                ->letters()
                    ->mixedCase()
                    ->numbers()
                    ->symbols()
                    ->uncompromised()
            ]
            ];
    }


    protected function failedValidation(\Illuminate\Contracts\Validation\Validator $validator)
    {
    }

    public function messages()
    {
        return [


            'email.required' => __('messages.email.required'),
            'email.string' => __('messages.email.string'),
            'email.email' => __('messages.email.email'),
            'email.max' => __('messages.email.max'),

            'password.required' => __('messages.password.required'),
            'password.string' => __('messages.password.string'),
            'password.min' => __('messages.password.min'),
            'password.confirmed' => __('messages.password.confirmed'),
        ];
    }

    public  function getData()
    {
        $credentials = $this->validated();
        // Attempt authentication
        if (!Auth::attempt($credentials)) {
            throw new Exception('Invalid login details', 401); //
        }

        $user = Auth::user();

        // Check if password matches
        if (!Hash::check($credentials['password'], $user->password)) {
            throw new Exception('Password mismatch', 401);  //
        }

        return $credentials;
    }

}
