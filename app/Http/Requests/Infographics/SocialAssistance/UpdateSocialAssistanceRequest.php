<?php

namespace App\Http\Requests\Infographics\SocialAssistance;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateSocialAssistanceRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $socialAssistanceId = $this->route('socialAssistance')->id;

        return [
            'social_assistance_id' => [
                'required',
                'integer',
                'exists:m_social_assistance,id',
                Rule::unique('infographics_social_assistance', 'social_assistance_id')
                    ->ignore($socialAssistanceId)
            ],
            'total' => 'required|integer|min:0',
        ];
    }

    public function messages(): array
    {
        return [
            'social_assistance_id.required' => 'Bantuan sosial wajib dipilih.',
            'social_assistance_id.exists' => 'Bantuan sosial tidak valid.',
            'social_assistance_id.unique' => 'Data bantuan sosial ini sudah ada.',
            'total.required' => 'Total wajib diisi.',
            'total.integer' => 'Total harus berupa angka.',
            'total.min' => 'Total tidak boleh negatif.',
        ];
    }
}
