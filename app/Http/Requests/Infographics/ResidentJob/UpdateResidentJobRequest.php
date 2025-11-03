<?php

namespace App\Http\Requests\Infographics\ResidentJob;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateResidentJobRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $residentJobId = $this->route('residentJob')->id;

        return [
            'job_id' => [
                'required',
                'integer',
                'exists:m_job,id',
                Rule::unique('infographics_resident_job', 'job_id')->ignore($residentJobId),
            ],
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
