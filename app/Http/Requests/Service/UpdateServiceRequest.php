<?php

namespace App\Http\Requests\Service;

use Illuminate\Foundation\Http\FormRequest;

class UpdateServiceRequest extends FormRequest
{
  public function authorize(): bool
  {
    return true;
  }

  public function rules(): array
  {
    return [
      'title' => 'required|string|max:150|unique:services,title,' . $this->service->id,
      'description' => 'required|string|max:255',
      'icon_class' => 'required|string|max:100',
      'requirements_content' => 'required|string',
    ];
  }

  public function messages(): array
  {
    return [
      'title.required' => 'Judul Layanan wajib diisi.',
      'title.unique' => 'Judul Layanan sudah digunakan, gunakan judul yang lain.',
      'description.required' => 'Deskripsi singkat wajib diisi.',
      'icon_class.required' => 'Class Ikon wajib diisi.',
      'requirements_content.required' => 'Persyaratan Layanan wajib diisi.',
    ];
  }
}
