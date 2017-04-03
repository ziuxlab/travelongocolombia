<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $this->call(UserRolesSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(SettingsTable::class);
        $this->call(PagesSeeder::class);
        $this->call(PackagesSeeder::class);
        $this->call(ActivitiesSeeder::class);
        $this->call(PhotosSeeder::class);
    }
}
