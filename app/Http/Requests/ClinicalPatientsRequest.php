<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClinicalPatientsRequest extends FormRequest
{
   
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            // 'name' => 'required|string|max:255',
            'username' => 'required|string|max:20|unique:users',
            //se debe usar una manera para que el email pueda estar en blanco
            'email' => 'string|email|max:255|unique:users', 
            'dni' => 'string|unique:clinical_patients', 
            //'email' => 'required|string|email|max:255|unique:users', 
        ];
    }
}
