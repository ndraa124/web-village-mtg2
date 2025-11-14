<?php

namespace App\Http\Requests\ServiceSubmission;

use Illuminate\Foundation\Http\FormRequest;

class CompleteSubmissionRequest extends FormRequest
{
  public function authorize(): bool
  {
    return true;
  }

  public function rules(): array
  {
    return [
      'final_document' => 'required|file|mimes:pdf|max:5000',
      'admin_notes' => 'nullable|string|max:1000',
    ];
  }

  public function messages(): array
  {
    return [
      'final_document.required' => 'File Hasil Akhir wajib diunggah.',
      'final_document.file' => 'Inputan harus berupa file.',
      'final_document.mimes' => 'Format file Hasil Akhir harus PDF.',
      'final_document.max' => 'Ukuran file Hasil Akhir maksimal 5MB.',
    ];
  }
}
