<?php

namespace App\Http\Requests\Auth;

use App\Models\User;
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
            'password' =>
                'required',
                'string',
                'confirmed',
                Password::min(8)
            ];


    }


    protected function failedValidation(\Illuminate\Contracts\Validation\Validator $validator)
    {
        $errors = $validator->errors()->all();
        $formattedErrors = ['error' => $errors[0]] ;
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
            'email' => 'required|string|email|max:255',
            'password' => [
                'required',
                'string',
                'min:8', // Ensure minimum password length
            ]
        ];
    }

    public  function getData()
    {
        $credentials = $this->only('email', 'password');

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
