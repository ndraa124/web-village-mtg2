<?php

namespace App\Http\Requests\Organization;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOrganizationStructureRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'caption' => 'nullable|string|max:255',
        ];
    }

    public function messages(): array
    {
        return [
            'image.image' => 'File harus berupa gambar.',
            'image.mimes' => 'Format gambar harus jpeg, png, jpg, atau webp.',
            'image.max' => 'Ukuran gambar tidak boleh lebih dari 2MB.',
            'caption.max' => 'Keterangan tidak boleh lebih dari :max karakter.',
        ];
    }
}
