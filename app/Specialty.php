<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialty extends Model
{
    protected $fillable = [
        'name','status','price'
    ];

    public function explorations(){
    	return $this->hasMany('App\Exploration');
    }
}
