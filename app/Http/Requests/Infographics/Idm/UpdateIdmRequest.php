<?php

namespace App\Http\Requests\Infographics\Idm;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateIdmRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        // 'idm' harus sesuai dengan parameter di route
        $idmId = $this->route('idm')->id;

        return [
            'year' => 'required|integer|digits:4|min:1900|max:9999',
            'idm_status_id' => [
                'required',
                'integer',
                'exists:m_idm_status,id',
                Rule::unique('infographics_idm', 'idm_status_id')
                    ->ignore($idmId)
                    ->where('year', $this->year)
            ],
            'min_score' => 'required|numeric|between:-99.9999,99.9999',
            'iks_score' => 'required|numeric|between:-99.9999,99.9999',
            'ike_score' => 'required|numeric|between:-99.9999,99.9999',
            'ikl_score' => 'required|numeric|between:-99.9999,99.9999',
            'addition_score' => 'required|numeric|between:-99.9999,99.9999',
            'total_score' => 'required|numeric|between:-99.9999,99.9999',
        ];
    }

    public function messages(): array
    {
        return [
            'year.required' => 'Tahun wajib diisi.',
            'year.digits' => 'Tahun harus 4 digit.',
            'idm_status_id.required' => 'Status IDM wajib dipilih.',
            'idm_status_id.exists' => 'Status IDM tidak valid.',
            'idm_status_id.unique' => 'Data status IDM untuk tahun ini sudah ada.',
            'min_score.required' => 'Skor Minimal wajib diisi.',
            'iks_score.required' => 'Skor IKS wajib diisi.',
            'ike_score.required' => 'Skor IKE wajib diisi.',
            'ikl_score.required' => 'Skor IKL wajib diisi.',
            'addition_score.required' => 'Skor Tambahan wajib diisi.',
            'total_score.required' => 'Total Skor wajib diisi.',
            '*.numeric' => 'Kolom ini harus berupa angka.',
            '*.between' => 'Kolom ini harus bernilai antara 0 dan 99.9999.',
        ];
    }
}
