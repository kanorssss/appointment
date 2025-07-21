<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MarriageCertificateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'certificate_type' => 'required|string|max:255',
            'type_of_request' => 'nullable|string|max:255',
            'number_of_copies' => 'required|integer|max:10',
            'husband_last_name' => 'required|string|max:255',
            'husband_middle_name' => 'required|string|max:255',
            'husband_first_name' => 'nullable|string|max:255',
            'wife_last_name' => 'required|string|max:255',
            'wife_middle_name' => 'required|string|max:255',
            'wife_first_name' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'province' => 'required|string|max:255',
            'city_or_municipality' => 'required|string|max:255',
            'date_of_marriage' => 'required|date',
            'purpose' => 'required|string|max:255',

        ];
    }
}