<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicalSchedule extends Model
{
    protected $fillable = [

    	'doctor_id','day','hour_from','hour_untl','status'

    ];
}
