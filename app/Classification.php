<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classification extends Model
{
    protected $fillable =[
        'nombre','oms','particular'
    ];

    protected $attributes = [
       'oms' => '0',
       'particular' => '0',
    ];

    public function subclassifications(){

    	//return $this->hasMany('App\Subclassification', 'classifications_id', 'id');
    	return $this->hasMany('App\Subclassification');
    }
}
