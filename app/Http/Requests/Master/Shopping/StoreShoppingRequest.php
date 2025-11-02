<?php

namespace App\Http\Requests\Master\Shopping;

use Illuminate\Foundation\Http\FormRequest;

class StoreShoppingRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'shopping_name' => 'required|string|max:100',
        ];
    }

    public function messages(): array
    {
        return [
            'shopping_name.required' => 'Nama belanja wajib diisi.',
            'shopping_name.max' => 'Nama belanja tidak boleh lebih dari :max karakter.',
        ];
    }
}
