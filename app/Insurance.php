<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
    protected $fillable = [
        'name'
    ];

    public function clinical_patients(){
        return $this->hasMany('App\ClinicalPatient');
    }
}
