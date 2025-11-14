<?php

namespace App\Http\Requests\ServiceSubmission;

use Illuminate\Foundation\Http\FormRequest;

class StoreServiceSubmissionRequest extends FormRequest
{
  public function authorize(): bool
  {
    return true;
  }

  public function rules(): array
  {
    return [
      'name' => 'required|string|max:150',
      'email' => 'required|email|max:150',
      'phone' => 'nullable|string|max:50',
      'user_description' => 'required|string|max:1000',
      'supporting_files' => 'nullable|array|max:5',
      'supporting_files.*' => 'file|mimes:pdf,jpg,jpeg,png|max:2048',
    ];
  }

  public function attributes(): array
  {
    return [
      'name' => 'Nama Lengkap',
      'email' => 'Email',
      'phone' => 'Nomor Telepon',
      'user_description' => 'Keterangan Pengajuan',
      'supporting_files' => 'File Pendukung',
      'supporting_files.*' => 'File Pendukung',
    ];
  }

  public function messages(): array
  {
    return [
      'name.required' => 'Nama Lengkap wajib diisi.',
      'email.required' => 'Email wajib diisi.',
      'email.email' => 'Format Email tidak valid.',
      'user_description.required' => 'Keterangan pengajuan wajib diisi.',
      'supporting_files.max' => 'Maksimal 5 file pendukung yang dapat diunggah.',
      'supporting_files.*.file' => 'Input harus berupa file.',
      'supporting_files.*.mimes' => 'Format file pendukung harus PDF, JPG, JPEG, atau PNG.',
      'supporting_files.*.max' => 'Ukuran setiap file pendukung maksimal 2MB.',
    ];
  }
}
