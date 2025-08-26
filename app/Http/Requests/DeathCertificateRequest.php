<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DeathCertificateRequest extends FormRequest
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
            //
            'certificate_type' => 'required|string|max:255',
            'type_of_request' => 'required|string|max:255',
            'number_of_copies' => 'required|integer|max:10',
            'deceased_last_name' => 'required|string|max:255',
            'deceased_middle_name' => 'required|string|max:255',
            'deceased_first_name' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'province' => 'required|string|max:255',
            'city_or_municipality' => 'required|string|max:255',
            'date_of_death' => 'required|date',
            'sex' => 'required|string|max:255',
            'fathers_last_name' => 'required|string|max:255',
            'fathers_first_name' => 'required|string|max:255',
            'fathers_middle_name' => 'required|string|max:255',
            'mothers_last_name' => 'required|string|max:255',
            'mothers_first_name' => 'required|string|max:255',
            'mothers_middle_name' => 'required|string|max:255',
            'purpose' => 'required|string|max:255',
            'relationship_to_the_owner' => 'required|string|max:255',
            'delivery_to' => 'required|string|max:255',
        ];
    }

    /**
     * Get custom error messages for validation rules.
     *
     * @return array<string, string>
     */

    public function messages(): array
    {
        return [
            'certificate_type.required' => 'Please select a certificate type.',
            'certificate_type.string'   => 'Certificate type must be text.',
            'certificate_type.max'      => 'Certificate type cannot exceed 255 characters.',

            'type_of_request.required'  => 'Type of request is required.',
            'number_of_copies.required' => 'Please enter the number of copies.',
            'number_of_copies.integer'  => 'Number of copies must be a valid number.',
            'number_of_copies.max'      => 'Maximum allowed copies is 10.',

            'deceased_last_name.required'  => 'Last name of the deceased is required.',
            'deceased_middle_name.required' => 'Middle name of the deceased is required.',
            'deceased_first_name.required' => 'First name of the deceased is required.',

            'country.required'   => 'Country is required.',
            'province.required'  => 'Province is required.',
            'city_or_municipality.required' => 'City or Municipality is required.',

            'date_of_death.required' => 'Date of death is required.',
            'date_of_death.date'     => 'Date of death must be a valid date.',

            'sex.required' => 'Sex is required.',

            'fathers_last_name.required'   => "Father's last name is required.",
            'fathers_first_name.required'  => "Father's first name is required.",
            'fathers_middle_name.required' => "Father's middle name is required.",

            'mothers_last_name.required'   => "Mother's last name is required.",
            'mothers_first_name.required'  => "Mother's first name is required.",
            'mothers_middle_name.required' => "Mother's middle name is required.",

            'purpose.required' => 'Please state the purpose of the request.',

            'relationship_to_the_owner.required' => 'Please specify your relationship to the owner.',

            'delivery_to.required' => 'Please specify who the certificate will be delivered to.',

        ];
    }
}