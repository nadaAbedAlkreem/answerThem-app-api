<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTeamRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'members' => 'required|array|min:2|max:4',
            'members.*' => 'exists:users,id',
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

            'name.required' => __('messages.name.required'),
            'name.string' => __('messages.name.string'),
            'name.max' => __('messages.name.max'),

            'members.required' => __('messages.members.required'),
            'members.string' => __('messages.members.array'),
            'members.max' => __('messages.members.max'),
            'members.min' => __('messages.members.min'),

            'members.*.exists' => __('messages.exists'),


        ];
    }

    public function getData()
    {
        $data= $this->validated();
        return $data ;

    }

}
