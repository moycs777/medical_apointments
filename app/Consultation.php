<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    protected $fillable = [
       
       'appointment_id','exploration_id','date_consultation','reason_consultation','disease','weight',
       'size','systolic_pressure','diastolic_pressure','status'
    ];

    public function appointment(){
        return $this->belongsTo('App\Appointment');
    }
}
