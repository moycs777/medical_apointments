<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DoctorSpecialty extends Model
{
    protected $table = 'doctor_specialty';

    public function specialty_p(){

    	//return $this->belongsToMany('App\Specialty','foreign_key');
    	return $this->belongsToMany('App\Specialty', 'name');
        //            ->withPivot('create', 'read','update', 'delete');
    	//return $this->belongsToMany('App\Specialty','name');

    }

    // public function doctor_p(){

    // 	return $this->belongsToMany('App\Doctor','first_name');
    // 	            //->withPivot('create', 'read','update', 'delete');;
    // }
    
}
