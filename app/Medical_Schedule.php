<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medical_Schedule extends Model
{
   protected $fillable = [

   	  'doctor_id','day','hour_from','hour_until','status'

   ];
}
