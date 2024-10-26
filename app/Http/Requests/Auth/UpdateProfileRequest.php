<?php

namespace App\Http\Requests\Auth;

use Exception;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\Password;

class UpdateProfileRequest extends FormRequest
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
            'image' => $this->hasFile('image')
                ? 'file|mimes:jpeg,png,jpg,gif,svg|max:2048'
                : 'string|max:255',
            'name' => 'string|max:255',
            'full_name' => 'string|max:255',
            'country_prefix' => 'string|in:+20,+965,+966,+971,+970',
            'email' => 'string|email|max:255|',
            'phone' => [
                'string',
                function ($attribute, $value, $fail) {
                    $phoneWithPrefix = request()->country_prefix . $value;
                    if (\App\Models\User::where('phone', $phoneWithPrefix)->exists()) {
                        $fail(__('validation', ['attribute' => $attribute]));
                    }
                },
            ],

        ];

    }

    protected function failedValidation(\Illuminate\Contracts\Validation\Validator $validator)
    {
        $errors = $validator->errors()->all();
        $formattedErrors = ['error' => $errors[0]];
        throw new \Illuminate\Validation\ValidationException($validator, response()->json([
            'success' => false,
            'message' => 'ERROR OCCURRED',
            'data' => [$formattedErrors],
            'status' => 'Internal Server Error'
        ], 500));
    }

    public function updateUserData()
    {
        $data = $this->validated();

        // Get the user instance
        $user = Auth::user(); // or retrieve a user by ID
        if (!$user) {
            throw new Exception('not found user ', 401);
        }

        if (isset($data['image']) && $this->hasFile('image')) {

            $userName = (!empty($user->full_name))
                ? $user->full_name . time() + rand(1, 10000000)
                : time() + rand(1, 10000000);

            $path = 'uploads/images/users/';
            $nameImage = $userName . '.' . $this->file('image')->getClientOriginalExtension();
            Storage::disk('public')->put($path . $nameImage, file_get_contents($this->file('image')));
            $absolutePath = storage_path('app/public/' . $path . $nameImage);
            if (file_exists($absolutePath)) {
                chmod($absolutePath, 0775);
            } else {
                throw new \Exception('File not found: ' . $absolutePath);
            }
            $user->image = Storage::url($path . $nameImage);
        }

        if (isset($data['phone']) && isset($data['country_prefix'])) {
            $user->phone = $data['country_prefix'] . $data['phone'];
        }

        if (isset($data['full_name'])) {
            $user->full_name = $data['full_name'];
        }
        if (isset($data['name'])) {
            $user->name = $data['name'];
        }
        if (isset($data['email'])) {
            $user->email = $data['email'];
        }

        $user->save();

        return $user;

    }

}
