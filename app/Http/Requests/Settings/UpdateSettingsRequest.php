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
            'phone' => 'nullable|string|max:20',
            'email' => 'nullable|string|email|max:255',

            'facebook' => 'nullable|string|url|max:255',
            'instagram' => 'nullable|string|url|max:255',
            'twitter' => 'nullable|string|url|max:255',
            'youtube' => 'nullable|string|url|max:255',

            'operational_hours_weekdays' => 'nullable|string|max:100',
            'operational_hours_weekends' => 'nullable|string|max:100',

            'map_latitude' => 'nullable|string|max:100',
            'map_longitude' => 'nullable|string|max:100',
            'map_zoom' => 'nullable|numeric|min:1|max:22',

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

            'facebook.url' => 'Link Facebook harus berupa URL yang valid (diawali https://).',
            'instagram.url' => 'Link Instagram harus berupa URL yang valid (diawali https://).',
            'twitter.url' => 'Link Twitter harus berupa URL yang valid (diawali https://).',
            'youtube.url' => 'Link YouTube harus berupa URL yang valid (diawali https://).',

            'map_zoom.numeric' => 'Map Zoom Level harus berupa angka.',
            'map_zoom.min' => 'Map Zoom Level minimal :min.',
        ];
    }
}
