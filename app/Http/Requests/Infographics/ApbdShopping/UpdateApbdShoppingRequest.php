<?php

namespace App\Http\Requests\Infographics\ApbdShopping;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateApbdShoppingRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $apbdShoppingId = $this->route('apbdShopping')->id;

        return [
            'year' => 'required|integer|digits:4|min:1900|max:9999',
            'shopping_id' => [
                'required',
                'integer',
                'exists:m_shopping,id',
                Rule::unique('infographics_apbd_shopping', 'shopping_id')
                    ->ignore($apbdShoppingId)
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
            'shopping_id.required' => 'Belanja wajib dipilih.',
            'shopping_id.exists' => 'Belanja tidak valid.',
            'shopping_id.unique' => 'Data belanja untuk tahun ini sudah ada.',
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
