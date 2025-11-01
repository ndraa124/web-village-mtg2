<?php

namespace App\Http\Requests\Master\Hamlet;

use Illuminate\Foundation\Http\FormRequest;

class StoreHamletRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'hamlet_name' => 'required|string|max:100',
        ];
    }

    public function messages(): array
    {
        return [
            'hamlet_name.required' => 'Nama dusun wajib diisi.',
            'hamlet_name.max' => 'Nama dusun tidak boleh lebih dari :max karakter.',
        ];
    }
}
