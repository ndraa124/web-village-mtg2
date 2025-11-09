<?php

namespace App\Http\Requests\Master\LegalProductCategory;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateLegalProductCategoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $categoryId = $this->route('legal_product_category')->id;

        return [
            'name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('legal_products_categories')->ignore($categoryId),
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Nama kategori wajib diisi.',
            'name.unique' => 'Nama kategori ini sudah ada.',
        ];
    }
}
