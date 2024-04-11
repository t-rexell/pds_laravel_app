<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFamilyBackgroundRequest extends FormRequest
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

            'spouse_first_name' => [
                'nullable',
                'string',
            ],
            'spouse_middle_name' => [
                'nullable',
                'string',
            ],
            'spouse_last_name' => [
                'nullable',
                'string',
            ],
            'spouse_name_extension' => [
                'nullable',
                'string',
            ],
            'occupation' => [
                'nullable',
                'string',
            ],
            'employer' => [
                'nullable',
                'string',
            ],
            'business_address' => [
                'nullable',
                'string',
            ],
            'telephone' => [
                'nullable',
                'string',
            ],
            'father_first_name' => [
                'nullable',
                'string',
            ],
            'father_middle_name' => [
                'nullable',
                'string',
            ],
            'father_last_name' => [
                'nullable',
                'string',
            ],
            'father_name_extension' => [
                'nullable',
                'string',
            ],
            'mother_first_name' => [
                'nullable',
                'string',
            ],
            'mother_middle_name' => [
                'nullable',
                'string',
            ],
            'mother_last_name' => [
                'nullable',
                'string',
            ],
            'maiden_name' => [
                'nullable',
                'string',
            ],

        ];
    }
}
