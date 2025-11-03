<?php

namespace App\Http\Requests\Infographics\ResidentMustSelect;

use Illuminate\Foundation\Http\FormRequest;

class StoreResidentMustSelectRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'year' => 'required|integer|digits:4|min:1900|max:9999|unique:infographics_resident_must_select,year',
            'total' => 'required|integer|min:0',
        ];
    }

    public function messages(): array
    {
        return [
            'year.required' => 'Tahun wajib diisi.',
            'year.integer' => 'Tahun harus berupa angka.',
            'year.digits' => 'Tahun harus terdiri dari 4 digit.',
            'year.min' => 'Tahun tidak valid.',
            'year.max' => 'Tahun tidak valid.',
            'year.unique' => 'Data untuk tahun ini sudah ada.',
            'total.required' => 'Total wajib diisi.',
            'total.integer' => 'Total harus berupa angka.',
            'total.min' => 'Total tidak boleh bernilai negatif.',
        ];
    }
}
