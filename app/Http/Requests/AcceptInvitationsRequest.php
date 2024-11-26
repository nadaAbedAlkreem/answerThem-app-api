<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AcceptInvitationsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true ;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
         return [
            'sender_id' => [
                'required',
                'integer',
                Rule::exists('users', 'id')
            ],
            'receiver_id' => [
                'required',
                'integer',
                Rule::exists('users', 'id')
            ],
             'challenge_id' => [
                    'required',
                    'integer',
                 Rule::exists('challenges', 'id')->where(function ($query) {
                     $query->where('user1_id', $this->receiver_id)
                         ->where('user2_id', $this->sender_id);
                 }),
                 ],
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
    public  function getData()
    {
        $data= $this::validated();
        return $data;
    }
}
