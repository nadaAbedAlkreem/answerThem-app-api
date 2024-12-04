<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreEvaluationRequest extends FormRequest
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
            'user_id' => [
                'required',
                'integer',
                Rule::exists('users', 'id')
            ],

            'rating' => [
                'required',
                'numeric'
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
        switch (true) {
            case $data['rating'] > 3:
                $data['descriptive_evaluation'] = 'high';
                break;

            case $data['rating'] == 3:
                $data['descriptive_evaluation'] = 'medium';
                break;

            case $data['rating'] < 3:
                $data['descriptive_evaluation'] = 'low';
                break;

            default:
                $data['descriptive_evaluation'] = 'unknown';
                break;
        }

         return $data;
    }
}
