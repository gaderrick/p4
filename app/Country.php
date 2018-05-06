<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public static function getForDropdown()
    {
        $countries = self::orderBy('id')->get();

        $countriesForDropdown = [];
        foreach ($countries as $country) {
            $countriesForDropdown[$country->id] = $country->name;
        }

        return $countriesForDropdown;
    }

    public static function getForDashboard(){
        $countries = self::all();

        $countriesForDashboard = [];
        foreach ($countries as $country) {
            $countriesForDashboard[$country->id] = $country->abbreviation;
        }

        return $countriesForDashboard;
    }
}
