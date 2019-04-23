<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClinicalPatient extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function appointments(){
        return $this->hasMany('App\Appointment');
    }

    public function insurance(){
        return $this->belongsTo('App\Insurance');
    }

    public function scopeDni($query,$dni){

    	if($dni)
    		return $query->where('dni','LIKE',"%$dni%");
    }

    // public function scopeFirstName($query,$first_name){

    //     if($first_name)
    // 	    return $query->where('first_name','LIKE',"%$first_name%");
    // }

    // public function scopeLastName($query,$last_name){

    //     if($last_name)
    //         return $query->where('last_name','LIKE',"%$last_name%");
    // }
}
