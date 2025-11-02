<?php

namespace App\Http\Requests\Master\SocialAssistance;

use Illuminate\Foundation\Http\FormRequest;

class StoreSocialAssistanceRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'social_assistance_name' => 'required|string|max:100',
        ];
    }

    public function messages(): array
    {
        return [
            'social_assistance_name.required' => 'Nama bantuan sosial wajib diisi.',
            'social_assistance_name.max' => 'Nama bantuan sosial tidak boleh lebih dari :max karakter.',
        ];
    }
}
