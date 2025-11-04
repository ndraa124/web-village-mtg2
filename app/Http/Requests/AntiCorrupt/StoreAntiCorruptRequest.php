<?php

namespace App\Http\Requests\AntiCorrupt;

use Illuminate\Foundation\Http\FormRequest;

class StoreAntiCorruptRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'content' => 'required|string',
        ];
    }

    public function messages(): array
    {
        return [
            'content.required' => 'Konten tata letak wajib diisi.',
        ];
    }
}
