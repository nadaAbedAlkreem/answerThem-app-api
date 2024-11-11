<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreResultRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
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
            'challenge_id' => [
                'required',
                'integer',
                 Rule::exists('challenges', 'id')
            ],
            'first_competitor_id' => [
                'required',
                'integer',
                Rule::exists('users', 'id')
            ],
            'second_competitor_id' => [
                'required',
                'integer',
                Rule::exists('users', 'id')
            ],
            'winner_id' => [
                '',
                'integer',
                Rule::exists('users', 'id')
            ],
            'score_FC' => [
                'required',
                'integer',
                'max:25'
            ],
            'score_SC' => [
                'required',
                'integer',
                'max:25'
            ],
        ];
    }
    public function messages()
    {
        return [
            'challenge_id.required' => __('messages.challenge_id.required'),
            'challenge_id.integer' => __('messages.challenge_id.integer'),
            'challenge_id.exists' => __('messages.challenge_id.exists'),


            'first_competitor_id.required' => __('messages.first_competitor_id.required'),
            'first_competitor_id.integer' => __('messages.first_competitor_id.integer'),
            'first_competitor_id.exists' => __('messages.first_competitor_id.exists'),

            'second_competitor_id.required' => __('messages.second_competitor_id.required'),
            'second_competitor_id.integer' => __('messages.second_competitor_id.integer'),
            'second_competitor_id.exists' => __('messages.second_competitor_id.exists'),

            'winner_id.required' => __('messages.winner_id.required'),
            'winner_id.integer' => __('messages.winner_id.integer'),
            'winner_id.exists' => __('messages.winner_id.exists'),

            'score_FC.required' => __('messages.score_FC.required'),
            'score_FC.integer' => __('messages.score_FC.integer'),
            'score_FC.max' => __('messages.score_FC.max'),

            'score_SC.required' => __('messages.score_SC.required'),
            'score_SC.integer' => __('messages.score_SC.integer'),
            'score_SC.max' => __('messages.score_SC.max'),


        ];
    }
    public function getData()
    {
        $data = $this->validated() ;
        $scoreFC = $data['score_FC'];
        $scoreSC = $data['score_SC'];

        // Determine winner based on the scores
        if ($scoreFC > $scoreSC) {
            $this->merge(['winner_id' => $data['first_competitor_id']]);
        } else {
            $this->merge(['winner_id' => $data['second_competitor_id']]);
        }
        return $this->all();

    }
}
