<?php

namespace App\Http\Requests\Master\Job;

use Illuminate\Foundation\Http\FormRequest;

class StoreJobRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'job_name' => 'required|string|max:100',
        ];
    }

    public function messages(): array
    {
        return [
            'job_name.required' => 'Nama pekerjaan wajib diisi.',
            'job_name.max' => 'Nama pekerjaan tidak boleh lebih dari :max karakter.',
        ];
    }
}
