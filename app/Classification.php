<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classification extends Model
{
    protected $fillable =[
        'codigo','nombre','oms','particular'
    ];

    protected $attributes = [
       'oms' => '0',
       'particular' => '0',
    ];
}
