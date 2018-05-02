<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    public static function getForDropdown()
    {
        $states = self::orderBy('id')->get();

        $statesForDropdown = [];
        foreach ($states as $state) {
            $statesForDropdown[$state->id] = $state->state_name;
        }

        return $statesForDropdown;
    }
}
