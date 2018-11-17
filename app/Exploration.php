<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exploration extends Model
{
    protected $fillable = [
      
          'specialty_id','name','de','status'
    ];

    public function specialty(){
    	return $this->belongsTo('App\Specialty');
    }
}
