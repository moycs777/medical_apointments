<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClinicalPatientsUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'string|max:30',
            'last_name'  => 'string|max:30',
            'email' => 'string|email|max:255',
            //'email' => 'string|email|max:255|unique:users',
            //'username' => 'required|string|max:20|unique:users',
            //se debe usar una manera para que el email pueda estar en blanco
            'insurance_id' => 'required',
            //'dni' => 'string|unique:clinical_patients', 
            'dni' => 'string|max:10',
        ];
    }
}
