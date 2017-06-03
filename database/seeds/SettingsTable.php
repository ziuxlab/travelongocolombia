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
                'phone'            => '+57-312-202-4978',
                'address'          => 'Kilómetro 6 vía al aeropuerto, Condominio Palo de agua # 47.  Armenia Quindío Colombia',
                'instagram'=>'https://www.instagram.com/travelongocolombia/',
                'facebook'=>'https://www.facebook.com/Travel-On-Go-Colombia-177651936092222/',
            ]);
        }
    }
