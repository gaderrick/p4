<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password',
        'avatar', 'provider_id', 'provider',
        'access_token'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function organizations(){
        return $this->hasMany('App\Organization');
    }

    public function participants(){
        return $this->hasMany('App\Participant');
    }
}
