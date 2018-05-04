<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roster extends Model
{
    public function organizations(){
        return $this->belongsTo('App\Organization');
    }

    public function participants(){
        # withTimeStamps ensures pivot table is automatically maintained
        return $this->belongsToMany('App\Participant')->withTimestamps();
    }
}
