<?php

namespace App\Http\Requests\Infographics\ResidentReligion;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateResidentReligionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $residentReligionId = $this->route('residentReligion')->id;

        return [
            'religion_id' => [
                'required',
                'integer',
                'exists:m_religion,id',
                Rule::unique('infographics_resident_religion', 'religion_id')->ignore($residentReligionId),
            ],
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
