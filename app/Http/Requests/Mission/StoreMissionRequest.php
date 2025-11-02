<?php

namespace App\Http\Requests\Mission;

use Illuminate\Foundation\Http\FormRequest;

class StoreMissionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'description' => 'required|string',
        ];
    }

    public function messages(): array
    {
        return [
            'description.required' => 'Deskripsi Misi wajib diisi.',
        ];
    }
}
