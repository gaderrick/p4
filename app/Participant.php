<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    public function participants()
    {
        return $this->belongsTo('App\User');
    }

    public function rosters()
    {
        # withTimeStamps ensures pivot table is automatically maintained
        return $this->belongsToMany('App\Roster')->withTimestamps();
    }
}
