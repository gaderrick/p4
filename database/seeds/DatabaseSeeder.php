<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(StatesTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(OrganizationTypesTableSeeder::class);
        $this->call(OrganizationsTableSeeder::class);
        $this->call(ParticipantTypesTableSeeder::class);
        $this->call(ParticipantsTableSeeder::class);
    }
}