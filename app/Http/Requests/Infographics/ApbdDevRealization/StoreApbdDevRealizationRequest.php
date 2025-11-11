<?php

namespace App\Http\Requests\Infographics\ApbdDevRealization;

use Illuminate\Foundation\Http\FormRequest;

class StoreApbdDevRealizationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'year' => 'required|integer|digits:4|min:1900|max:9999',
            'category_name' => 'required|string|max:100',
            'percent' => 'required|integer|min:0|max:100',
        ];
    }

    public function messages(): array
    {
        return [
            'year.required' => 'Tahun wajib diisi.',
            'year.digits' => 'Tahun harus :digits digit.',
            'name.required' => 'Nama kategori wajib diisi.',
            'name.max' => 'Nama kategori tidak boleh lebih dari :max karakter.',
            'percent.required' => 'Persen wajib diisi.',
            'percent.integer' => 'Persen harus berupa angka.',
            'percent.min' => 'Persen tidak boleh negatif.',
            'percent.max' => 'Persen tidak boleh lebih dari :max.',
        ];
    }
}
