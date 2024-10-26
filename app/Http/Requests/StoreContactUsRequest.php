<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactUsRequest extends FormRequest
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
            'sender_id' => 'required|exists:users,id', // Ensure the sender exists in the users table
            'title' => 'required|string|max:255', // Validate the title (string with a max length of 255)
            'description' => 'required|string', // Description is required and should be a string
         ] ;

    }


    protected function failedValidation(\Illuminate\Contracts\Validation\Validator $validator)
    {
        $errors = $validator->errors()->all();
        $formattedErrors = ['error' => $errors[0]] ;
        throw new \Illuminate\Validation\ValidationException($validator, response()->json([
            'success' => false,
            'message' => 'ERROR OCCURRED',
            'data' => [$formattedErrors],
            'status' => 'Internal Server Error'
        ], 500));
    }
    public function messages()
    {
        return [
            'sender_id.required' => __('messages.sender_id.required'),
            'sender_id.exists' => __('messages.sender_id.exists'),
            'title.required' => __('messages.title.required'),
            'title.string' => __('messages.title.string'),
            'title.max' => __('messages.image.max'),
            'description.required' => __('messages.description.required'),
            'description.string' => __('messages.description.string'),
         ];
    }




}
