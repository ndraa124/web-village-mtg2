<?php

namespace App\Http\Requests\Infographics\Apbd;

use Illuminate\Foundation\Http\FormRequest;

class StoreApbdRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'year' => 'required|integer|digits:4|min:1900|max:9999|unique:infographics_apbd,year',
            'income' => 'required|integer|min:0',
            'shopping' => 'required|integer|min:0',
            'financing' => 'required|integer|min:0',
            'expenditure' => 'required|integer|min:0',
            'surplus_deficit' => 'required|integer',
        ];
    }

    public function messages(): array
    {
        return [
            'year.required' => 'Tahun wajib diisi.',
            'year.digits' => 'Tahun harus 4 digit.',
            'year.unique' => 'Data APBD untuk tahun ini sudah ada.',
            'income.required' => 'Pendapatan wajib diisi.',
            'income.integer' => 'Pendapatan harus berupa angka.',
            'income.min' => 'Pendapatan tidak boleh negatif.',
            'shopping.required' => 'Belanja wajib diisi.',
            'shopping.integer' => 'Belanja harus berupa angka.',
            'shopping.min' => 'Belanja tidak boleh negatif.',
            'financing.required' => 'Pembiayaan wajib diisi.',
            'financing.integer' => 'Pembiayaan harus berupa angka.',
            'financing.min' => 'Pembiayaan tidak boleh negatif.',
            'expenditure.required' => 'Pengeluaran wajib diisi.',
            'expenditure.integer' => 'Pengeluaran harus berupa angka.',
            'expenditure.min' => 'Pengeluaran tidak boleh negatif.',
            'surplus_deficit.required' => 'Surplus/Defisit wajib diisi.',
            'surplus_deficit.integer' => 'Surplus/Defisit harus berupa angka.',
        ];
    }
}
