<?php

namespace App\Http\Requests\Infographics\Stunting;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreStuntingRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'year' => 'required|integer|digits:4|min:1900|max:9999',
            'stunting_id' => [
                'required',
                'integer',
                'exists:m_stunting,id',
                Rule::unique('infographics_stunting', 'stunting_id')
                    ->where('year', $this->year)
            ],
            'total' => 'required|integer|min:0',
            'is_active' => 'required|boolean',
        ];
    }

    public function messages(): array
    {
        return [
            'year.required' => 'Tahun wajib diisi.',
            'year.digits' => 'Tahun harus 4 digit.',
            'stunting_id.required' => 'Kategori stunting wajib dipilih.',
            'stunting_id.exists' => 'Kategori stunting tidak valid.',
            'stunting_id.unique' => 'Data stunting untuk tahun ini sudah ada.',
            'total.required' => 'Total wajib diisi.',
            'total.integer' => 'Total harus berupa angka.',
            'total.min' => 'Total tidak boleh negatif.',
            'is_active.required' => 'Status wajib dipilih.',
            'is_active.boolean' => 'Status tidak valid.',
        ];
    }
}
