<?php
    
    use App\Product;
    use Illuminate\Database\Seeder;
    
    class ProductsSeeder extends Seeder
    {
        
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            Product::create([
                'id'             => 1,
                'tittle'         => 'The Coffee Park',
                'description'    => 'THE COFFEE PARK (El Parque del Café), as its name suggests, is a theme park with fairly obvious theme. It is in part a condensed tour of Quindío’s renowned coffee horticulture, replete with the detailed history and production process of Colombia’s most famous goods. El Parque pays tribute to the labors of coffee growers through the centuries. The larger area of the park (56 acres) is devoted to over 20 amusement rides, ensconced within 4000 species of plants and trees. Entertainment includes two very dramatic roller coasters as well as tamer water rides and cultural shows. With an average temperature of 21 degrees C, the Coffee Park is comfortable recreating year round, day and evening (bring a sweater), the perfect blend of ancestral tradition  with modernity and innovation.',
                'slug_url'       => 'coffe-park',
                'days'           => 1,
                'price_adults'   => '100',
                'price_children' => '50',
                'local'          => 'en',
                'type'           => 1,
                'discount'       => 0, //porcentaje
            ]);
            
            Product::create([
                'id'             => 2,
                'tittle'         => 'Panaca',
                'description'    => 'PANACA is the first purely zoo-agricultural theme park in the world, the biggest in Latin America and offers a unique experience of interaction with the regional agrarian countryside. Here you will find the most amazing shows, educational theme stations and the biggest collection of domestic zoology in the world. You will enjoy an unforgettable experience of the relations between animals and nature - a whole day of fun and excitement interacting with more than 4,500 animal species in a journey of 2.8 kilometers with side activities such as an ecological tour, farmyard milking practices, horseback riding, Tibetan bridges and canopy flying.',
                'slug_url'       => 'panaca',
                'price_adults'   => '120',
                'price_children' => '60',
                'days'           => 1,
                'local'          => 'en',
                'type'           => 1,
                'discount'       => 0, //porcentaje
            ]);
            
            Product::create([
                'id'             => 3,
                'tittle'         => 'Recuca',
                'description'    => 'RECUCA  You can experience the Coffee Culture in all its glory at RECUCA in the midst of thriving coffee and banana plantations. Recreate the role of the coffee growers past and present by actively participating in the cultivation work. The coffee beans are harvested and processed by hand with the garments currently used by the countrymen of the region. Experts will teach you to how to choose and pick properly ripened beans (granos) and husk, dry, roast and toast the grain, much as coffee ancestors have for hundreds of years (some things just cannot and should not change). Finally, ahhh, to taste the final product. Learn how to discriminate between the various bean qualities, aromas and of course flavors.',
                'slug_url'       => 'recuca',
                'days'           => 1,
                'price_adults'   => '125',
                'price_children' => '62',
                'local'          => 'en',
                'type'           => 1,
                'discount'       => 0, //porcentaje
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
                'local'            => 'en',
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
                'local'            => 'en',
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
                'local'            => 'en',
                'itinerary'        => 'prueba tittle',
                'type'             => 0, //package,activity
            ]);
        }
    }
