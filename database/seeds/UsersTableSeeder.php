<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            ['Jerry Derrick','jerry.derrick@gmail.com','testpassword'],
            ['Susan Buck','susanbuck@fas.harvard.edu ','testpassword']
        ];
        $count = count($users);

        foreach ($users as $userData) {
            $user = new User();

            $user->name = $userData[0];
            $user->email = $userData[1];
            $user->password = Hash::make($userData[2]);

            $user->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
            $user->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();

            $user->save();

            $count--;
        }
    }
}
