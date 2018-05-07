<?php

use Illuminate\Database\Seeder;
use App\Roster;

class RostersTableSeeder extends Seeder
{
    public function run()
    {
        $rosters = [
            [1,1,'Roster #1','Note','abcde12345'],
            [2,2,'Roster #2','Note','qwert12345'],
            [3,1,'Roster #3','Note','asdfg12345'],
            [4,2,'Roster #4','Note','poiuy09876']
        ];

        $count = count($rosters);
        foreach ($rosters as $rosterData) {

            $roster = new Roster();

            $roster->organization_id = $rosterData[0];
            $roster->type_id = $rosterData[1];
            $roster->name = $rosterData[2];
            $roster->description = $rosterData[3];
            $roster->magic_code = $rosterData[4];
            $roster->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
            $roster->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
            $roster->deleted_at = null;

            $roster->save();

            $count--;
        }
    }
}