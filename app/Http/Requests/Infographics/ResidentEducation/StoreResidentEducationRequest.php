<?php

namespace App\Http\Requests\Infographics\ResidentEducation;

use Illuminate\Foundation\Http\FormRequest;

class StoreResidentEducationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'education_id' => 'required|integer|exists:m_education,id|unique:infographics_resident_education,education_id',
            'total' => 'required|integer|min:0',
        ];
    }

    public function messages(): array
    {
        return [
            'education_id.required' => 'Pendidikan wajib dipilih.',
            'education_id.exists' => 'Pendidikan tidak valid.',
            'education_id.unique' => 'Data untuk pendidikan ini sudah ada.',
            'total.required' => 'Total wajib diisi.',
            'total.integer' => 'Total harus berupa angka.',
            'total.min' => 'Total tidak boleh bernilai negatif.',
        ];
    }
}
