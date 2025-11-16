<?php

namespace App\Http\Requests\ServiceSubmission;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class StoreServiceSubmissionRequest extends FormRequest
{
  public function authorize(): bool
  {
    return true;
  }

  public function rules(): array
  {
    return [
      'nik' => 'required|string|digits:16',
      'name' => 'required|string|max:150',
      'email' => 'required|email|max:150',
      'phone' => 'nullable|string|max:50',
      'purpose' => 'required|string|max:1000',
      'supporting_files' => 'required|array|max:5',
      'supporting_files.*' => 'file|mimes:pdf,jpg,jpeg,png|max:2048',
    ];
  }

  public function attributes(): array
  {
    return [
      'name' => 'Nama Lengkap',
      'email' => 'Email',
      'phone' => 'Nomor Telepon',
      'purpose' => 'Keterangan Pengajuan',
      'supporting_files' => 'File Pendukung',
      'supporting_files.*' => 'File Pendukung',
    ];
  }

  public function messages(): array
  {
    return [
      'nik.required' => 'NIK wajib diisi.',
      'nik.digits' => 'NIK harus :digits digit angka.',
      'name.required' => 'Nama Lengkap wajib diisi.',
      'email.required' => 'Email wajib diisi.',
      'email.email' => 'Format Email tidak valid.',
      'purpose.required' => 'Keterangan pengajuan wajib diisi.',
      'supporting_files.required' => 'File pendukung wajib diunggah.',
      'supporting_files.max' => 'Maksimal :max file pendukung yang dapat diunggah.',
      'supporting_files.*.file' => 'Input harus berupa file.',
      'supporting_files.*.mimes' => 'Format file pendukung harus PDF, JPG, JPEG, atau PNG.',
      'supporting_files.*.max' => 'Ukuran setiap file pendukung maksimal 2MB.',
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
