<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{
    protected $fillable = [
       'subclassification_id','code','name','symbol'

    ];

    public function subclassification(){
    	//return $this->hasMany('App\Subclassification', 'classifications_id', 'id');
    	return $this->belongsTo('App\Subclassification');
    }
}
