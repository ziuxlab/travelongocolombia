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
        $this->call(ProductsSeeder::class);
        $this->call(PhotosSeeder::class);
        $this->call(ComponentsSeeder::class);
        $this->call(FeaturesSeeder::class);
        $this->call(Feature_Products_seeder::class);
        $this->call(citiesSeeder::class);
    }
}
