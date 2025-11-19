<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RegisterRequest extends FormRequest
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
            "name" =>[
                'required'
            ],
            "email" => [
                'required',
                Rule::unique('users', 'email')
            ],
            "password" => [
                'required'
            ]
        ];
    }

    public function messages()
    {
        return [
            "name.required" => "Name is required.",
            "email.unique" => "Email is already exist. Please try another one."
        ];
    }
}
