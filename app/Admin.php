<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    protected $fillable = [
         'email', 'password',
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];

 
}
