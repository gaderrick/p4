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
            $statesForDropdown[$state->id] = $state->name;
        }

        return $statesForDropdown;
    }

    public static function getForDashboard(){
        $states = self::all();

        $statesForDashboard = [];
        foreach ($states as $state) {
            $statesForDashboard[$state->id] = $state->abbreviation;
        }

        return $statesForDashboard;
    }
}
