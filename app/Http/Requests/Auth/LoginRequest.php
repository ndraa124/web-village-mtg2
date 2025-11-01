<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nik' => 'required|numeric',
            'password' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'nik.required' => 'NIK harus diisi.',
            'nik.numeric' => 'NIK harus berupa angka!',
            'password.required' => 'Password harus diisi.',
        ];
    }
}
