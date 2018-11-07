<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{
    protected $fillable = [
       'subclassification_id','name','symbol'

    ];

    public function subclassification(){
    	//return $this->hasMany('App\Subclassification', 'classifications_id', 'id');
    	return $this->belongsTo('App\Subclassification');
    }
}
