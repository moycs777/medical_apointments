<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialty extends Model
{
    protected $fillable = [
        'name','status','price'
    ];

    protected $table = 'specialties';

    public function explorations(){
    	return $this->hasMany('App\Exploration');
    }

    public function doctors(){
        return $this->belongsToMany('App\Doctor');
    }
}
