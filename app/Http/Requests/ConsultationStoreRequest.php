<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConsultationStoreRequest extends FormRequest
{
   
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
            'appointment_id'      => 'required|integer', 
            'exploration_id'      => 'required|integer', 
            'subpatology_id'      => 'required|integer', 
            'date_consultation'   => 'required|date', 
            'reason_consultation' => 'required|max:200', 
            'disease'             => 'required', 
            'diagnosis'           => 'required', 
            'weigth'              => 'string|max:10', 
            'size'                => 'string|max:10', 
            'systolic_pressure'   => 'string|max:10',
            'diastolic_pressure'  => 'string|max:10', 
            
        ];
    }
}
