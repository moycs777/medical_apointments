<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subpatology extends Model
{
    protected $fillable = [
		'pathology_id','name','recipe','prescription','status'
    ];
    
    public function pathology(){
    	return $this->belongsTo('App\Pathology');
    }

    //******************************************
    public function consultations(){
        return $this->hasMany('App\Consultation');
    }
}
