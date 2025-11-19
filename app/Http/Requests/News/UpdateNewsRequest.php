<?php

namespace App\Http\Requests\News;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class UpdateNewsRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        // $newsId = $this->route('news')->id; // Ambil ID berita dari route

        return [
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'status' => ['required', Rule::in(['draft', 'published'])],
            'published_at' => 'nullable|date',
            'category_id' => 'required|integer|exists:categories,id',
            'tags' => 'nullable|array',
            'tags.*' => 'string|max:100',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Judul berita wajib diisi.',
            'content.required' => 'Konten berita wajib diisi.',
            'image.image' => 'File harus berupa gambar.',
            'image.mimes' => 'Format gambar harus jpeg, png, jpg, gif, atau webp.',
            'image.max' => 'Ukuran gambar maksimal 2MB.',
            'status.required' => 'Status wajib dipilih.',
            'category_id.required' => 'Kategori wajib dipilih.',
            'category_id.exists' => 'Kategori yang dipilih tidak valid.',
            'tags.*.exists' => 'Salah satu tag yang dipilih tidak valid.',
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
