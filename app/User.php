<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    protected $fillable = [
        'name', 'username', 'email', 'password',
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];

    public function photos()
    {
        return $this->belongsToMany('App\Photo');
    }
    public function info()
    {
        return $this->hasOne(Info::class);
    }
}
