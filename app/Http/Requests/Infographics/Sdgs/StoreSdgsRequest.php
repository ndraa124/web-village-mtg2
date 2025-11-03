<?php

namespace App\Http\Requests\Infographics\Sdgs;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreSdgsRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'purpose' => [
                'required',
                'string',
                'max:100',
                Rule::unique('infographics_sdgs', 'purpose')
            ],
            'value' => 'required|integer|min:0|max:99',
            'icon' => 'nullable|string',
        ];
    }

    public function messages(): array
    {
        return [
            'purpose.required' => 'Tujuan SDGs wajib diisi.',
            'purpose.string' => 'Tujuan SDGs harus berupa teks.',
            'purpose.max' => 'Tujuan SDGs tidak boleh lebih dari 100 karakter.',
            'purpose.unique' => 'Tujuan SDGs sudah ada.',
            'value.required' => 'Value wajib diisi.',
            'value.integer' => 'Value harus berupa angka bulat.',
            'value.max' => 'Value tidak boleh lebih dari 99.',
            'icon.string' => 'Ikon harus berupa teks.',
        ];
    }
}
