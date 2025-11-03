<?php

namespace App\Http\Requests\Infographics\ApbdYear;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateApbdYearRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $apbdYearId = $this->route('apbdYear')->id;

        return [
            'year' => [
                'required',
                'integer',
                'digits:4',
                'min:1900',
                'max:9999',
                Rule::unique('infographics_apbd_year', 'year')->ignore($apbdYearId),
            ],
            'income' => 'required|integer|min:0',
            'shopping' => 'required|integer|min:0',
        ];
    }

    public function messages(): array
    {
        return [
            'year.required' => 'Tahun wajib diisi.',
            'year.digits' => 'Tahun harus 4 digit.',
            'year.unique' => 'Data untuk tahun ini sudah ada.',
            'income.required' => 'Pendapatan wajib diisi.',
            'income.integer' => 'Pendapatan harus berupa angka.',
            'income.min' => 'Pendapatan tidak boleh negatif.',
            'shopping.required' => 'Belanja wajib diisi.',
            'shopping.integer' => 'Belanja harus berupa angka.',
            'shopping.min' => 'Belanja tidak boleh negatif.',
        ];
    }
}
