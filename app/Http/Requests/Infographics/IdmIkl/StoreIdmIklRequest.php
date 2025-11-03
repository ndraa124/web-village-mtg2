<?php

namespace App\Http\Requests\Infographics\IdmIkl;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreIdmIklRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'indicator_name' => [
                'required',
                'string',
                'max:100',
                Rule::unique('infographics_idm_indicator_ikl', 'indicator_name')
            ],
            'score' => 'required|integer|min:0|max:99',
            'description' => 'required|string|max:100',
            'activities' => 'nullable|string',
            'value' => 'required|numeric|between:0,99.9999',
            'center' => 'nullable|string|max:100',
            'province' => 'nullable|string|max:100',
            'regency' => 'nullable|string|max:100',
            'village' => 'nullable|string|max:100',
            'csr' => 'nullable|string|max:100',
            'other' => 'nullable|string|max:100',
        ];
    }

    public function messages(): array
    {
        return [
            'indicator_name.required' => 'Nama indikator wajib diisi.',
            'indicator_name.unique' => 'Nama indikator sudah ada.',
            'score.required' => 'Skor wajib diisi.',
            'score.integer' => 'Skor harus berupa angka bulat.',
            'score.max' => 'Skor tidak boleh lebih dari 99.',
            'description.required' => 'Deskripsi wajib diisi.',
            'value.required' => 'Value wajib diisi.',
            '*.string' => 'Kolom ini harus berupa teks.',
            '*.max' => 'Kolom ini tidak boleh lebih dari :max karakter.',
            '*.numeric' => 'Kolom ini harus berupa angka.',
            '*.between' => 'Kolom ini harus bernilai antara 0 dan 99.9999.',
        ];
    }
}
