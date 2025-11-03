<?php

namespace App\Http\Requests\Infographics\ResidentMarriage;

use Illuminate\Foundation\Http\FormRequest;

class StoreResidentMarriageRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'marriage_id' => 'required|integer|exists:m_marriage,id|unique:infographics_resident_marriage,marriage_id',
            'total' => 'required|integer|min:0',
        ];
    }

    public function messages(): array
    {
        return [
            'marriage_id.required' => 'Perkawinan wajib dipilih.',
            'marriage_id.exists' => 'Perkawinan tidak valid.',
            'marriage_id.unique' => 'Data untuk perkawinan ini sudah ada.',
            'total.required' => 'Total wajib diisi.',
            'total.integer' => 'Total harus berupa angka.',
            'total.min' => 'Total tidak boleh bernilai negatif.',
        ];
    }
}
