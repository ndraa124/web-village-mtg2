<?php

namespace App\Http\Requests\Settings;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSettingsRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:100',
            'description' => 'nullable|string',
            'village_head' => 'required|string|max:100',
            'subdistrict' => 'required|string|max:100',
            'regency' => 'required|string|max:100',
            'province' => 'required|string|max:100',
            'address' => 'required|string',
            'phone' => 'nullable|string|max:13',
            'email' => 'nullable|string|email|max:25',
            'facebook' => 'nullable|string|max:100',
            'instagram' => 'nullable|string|max:100',
            'twitter' => 'nullable|string|max:100',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'is_active' => 'nullable|boolean',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Nama desa wajib diisi.',
            'village_head.required' => 'Nama kepala desa wajib diisi.',
            'subdistrict.required' => 'Kecamatan wajib diisi.',
            'regency.required' => 'Kabupaten/Kota wajib diisi.',
            'province.required' => 'Provinsi wajib diisi.',
            'address.required' => 'Alamat wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'phone.max' => 'No. Telepon tidak boleh lebih dari :max karakter.',
            'email.max' => 'Email tidak boleh lebih dari :max karakter.',
        ];
    }
}
