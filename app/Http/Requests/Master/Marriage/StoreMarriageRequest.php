<?php

namespace App\Http\Requests\Master\Marriage;

use Illuminate\Foundation\Http\FormRequest;

class StoreMarriageRequest extends FormRequest
{
  public function authorize(): bool
  {
    return true;
  }

  public function rules(): array
  {
    return [
      'marriage_name' => 'required|string|max:100',
    ];
  }

  public function messages(): array
  {
    return [
      'marriage_name.required' => 'Nama perkawinan wajib diisi.',
      'marriage_name.max' => 'Nama perkawinan tidak boleh lebih dari :max karakter.',
    ];
  }
}
