<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BirthCertificateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * 
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
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'last_name' => 'required|string|max:255',
            'certificate_type' => 'required|string|max:255',
            'type_of_request' => 'required|string|max:255',
            'number_of_copies' => 'required|integer|max:10',
            'date_of_birth' => 'required|date',
            'sex' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'province' => 'required|string|max:255',
            'city_or_municipality' => 'required|string|max:255',
            'fathers_last_name' => 'required|string|max:255',
            'fathers_first_name' => 'required|string|max:255',
            'fathers_middle_name' => 'required|string|max:255',
            'mothers_last_name' => 'required|string|max:255',
            'mothers_first_name' => 'required|string|max:255',
            'mothers_middle_name' => 'required|string|max:255',
            'relationship_to_the_owner' => 'required|string|max:255',
        ];
    }
}
