<?php
    
    use App\Config;
    use Illuminate\Database\Seeder;
    
    class SettingsTable extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            //
            Config::create([
                'tittle'           => 'travelongo | ONE STOP PLANNING FOR VACATION TO COLOMBIA ALL INCLUSIVE',
                'meta_description' => 'ONE STOP PLANNING FOR VACATION TO COLOMBIA, Discover a rich Latin Culture with English language guidance throughout your stay, all inclusive.',
                'keywords'         => 'travel to colombia, hotels armenia quindio, activities in quindio, all inclusive in colombia',
                'email'            => 'info@travelongocolombia.com',
                'phone'            => '+57-314-553-5632',
                'address'          => 'Calle 23 #14-57 piso 3',
            ]);
        }
    }
