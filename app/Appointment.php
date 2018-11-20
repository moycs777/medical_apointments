<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable =[

    	'clinical_patient_id','doctor_id','appointment_date','reason_consultation','day',
    	'status_1','status_2','status'

    ];

    public function doctor(){
        return $this->belongsTo('App\Doctor');
    }
}
