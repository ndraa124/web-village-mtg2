<?php

namespace App\Http\Requests\Infographics\ApbdFinancing;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateApbdFinancingRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $apbdFinancingId = $this->route('apbdFinancing')->id;

        return [
            'year' => 'required|integer|digits:4|min:1900|max:9999',
            'financing_id' => [
                'required',
                'integer',
                'exists:m_financing,id',
                Rule::unique('infographics_apbd_financing', 'financing_id')
                    ->ignore($apbdFinancingId)
                    ->where('year', $this->year)
            ],
            'budget' => 'required|integer|min:0',
            'percent' => 'required|integer|min:0|max:100',
        ];
    }

    public function messages(): array
    {
        return [
            'year.required' => 'Tahun wajib diisi.',
            'year.digits' => 'Tahun harus 4 digit.',
            'financing_id.required' => 'Pembiayaan wajib dipilih.',
            'financing_id.exists' => 'Pembiayaan tidak valid.',
            'financing_id.unique' => 'Data pembiayaan untuk tahun ini sudah ada.',
            'budget.required' => 'Anggaran wajib diisi.',
            'budget.integer' => 'Anggaran harus berupa angka.',
            'budget.min' => 'Anggaran tidak boleh negatif.',
            'percent.required' => 'Persen wajib diisi.',
            'percent.integer' => 'Persen harus berupa angka.',
            'percent.min' => 'Persen tidak boleh negatif.',
            'percent.max' => 'Persen tidak boleh lebih dari 100.',
        ];
    }
}
