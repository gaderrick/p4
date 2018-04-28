<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    public function rosters(){
        return $this->hasMany('App\Roster');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
