<?php

namespace App\Http\Requests\LegalProducts;

use Illuminate\Foundation\Http\FormRequest;

class StoreLegalProductsRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'required|string|max:100',
            'category_id' => 'required|integer|exists:legal_products_categories,id',
            'year' => 'required|digits:4|date_format:Y',
            'link' => 'nullable|string|url',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Judul wajib diisi.',
            'title.max' => 'Judul tidak boleh lebih dari 100 karakter.',
            'category_id.required' => 'Kategori wajib dipilih.',
            'category_id.exists' => 'Kategori yang dipilih tidak valid.',
            'year.required' => 'Tahun wajib diisi.',
            'year.digits' => 'Tahun harus 4 digit (contoh: 2024).',
            'year.date_format' => 'Format tahun tidak valid.',
            'link.url' => 'Link harus berupa URL yang valid (contoh: http://example.com).',
        ];
    }
}
