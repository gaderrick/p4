<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    public static function getForDropdown()
    {
        $states = self::orderBy('state_abbreviation')->get();

        $statesForDropdown = [];
        foreach ($states as $state) {
            $statesForDropdown[$state->state_abbreviation] = $state->state_name;
        }

        return $statesForDropdown;
    }
}
