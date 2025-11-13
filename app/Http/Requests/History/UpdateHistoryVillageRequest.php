<?php

namespace App\Http\Requests\History;

use Illuminate\Foundation\Http\FormRequest;

class UpdateHistoryVillageRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'origin_description' => 'required|string',
            'history_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }

    public function messages(): array
    {
        return [
            'origin_description.required' => 'Deskripsi Asal Usul wajib diisi.',
            'history_image.image' => 'File harus berupa gambar.',
            'history_image.max' => 'Ukuran gambar maksimal 2MB.',
        ];
    }
}
