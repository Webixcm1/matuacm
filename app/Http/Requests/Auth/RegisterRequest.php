<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

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
            'email' => 'nullable|string|email|unique:users,email',
            'telephone' => 'required|numeric|digits_between:9,15|unique:users,telephone', 
            'password' => 'required|string|min:8|confirmed',
            'type' => 'required|string',
            'terms' => 'accepted'
        ];
    }
}
