<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class StoreClientRequest extends FormRequest
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
            'first_name' => [
                'required',
                'string',
            ],
            'middle_name' => [
                'nullable',
                'string',
            ], 'surname' => [
                'required',
                'string',
            ], 'extension' => [
                'nullable',
                'string',
            ],
            'birthday' => [
                'required',
                'string',
            ], 'birthplace' => [
                'required',
                'string',
            ], 'sex' => [
                'required',
                'string',
            ], 'civil_status' => [
                'required',
                'string',
            ], 'other_civil_status' => [
                'nullable',
                'string',
            ], 'height' => [
                'required',
                'string',
            ], 'weight' => [
                'required',
                'string',
            ], 'blood_type' => [
                'required',
                'string',
            ], 'gsis_id' => [
                'nullable',
                'string',
            ], 'pagibig_id' => [
                'nullable',
                'string',
            ], 'sss_id' => [
                'nullable',
                'string',
            ], 'philhealth_id' => [
                'nullable',
                'string',
            ], 'tin' => [
                'nullable',
                'string',
            ], 'agency_id' => [
                'nullable',
                'string',
            ], 'citizenship1' => [
                'required',
                'string',
            ], 'citizenship2' => [
                'required',
                'string',
            ], 'citizenship3' => [
                'required',
                'string',
            ], 'res_house' => [
                'required',
                'string',
            ], 'res_street' => [
                'required',
                'string',
            ], 'res_subdivision' => [
                'required',
                'string',
            ], 'res_barangay' => [
                'required',
                'string',
            ], 'res_municipality' => [
                'required',
                'string',
            ], 'res_province' => [
                'required',
                'string',
            ], 'res_zipcode' => [
                'required',
                'string',
            ], 'per_house' => [
                'required',
                'string',
            ], 'per_street' => [
                'required',
                'string',
            ], 'per_subdivision' => [
                'required',
                'string',
            ], 'per_barangay' => [
                'required',
                'string',
            ], 'per_municipality' => [
                'required',
                'string',
            ], 'per_province' => [
                'required',
                'string',
            ], 'per_zipcode' => [
                'required',
                'string',
            ],

        ];
    }
}
