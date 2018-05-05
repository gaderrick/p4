<?php

use Illuminate\Database\Seeder;
use App\RosterType;

class RosterTypesTableSeeder extends Seeder
{
    public function run()
    {
        $rosterTypes = [
            [1,'Team'],
            [2,'Meet'],
            [3,'Class'],
            [4,'Other']
        ];

        foreach ($rosterTypes as $rosterTypeData) {
            $rosterType = new RosterType();
            $rosterType->timestamps = false;
            $rosterType->id = $rosterTypeData[0];
            $rosterType->description = $rosterTypeData[1];

            $rosterType->save();
        }
    }
}
