<?php

namespace App\Http\Requests\Infographics\ResidentAge;

use Illuminate\Foundation\Http\FormRequest;

class StoreResidentAgeRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'gender_id' => 'required|integer|exists:m_gender,id',
            'age' => 'required|string|max:20',
            'total' => 'required|integer|min:0',
        ];
    }

    public function messages(): array
    {
        return [
            'gender_id.required' => 'Jenis kelamin wajib dipilih.',
            'gender_id.exists' => 'Jenis kelamin tidak valid.',
            'age.required' => 'Kelompok umur wajib diisi.',
            'age.max' => 'Kelompok umur tidak boleh lebih dari :max karakter.',
            'total.required' => 'Total wajib diisi.',
            'total.integer' => 'Total harus berupa angka.',
            'total.min' => 'Total tidak boleh bernilai negatif.',
        ];
    }
}
