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
            $countriesForDropdown[$country->id] = $country->country_name;
        }

        return $countriesForDropdown;
    }
}
