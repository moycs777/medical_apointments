<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pathology extends Model
{
    protected $fillable= [
        'classification_id','name','status'
    ];

    public function classification(){

    	return $this->belongsTo('App\Classification');
    }

    public function subpatologies(){

    	return $this->hasMany('App\Subpatology');
    }

    public function scopeClassification($query,$tipoclas){

        return $query->where('classification_id',$tipoclas);
    }

   
    public function scopePathologie($query,$name){

       if($name)
    		return $query->where('name','LIKE',"%$name%");
                        
    }
}
