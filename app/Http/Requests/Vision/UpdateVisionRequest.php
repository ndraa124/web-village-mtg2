<?php

namespace App\Http\Requests\Vision;

use Illuminate\Foundation\Http\FormRequest;

class UpdateVisionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'description' => 'required|string',
            'is_active' => 'nullable|boolean',
        ];
    }

    public function messages(): array
    {
        return [
            'description.required' => 'Deskripsi Visi wajib diisi.',
        ];
    }
}
