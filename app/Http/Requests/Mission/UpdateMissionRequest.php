<?php

namespace App\Http\Requests\Mission;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMissionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'is_active' => 'nullable|boolean',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Judul Misi wajib diisi.',
            'title.max' => 'Judul Misi tidak boleh lebih dari :max karakter.',
        ];
    }
}
