<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClinicalPatient extends Model
{

    protected $fillable = [
       'user_id','insurance_id','dni','first_name','last_name'

    ];

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
    		return $query->where('dni','LIKE',"%".$dni."%");
                        
    }

    public function scopeFirst_Name($query,$first_name){

        if($first_name)
    	    return $query->orWhere('first_name','LIKE',"%".$first_name."%");
                         
    }

    public function scopeLast_Name($query,$last_name){

       if($last_name)
            return $query->orWhere('last_name','LIKE',"%$last_name%");
    }
}
