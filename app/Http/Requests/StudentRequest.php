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

            'name' => 'required|min:3|max:255',
            

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



        ];
    }
}
