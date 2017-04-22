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
                'tittle'           => 'título de la página',
                'meta_description' => 'breve descripción del sitio web',
                'keywords'         => 'palabras clave separadas por ","',
                'email'            => 'info@travelongocolombia.com',
                'phone'            => '+57-314-553-5632',
                'address'          => 'Calle 23 #14-57 piso 3',
            ]);
        }
    }
