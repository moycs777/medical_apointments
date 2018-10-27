<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subclassification extends Model
{
    protected $fillable = [
        'name','classification_id'
    ];

    public function classification(){

    	//return $this->belongsTo('App\Classification', 'id', 'classifications_id');
    	return $this->belongsTo('App\Classification');
    }

     public function diseases(){

        //return $this->belongsTo('App\Disease', 'subclassifications_id', 'id');
    	return $this->hasMany('App\Disease');
    }
}
