<?php

namespace App\Http\Requests\Master\IdmStatus;

use Illuminate\Foundation\Http\FormRequest;

class StoreIdmStatusRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'status_desc' => 'required|string|max:100',
        ];
    }

    public function messages(): array
    {
        return [
            'status_desc.required' => 'Deskripsi status wajib diisi.',
            'status_desc.max' => 'Deskripsi status tidak boleh lebih dari :max karakter.',
        ];
    }
}
