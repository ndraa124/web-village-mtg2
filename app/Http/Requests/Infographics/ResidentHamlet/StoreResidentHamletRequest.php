<?php

namespace App\Http\Requests\Infographics\ResidentHamlet;

use Illuminate\Foundation\Http\FormRequest;

class StoreResidentHamletRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'hamlet_id' => 'required|integer|exists:m_hamlet,id|unique:infographics_resident_hamlet,hamlet_id',
            'total' => 'required|integer|min:0',
        ];
    }

    public function messages(): array
    {
        return [
            'hamlet_id.required' => 'Dusun wajib dipilih.',
            'hamlet_id.exists' => 'Dusun tidak valid.',
            'hamlet_id.unique' => 'Data untuk dusun ini sudah ada.',
            'total.required' => 'Total wajib diisi.',
            'total.integer' => 'Total harus berupa angka.',
            'total.min' => 'Total tidak boleh bernilai negatif.',
        ];
    }
}
