<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class StoreChallengeRequest extends FormRequest
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

            'name_game' => 'required|max:255',
            'category_id' => [
                'required',
                'integer',
                'not_in:0',
                Rule::exists('categories', 'id')
            ],
             'user1_id' => [
                'required',
                'integer',
                Rule::exists('users', 'id')
            ],
            'user2_id' => [
                'required',
                'integer',
                Rule::exists('users', 'id')
            ],
            'number_of_questions' => [
                 'integer',
             ],
            'time_per_question' => [
                'integer',
            ],
            'status' => [
                'string',
            ],
        ];
    }

    public function messages()
    {
        return [
            'name_game.required' => __('messages.name_game.required'),
            'name_game.max' => __('messages.name_game.max'),

            'category_id.required' => __('messages.category_id.required'),
            'category_id.integer' => __('messages.category_id.integer'),
            'category_id.not_in' => __('messages.category_id.not_in'),
            'category_id.exists' => __('messages.category_id.exists'),
            'user1_id.required' => __('messages.user1_id.required'),
            'user1_id.integer' => __('messages.user1_id.integer'),
            'user1_id.exists' => __('messages.user1_id.exists'),
            'user2_id.required' => __('messages.user2_id.required'),
            'user2_id.integer' => __('messages.user2_id.integer'),
            'user2_id.exists' => __('messages.user2_id.exists'),

        ];
    }
    public  function getData()
    {
        $data=$this->validated();
        return $data;
    }
}
