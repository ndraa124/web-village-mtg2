<?php

namespace App\Http\Requests\Master\Income;

use Illuminate\Foundation\Http\FormRequest;

class StoreIncomeRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'income_name' => 'required|string|max:100',
        ];
    }

    public function messages(): array
    {
        return [
            'income_name.required' => 'Nama pendapatan wajib diisi.',
            'income_name.max' => 'Nama pendapatan tidak boleh lebih dari :max karakter.',
        ];
    }
}
