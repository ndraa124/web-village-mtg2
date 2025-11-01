<?php

namespace App\Http\Requests\Master\Gender;

use Illuminate\Foundation\Http\FormRequest;

class StoreGenderRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'gender_name' => 'required|string|max:100',
        ];
    }

    public function messages(): array
    {
        return [
            'gender_name.required' => 'Nama gender wajib diisi.',
            'gender_name.max' => 'Nama gender tidak boleh lebih dari :max karakter.',
        ];
    }
}
