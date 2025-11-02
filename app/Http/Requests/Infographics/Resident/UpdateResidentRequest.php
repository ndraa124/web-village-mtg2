<?php

namespace App\Http\Requests\Infographics\Resident;

use Illuminate\Foundation\Http\FormRequest;

class UpdateResidentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            't_resident' => 'required|integer|min:0',
            't_man' => 'required|integer|min:0',
            't_woman' => 'required|integer|min:0',
            't_head_of_family' => 'required|integer|min:0',
            't_temporary' => 'required|integer|min:0',
            't_mutation' => 'required|integer|min:0',
        ];
    }

    public function messages(): array
    {
        return [
            '*.required' => 'Kolom ini wajib diisi.',
            '*.integer' => 'Kolom ini harus berupa angka.',
            '*.min' => 'Kolom ini tidak boleh bernilai negatif.',
        ];
    }
}
