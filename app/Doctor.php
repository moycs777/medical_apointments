<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable =[
        'identification_card','first_name','last_name','gender','address','home_phone','work_phone',
        'mobile_1','mobile_2','email','beeper','status'

    ];

    public function admin(){
        return $this->belongsTo(Admin::class);
    }
}
