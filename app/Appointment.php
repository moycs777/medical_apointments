<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable =[

    	'doctor_id','clinical_patient_id','appointment_date','reason_consultation','status'

    ];

    public function doctor(){
        return $this->belongsTo('App\Doctor');
    }
    
    public function clinical_patient(){
        return $this->belongsTo('App\ClinicalPatient');
    }
}
