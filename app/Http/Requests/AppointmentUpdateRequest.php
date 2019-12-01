<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppointmentUpdateRequest extends FormRequest
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
            'doctor_id'           => 'required|integer',
            'clinical_patient_id' => 'required|integer', 
            'appointment_date'    => 'required|date', 
            'reason_consultation' => 'required|string|max:200', 
            'time_consultation'   => 'string|max:10',
            'status'              => 'required', 
        ];
    }
}
