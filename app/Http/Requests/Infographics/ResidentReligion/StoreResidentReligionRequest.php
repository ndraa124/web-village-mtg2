<?php

namespace App\Http\Requests\Infographics\ResidentReligion;

use Illuminate\Foundation\Http\FormRequest;

class StoreResidentReligionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'religion_id' => 'required|integer|exists:m_religion,id|unique:infographics_resident_religion,religion_id',
            'total' => 'required|integer|min:0',
        ];
    }

    public function messages(): array
    {
        return [
            'religion_id.required' => 'Agama wajib dipilih.',
            'religion_id.exists' => 'Agama tidak valid.',
            'religion_id.unique' => 'Data untuk agama ini sudah ada.',
            'total.required' => 'Total wajib diisi.',
            'total.integer' => 'Total harus berupa angka.',
            'total.min' => 'Total tidak boleh bernilai negatif.',
        ];
    }
}
