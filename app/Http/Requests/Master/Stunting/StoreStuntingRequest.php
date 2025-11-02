<?php

namespace App\Http\Requests\Master\Stunting;

use Illuminate\Foundation\Http\FormRequest;

class StoreStuntingRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'stunting_name' => 'required|string|max:100',
        ];
    }

    public function messages(): array
    {
        return [
            'stunting_name.required' => 'Nama stunting wajib diisi.',
            'stunting_name.max' => 'Nama stunting tidak boleh lebih dari :max karakter.',
        ];
    }
}
