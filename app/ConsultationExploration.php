<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConsultationExploration extends Model
{
   protected $fillable = [
       
      'exploration_id','consultation_id','name'
      
    ];
}
