<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    protected $fillable = [
       
       'appointment_id','exploration_id','subpatology_id','disease_id','date_consultation',
       'disease',
       'reason_consultation','weight','size','systolic_pressure','diastolic_pressure','status'
    ];

    public function appointment(){
        return $this->belongsTo('App\Appointment');
    }


    public function doctor(){
        return $this->belongsTo('App\Doctor');
    }
    
    //********************************************
    public function subpatology(){
        return $this->belongsTo('App\Subpatology');
    }
}
