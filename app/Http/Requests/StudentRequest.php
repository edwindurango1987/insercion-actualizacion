<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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

            'name' => ['required','min:3','max:100'],
            'document_number'=> ['required','max:10'],
            'sex'=> ['required'],
            'marital_status'=> ['required'],
            'date_of_birth'=> ['required'],
            'residence_address'=> ['required','max:100'],
            'stratum'=> ['required'],
            'residence_type'=> ['required'],
            'height'=> ['required','max:250','numeric'],
            'institutional_email'=> ['required','max:100','email','unique:students'],
            'cell_phone_number'=> ['required','max:10','unique:students','min:10']


        ];
    }

    public function messages(): array
    {
        return [
            //
            'name.required' => 'A name is required',
            'name.min' => 'A name must be at least 3 characters',
            'name.max' => 'A name must be at most 255 characters',
            'document_number.required' => 'A document number is required',
            'document_number.max' => 'A document number must be at most 10 characters',
            'sex.required' =>  'A sex is required',
            'marital_status.required' => 'A marital status is required',
            'date_of_birth.required' => 'A date of birth is required',
            'residence_address.required' => 'A residence address is required',
            'residence_address.max' => 'A residence address must be at most 100 characters',
            'stratum.required' => 'A stratum is required',
            'residence_type.required' => 'A residence type is required',
            'height.required' => 'A height is required',
            'height.numeric' => 'A height must be a number',
            'institutional_email.required' => 'A institutional email is required',
            'institutional_email.max' => 'A institutional email must be at most 100 characters',
            'institutional_email.email' => 'A institutional email must be a valid email',
            'institutional_email.unique' => 'A institutional email must be unique',
            'cell_phone_number.required' => 'A cell phone number is required',
            'cell_phone_number.max' => 'A cell phone number must be at most 10 characters',
            'cell_phone_number.unique' => 'A cell phone number must be unique',
            'cell_phone_number.min' => 'A cell phone number must be at least 10 characters'
        ];
    }
}
