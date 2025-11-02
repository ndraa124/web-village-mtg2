<?php

namespace App\Http\Requests\Master\Financing;

use Illuminate\Foundation\Http\FormRequest;

class StoreFinancingRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'financing_name' => 'required|string|max:100',
        ];
    }

    public function messages(): array
    {
        return [
            'financing_name.required' => 'Nama pembiayaan wajib diisi.',
            'financing_name.max' => 'Nama pembiayaan tidak boleh lebih dari :max karakter.',
        ];
    }
}
