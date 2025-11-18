<?php

namespace App\Http\Requests\Master\VillageOfficialPosition;

use Illuminate\Foundation\Http\FormRequest;

class StoreVillageOfficialPositionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'position_name' => 'required|string|max:100|unique:m_village_officials_position,position_name',
        ];
    }

    public function messages(): array
    {
        return [
            'position_name.required' => 'Nama jabatan wajib diisi.',
            'position_name.max' => 'Nama jabatan tidak boleh lebih dari :max karakter.',
            'position_name.unique' => 'Nama jabatan sudah digunakan, gunakan nama jabatan yang lain.',
        ];
    }
}
