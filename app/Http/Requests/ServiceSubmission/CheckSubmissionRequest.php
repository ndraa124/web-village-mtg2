<?php

namespace App\Http\Requests\ServiceSubmission;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class CheckSubmissionRequest extends FormRequest
{
  public function authorize(): bool
  {
    return true;
  }

  public function rules(): array
  {
    return [
      'tracking_number' => 'required|string|max:1000',
    ];
  }

  public function messages(): array
  {
    return [
      'tracking_number.required' => 'Nomor Tracking wajib diisi.',
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
