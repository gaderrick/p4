<?php

use Illuminate\Database\Seeder;
use App\ParticipantType;

class ParticipantTypesTableSeeder extends Seeder
{
    public function run()
    {
        $userTypes = [
            [1,'Athlete'],
            [2,'Parent'],
            [3,'Coach'],
            [4,'Owner']
        ];

        foreach ($userTypes as $userTypeData) {
            $userType = new ParticipantType();
            $userType->timestamps = false;
            $userType->id = $userTypeData[0];
            $userType->description = $userTypeData[1];

            $userType->save();
        }
    }
}
