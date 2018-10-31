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
}
