<?php

namespace App\Http\Requests\Infographics\ApbdIncome;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateApbdIncomeRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $apbdIncomeId = $this->route('apbdIncome')->id;

        return [
            'year' => 'required|integer|digits:4|min:1900|max:9999',
            'income_id' => [
                'required',
                'integer',
                'exists:m_income,id',
                Rule::unique('infographics_apbd_income', 'income_id')
                    ->ignore($apbdIncomeId)
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
            'income_id.required' => 'Pendapatan wajib dipilih.',
            'income_id.exists' => 'Pendapatan tidak valid.',
            'income_id.unique' => 'Data pendapatan untuk tahun ini sudah ada.',
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
