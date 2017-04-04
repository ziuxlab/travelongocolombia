<?php
    
    use App\Product;
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
            //debe relacionarse las imagenes parque no aparezca un error despues en los paquetes
            
            
            Product::create([
                'id'               => 1,
                'tittle'           => 'prueba tittle',
                'slug_url'         => str_slug('prueba titleee', '-'),
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
    
            Product::create([
                'id'               => 2, 
                'tittle'           => 'prueba tittle',
                'slug_url'         => str_slug('pruebae titlee', '-'),
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
    
            Product::create([
                'id'               => 3,
                'tittle'           => 'prueba tittle',
                'slug_url'         => str_slug('prueba titlee', '-'),
                'days'             => 9,
                'price_adults'     => 100,
                'price_children'   => 100,
                'discount'         => 10, //porcentaje
                'meta_description' => 'prueba tittle3',
                'keywords'         => 'prueba tittle',
                'status'           => 1,
                'local'            => 'en',
                'itinerary'        => 'prueba tittle',
                'type'             => 0, //package,activity
            ]);
            Product::create([
                'id'               => 4,
                'tittle'           => 'prueba tittle',
                'slug_url'         => str_slug('prueba title4', '-'),
                'days'             => 9,
                'price_adults'     => 100,
                'price_children'   => 100,
                'discount'         => 10, //porcentaje
                'meta_description' => 'prueba tittle',
                'keywords'         => 'prueba tittle',
                'status'           => 1,
                'local'            => 'es',
                'itinerary'        => 'prueba tittle',
                'type'             => 0, //package,activity
            ]);
    
            Product::create([
                'id'               => 5,
                'tittle'           => 'prueba tittle',
                'slug_url'         => str_slug('prueba title5', '-'),
                'days'             => 9,
                'price_adults'     => 100,
                'price_children'   => 100,
                'discount'         => 10, //porcentaje
                'meta_description' => 'prueba tittle',
                'keywords'         => 'prueba tittle',
                'status'           => 1,
                'local'            => 'es',
                'itinerary'        => 'prueba tittle',
                'type'             => 0, //package,activity
            ]);
    
            Product::create([
                'id'               => 6,
                'tittle'           => 'prueba tittle',
                'slug_url'         => str_slug('prueba title6', '-'),
                'days'             => 9,
                'price_adults'     => 100,
                'price_children'   => 100,
                'discount'         => 10, //porcentaje
                'meta_description' => 'prueba tittle',
                'keywords'         => 'prueba tittle',
                'status'           => 1,
                'local'            => 'es',
                'itinerary'        => 'prueba tittle',
                'type'             => 0, //package,activity
            ]);
        }
    }
