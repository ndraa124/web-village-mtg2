<?php

namespace App\Http\Requests\Organization;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOrganizationOfficialsRequest extends FormRequest
{
  public function authorize(): bool
  {
    return true;
  }

  public function rules(): array
  {
    return [
      'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
      'name' => 'required|string|max:100',
      'officials_position_id' => 'required|exists:m_village_officials_position,id',
      'order' => 'nullable|integer|min:0',
    ];
  }

  public function messages(): array
  {
    return [
      'image.image' => 'File harus berupa gambar.',
      'image.mimes' => 'Format gambar harus jpeg, png, jpg, atau webp.',
      'image.max' => 'Ukuran gambar tidak boleh lebih dari 2MB.',
      'name.required' => 'Nama wajib diisi.',
      'name.max' => 'Nama tidak boleh lebih dari :max karakter.',
      'officials_position_id.required' => 'Jabatan wajib dipilih.',
      'officials_position_id.exists' => 'Jabatan yang dipilih tidak valid.',
      'order.integer' => 'Urutan harus berupa angka.',
      'order.min' => 'Urutan tidak boleh negatif.',
    ];
  }
}
