<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roster extends Model
{
    public function organization(){
        return $this->belongsTo('App\Organization');
    }

    public function user_details(){
        # withTimeStamps ensures pivot table is automatically maintained
        return $this->belongsToMany('App\UserDetail')->withTimestamps();
    }
}
