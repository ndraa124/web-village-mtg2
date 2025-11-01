<?php

namespace App\Http\Requests\Master\Education;

use Illuminate\Foundation\Http\FormRequest;

class StoreEducationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'education_name' => 'required|string|max:100',
        ];
    }

    public function messages(): array
    {
        return [
            'education_name.required' => 'Nama pendidikan wajib diisi.',
            'education_name.max' => 'Nama pendidikan tidak boleh lebih dari :max karakter.',
        ];
    }
}
