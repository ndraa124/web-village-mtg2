<?php

namespace App\Http\Requests\Master\Religion;

use Illuminate\Foundation\Http\FormRequest;

class StoreReligionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'religion_name' => 'required|string|max:100',
        ];
    }

    public function messages(): array
    {
        return [
            'religion_name.required' => 'Nama agama wajib diisi.',
            'religion_name.max' => 'Nama agama tidak boleh lebih dari :max karakter.',
        ];
    }
}
