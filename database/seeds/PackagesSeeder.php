<?php
    
    use App\Packages;
    use Illuminate\Database\Seeder;
    
    class PackagesSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            //
            Packages::create([
                'tittle'           => 'prueba tittle',
                'slug_url'         => str_slug('prueba title', '-'),
                'days'             => 9,
                'price_adults'     => 100,
                'price_children'   => 100,
                'discount'         => 10, //porcentaje
                'meta_description' => 'prueba tittle',
                'keywords'         => 'prueba tittle',
                'status'           => 1,
                'local'            => 'en',
                'itinerary'        => 'prueba tittle',
                'type'             => 0, //package,activity
            ]);
    
            Packages::create([
                'tittle'           => 'prueba tittle',
                'slug_url'         => str_slug('prueba title', '-'),
                'days'             => 9,
                'price_adults'     => 100,
                'price_children'   => 100,
                'discount'         => 10, //porcentaje
                'meta_description' => 'prueba tittle',
                'keywords'         => 'prueba tittle',
                'status'           => 1,
                'local'            => 'en',
                'itinerary'        => 'prueba tittle',
                'type'             => 0, //package,activity
            ]);
    
            Packages::create([
                'tittle'           => 'prueba tittle',
                'slug_url'         => str_slug('prueba title', '-'),
                'days'             => 9,
                'price_adults'     => 100,
                'price_children'   => 100,
                'discount'         => 10, //porcentaje
                'meta_description' => 'prueba tittle',
                'keywords'         => 'prueba tittle',
                'status'           => 1,
                'local'            => 'en',
                'itinerary'        => 'prueba tittle',
                'type'             => 0, //package,activity
            ]);
        }
    }
