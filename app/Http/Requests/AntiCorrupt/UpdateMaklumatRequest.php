<?php

namespace App\Http\Requests\AntiCorrupt;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class UpdateMaklumatRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'content' => 'required|string',
        ];
    }

    public function messages(): array
    {
        return [
            'image.image' => 'File harus berupa gambar.',
            'image.mimes' => 'Format gambar harus jpeg, png, jpg, atau webp.',
            'image.max' => 'Ukuran gambar tidak boleh lebih dari 2MB.',
            'content.required' => 'Konten maklumat wajib diisi.',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            redirect(url()->previous())
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Mohon periksa kembali data yang Anda masukkan.')
        );
    }
}
