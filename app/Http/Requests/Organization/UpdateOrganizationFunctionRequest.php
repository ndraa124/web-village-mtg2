<?php

namespace App\Http\Requests\Organization;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOrganizationFunctionRequest extends FormRequest
{
  public function authorize(): bool
  {
    return true;
  }

  public function rules(): array
  {
    return [
      'position_name' => 'required|string|max:100',
      'description' => 'required|string',
      'icon_class' => 'nullable|string|max:100',
    ];
  }

  public function messages(): array
  {
    return [
      'position_name.required' => 'Nama jabatan wajib diisi.',
      'position_name.max' => 'Nama jabatan maksimal 100 karakter.',
      'description.required' => 'Deskripsi tupoksi wajib diisi.',
      'icon_class.max' => 'Nama icon maksimal 100 karakter.',
    ];
  }
}
