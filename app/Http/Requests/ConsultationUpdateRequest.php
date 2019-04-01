<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConsultationUpdateRequest extends FormRequest
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
            'disease_id'          => 'required|integer',
            'date_consultation'   => 'required|date',
            'reason_consultation' => 'required|max:200',
            'current_illness'     => 'required|max:255', 
            'weigth'              => 'max:10',
            'size'                => 'max:10',
            'systolic_pressure'   => 'max:10',
            'diastolic_pressure'  => 'max:10',

        ];
    }
}
