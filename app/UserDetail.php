<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    public function user_detail()
    {
        return $this->belongsTo('App\User');
    }

    public function rosters()
    {
        # withTimeStamps ensures pivot table is automatically maintained
        return $this->belongsToMany('App\Roster')->withTimestamps();
    }
}
