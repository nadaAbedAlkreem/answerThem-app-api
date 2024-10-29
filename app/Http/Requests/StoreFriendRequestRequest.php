<?php

namespace App\Http\Requests;

use App\Rules\UniqueFriendRequest;
use Illuminate\Foundation\Http\FormRequest;

class StoreFriendRequestRequest extends FormRequest
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
        $senderId = $this->input('sender_id');
        $receiverId = $this->input('receiver_id');

        return [
            'sender_id' => 'required|exists:users,id',
            'receiver_id' => [
                'required',
                'exists:users,id',
                new UniqueFriendRequest($senderId, $receiverId), // Using the custom rule
            ]
            ];
    }
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

    public function messages()
    {
        return [
            'sender_id.required' => __('messages.sender_id.required'),
            'receiver_id.required' => __('messages.receiver_id.required'),
            'sender_id.exists' => __('messages.sender_id.exists'),
            'receiver_id.exists' => __('messages.receiver_id.exists'),
        ];
    }

    public  function getData()
    {
        return   $this->validated();
    }

}
