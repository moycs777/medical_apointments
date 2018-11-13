<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medical_Schedule extends Model
{
   protected $fillable = [

   	  'doctor_id','day','hour_from_1','minutes_from_1','hour_until_1','minutes_from_1',
      'hour_from_2','minutes_from_2','hour_until_2','minutes_from_2',
   	  'status_1','status_2'

   ];
}
