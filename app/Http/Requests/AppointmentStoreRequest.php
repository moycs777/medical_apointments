<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppointmentStoreRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'doctor_id'           => 'required|integer',
            'clinical_patient_id' => 'required|integer', 
            'insurance_id'        => 'required|integer', 
            'appointment_date'    => 'required|date', 
            'reason_consultation' => 'required|string|max:200',
            'time_consultation'   => 'string|max:10', 
        ];
    }
}
