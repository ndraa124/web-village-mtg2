<?php

namespace App\Http\Requests\History;

use Illuminate\Foundation\Http\FormRequest;

class UpdateHistoryTimelineRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'order' => 'nullable|integer|min:0',
            'is_active' => 'nullable|boolean',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Judul Item Timeline wajib diisi.',
        ];
    }
}
