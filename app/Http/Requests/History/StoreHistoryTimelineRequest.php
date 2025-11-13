<?php

namespace App\Http\Requests\History;

use Illuminate\Foundation\Http\FormRequest;

class StoreHistoryTimelineRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'order' => 'nullable|integer|min:0',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Judul Timeline wajib diisi.',
            'title.max' => 'Judul Timeline tidak boleh lebih dari :max karakter.',
            'description.required' => 'Deskripsi wajib diisi.',
        ];
    }
}
