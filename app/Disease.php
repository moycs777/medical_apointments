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

    public function scopeTypeDisease($query){

        return $query->where('subclassification_id','230');
    }

   
    public function scopeDisease($query,$name){

       if($name)
    		return $query->where('name','LIKE',"%$name%");
                        
    }
}
