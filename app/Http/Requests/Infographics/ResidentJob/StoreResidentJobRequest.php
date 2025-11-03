<?php

namespace App\Http\Requests\Infographics\ResidentJob;

use Illuminate\Foundation\Http\FormRequest;

class StoreResidentJobRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'job_id' => 'required|integer|exists:m_job,id|unique:infographics_resident_job,job_id',
            'total' => 'required|integer|min:0',
        ];
    }

    public function messages(): array
    {
        return [
            'job_id.required' => 'Pekerjaan wajib dipilih.',
            'job_id.exists' => 'Pekerjaan tidak valid.',
            'job_id.unique' => 'Data untuk pekerjaan ini sudah ada.',
            'total.required' => 'Total wajib diisi.',
            'total.integer' => 'Total harus berupa angka.',
            'total.min' => 'Total tidak boleh bernilai negatif.',
        ];
    }
}
