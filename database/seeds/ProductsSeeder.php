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
                'itinerary'      => 'Breakfast,Park travel,Lunch,Atraction,Drink coffee,Dinner,',
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
                'itinerary'      => 'Breakfast,Park travel,Lunch,Atraction,Drink coffee,Dinner,',
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
                'itinerary'      => 'Breakfast,Park travel,Lunch,Atraction,Drink coffee,Dinner,',
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
    
            Product::create([
                'id'             => 7,
                'tittle'         => 'Parque del café',
                'description'    => 'THE COFFEE PARK (El Parque del Café), as its name suggests, is a theme park with fairly obvious theme. It is in part a condensed tour of Quindío’s renowned coffee horticulture, replete with the detailed history and production process of Colombia’s most famous goods. El Parque pays tribute to the labors of coffee growers through the centuries. The larger area of the park (56 acres) is devoted to over 20 amusement rides, ensconced within 4000 species of plants and trees. Entertainment includes two very dramatic roller coasters as well as tamer water rides and cultural shows. With an average temperature of 21 degrees C, the Coffee Park is comfortable recreating year round, day and evening (bring a sweater), the perfect blend of ancestral tradition  with modernity and innovation.',
                'itinerary'      => 'Breakfast,Park travel,Lunch,Atraction,Drink coffee,Dinner,',
                'slug_url'       => 'Parque del café',
                'days'           => 1,
                'price_adults'   => '100',
                'price_children' => '50',
                'local'          => 'es',
                'type'           => 1,
                'discount'       => 0, //porcentaje
            ]);
    
            Product::create([
                'id'             => 8,
                'tittle'         => 'Panaca',
                'description'    => 'PANACA is the first purely zoo-agricultural theme park in the world, the biggest in Latin America and offers a unique experience of interaction with the regional agrarian countryside. Here you will find the most amazing shows, educational theme stations and the biggest collection of domestic zoology in the world. You will enjoy an unforgettable experience of the relations between animals and nature - a whole day of fun and excitement interacting with more than 4,500 animal species in a journey of 2.8 kilometers with side activities such as an ecological tour, farmyard milking practices, horseback riding, Tibetan bridges and canopy flying.',
                'itinerary'      => 'Breakfast,Park travel,Lunch,Atraction,Drink coffee,Dinner,',
                'slug_url'       => 'panaca-es',
                'price_adults'   => '120',
                'price_children' => '60',
                'days'           => 1,
                'local'          => 'es',
                'type'           => 1,
                'discount'       => 0, //porcentaje
            ]);
    
            Product::create([
                'id'             => 9,
                'tittle'         => 'Recuca',
                'description'    => 'RECUCA  You can experience the Coffee Culture in all its glory at RECUCA in the midst of thriving coffee and banana plantations. Recreate the role of the coffee growers past and present by actively participating in the cultivation work. The coffee beans are harvested and processed by hand with the garments currently used by the countrymen of the region. Experts will teach you to how to choose and pick properly ripened beans (granos) and husk, dry, roast and toast the grain, much as coffee ancestors have for hundreds of years (some things just cannot and should not change). Finally, ahhh, to taste the final product. Learn how to discriminate between the various bean qualities, aromas and of course flavors.',
                'itinerary'      => 'Breakfast,Park travel,Lunch,Atraction,Drink coffee,Dinner,',
                'slug_url'       => 'recuca-es',
                'days'           => 1,
                'price_adults'   => '125',
                'price_children' => '62',
                'local'          => 'es',
                'type'           => 1,
                'discount'       => 0, //porcentaje
            ]);
    
            Product::create([
                'id'               => 10,
                'tittle'           => 'prueba tittle',
                'slug_url'         => str_slug('prueba title10', '-'),
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
                'id'               => 11,
                'tittle'           => 'prueba tittle',
                'slug_url'         => str_slug('prueba title11', '-'),
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
                'id'               => 12,
                'tittle'           => 'prueba tittle',
                'slug_url'         => str_slug('prueba title12', '-'),
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
                'id'               => 13,
                'tittle'           => 'prueba tittle',
                'slug_url'         => str_slug('prueba title13', '-'),
                'days'             => 9,
                'price_adults'     => 100,
                'price_children'   => 100,
                'discount'         => 10, //porcentaje
                'meta_description' => 'prueba tittle',
                'keywords'         => 'prueba tittle',
                'status'           => 1,
                'local'            => 'en',
                'itinerary'        => 'prueba tittle',
                'type'             => 2, //package,activity
            ]);
            Product::create([
                'id'               => 14,
                'tittle'           => 'prueba tittle',
                'slug_url'         => str_slug('prueba title14', '-'),
                'days'             => 9,
                'price_adults'     => 100,
                'price_children'   => 100,
                'discount'         => 10, //porcentaje
                'meta_description' => 'prueba tittle',
                'keywords'         => 'prueba tittle',
                'status'           => 1,
                'local'            => 'en',
                'itinerary'        => 'prueba tittle',
                'type'             => 2, //package,activity
            ]);
            Product::create([
                'id'               => 15,
                'tittle'           => 'prueba tittle',
                'slug_url'         => str_slug('prueba title15', '-'),
                'days'             => 9,
                'price_adults'     => 100,
                'price_children'   => 100,
                'discount'         => 10, //porcentaje
                'meta_description' => 'prueba tittle',
                'keywords'         => 'prueba tittle',
                'status'           => 1,
                'local'            => 'en',
                'itinerary'        => 'prueba tittle',
                'type'             => 2, //package,activity
            ]);
            Product::create([
                'id'               => 16,
                'tittle'           => 'prueba tittle',
                'slug_url'         => str_slug('prueba title16', '-'),
                'days'             => 9,
                'price_adults'     => 100,
                'price_children'   => 100,
                'discount'         => 10, //porcentaje
                'meta_description' => 'prueba tittle',
                'keywords'         => 'prueba tittle',
                'status'           => 1,
                'local'            => 'es',
                'itinerary'        => 'prueba tittle',
                'type'             => 2, //package,activity
            ]);
            Product::create([
                'id'               => 17,
                'tittle'           => 'prueba tittle',
                'slug_url'         => str_slug('prueba title17', '-'),
                'days'             => 9,
                'price_adults'     => 100,
                'price_children'   => 100,
                'discount'         => 10, //porcentaje
                'meta_description' => 'prueba tittle',
                'keywords'         => 'prueba tittle',
                'status'           => 1,
                'local'            => 'es',
                'itinerary'        => 'prueba tittle',
                'type'             => 2, //package,activity
            ]);
            Product::create([
                'id'               => 18,
                'tittle'           => 'prueba tittle',
                'slug_url'         => str_slug('prueba title18', '-'),
                'days'             => 9,
                'price_adults'     => 100,
                'price_children'   => 100,
                'discount'         => 10, //porcentaje
                'meta_description' => 'prueba tittle',
                'keywords'         => 'prueba tittle',
                'status'           => 1,
                'local'            => 'es',
                'itinerary'        => 'prueba tittle',
                'type'             => 2, //package,activity
            ]);
    
            Product::create([
                'id'             => 19,
                'tittle'         => 'tour around armenia and meal at geranios restaurant',
                'description'    => 'tour around armenia and meal at geranios restaurant.',
                'itinerary'      => 'tour around armenia and meal at geranios restaurant',
                'slug_url'       => str_slug('tour around armenia and meal at geranios restaurant'),
                'days'           => 1,
                'price_adults'   => '125',
                'price_children' => '62',
                'local'          => 'en',
                'type'           => 1, //activity
                'discount'       => 0, //porcentaje
            ]);
    
            Product::create([
                'id'             => 20,
                'tittle'         => 'rancho california enjoy since extrem sports to nature walks or fishing ',
                'description'    => 'rancho california enjoy since extrem sports to nature walks or fishing .',
                'itinerary'      => 'rancho california enjoy since extrem sports to nature walks or fishing ',
                'slug_url'       => str_slug('rancho california enjoy since extrem sports to nature walks or fishing '),
                'days'           => 1,
                'price_adults'   => '125',
                'price_children' => '62',
                'local'          => 'en',
                'type'           => 1, //activity
                'discount'       => 0, //porcentaje
            ]);
    
            Product::create([
                'id'             => 21,
                'tittle'         => 'tour buenavista, pijao -  filandia, enjoy the most beautiful views, crafts and delicious coffee  concorde ',
                'description'    => 'tour buenavista, pijao -  filandia, enjoy the most beautiful views, crafts and delicious coffee  concorde .',
                'itinerary'      => 'tour buenavista, pijao -  filandia, enjoy the most beautiful views, crafts and delicious coffee  concorde ',
                'slug_url'       => str_slug('tour buenavista, pijao -  filandia, enjoy the most beautiful views, crafts and delicious coffee  concorde '),
                'days'           => 1,
                'price_adults'   => '125',
                'price_children' => '62',
                'local'          => 'en',
                'type'           => 1, //activity
                'discount'       => 0, //porcentaje
            ]);
    
            Product::create([
                'id'             => 22,
                'tittle'         => 'botanical garden',
                'description'    => 'botanical garden.',
                'itinerary'      => 'botanical garden',
                'slug_url'       => str_slug('botanical garden'),
                'days'           => 1,
                'price_adults'   => '125',
                'price_children' => '62',
                'local'          => 'en',
                'type'           => 1, //activity
                'discount'       => 0, //porcentaje
            ]);
    
            Product::create([
                'id'             => 23,
                'tittle'         => 'salento, valle del cocora  - crafts town ',
                'description'    => 'salento, valle del cocora  - crafts town .',
                'itinerary'      => 'salento, valle del cocora  - crafts town ',
                'slug_url'       => str_slug('salento, valle del cocora  - crafts town '),
                'days'           => 1,
                'price_adults'   => '125',
                'price_children' => '62',
                'local'          => 'en',
                'type'           => 1, //activity
                'discount'       => 0, //porcentaje
            ]);
    
            Product::create([
                'id'             => 24,
                'tittle'         => 'museo quimbaya ',
                'description'    => 'museo quimbaya .',
                'itinerary'      => 'museo quimbaya ',
                'slug_url'       => str_slug('museo quimbaya '),
                'days'           => 1,
                'price_adults'   => '125',
                'price_children' => '62',
                'local'          => 'en',
                'type'           => 1, //activity
                'discount'       => 0, //porcentaje
            ]);
    
            Product::create([
                'id'             => 25,
                'tittle'         => 'waterfalls in cordoba (picnic lunch  in platano or congo leaves)',
                'description'    => 'waterfalls in cordoba (picnic lunch  in platano or congo leaves).',
                'itinerary'      => 'waterfalls in cordoba (picnic lunch  in platano or congo leaves)',
                'slug_url'       => str_slug('waterfalls in cordoba (picnic lunch  in platano or congo leaves)'),
                'days'           => 1,
                'price_adults'   => '125',
                'price_children' => '62',
                'local'          => 'en',
                'type'           => 1, //activity
                'discount'       => 0, //porcentaje
            ]);
    
            Product::create([
                'id'             => 26,
                'tittle'         => ' spring water san vicente risaralda (lunch included)',
                'description'    => ' spring water san vicente risaralda (lunch included).',
                'itinerary'      => ' spring water san vicente risaralda (lunch included)',
                'slug_url'       => str_slug(' spring water san vicente risaralda (lunch included)'),
                'days'           => 1,
                'price_adults'   => '125',
                'price_children' => '62',
                'local'          => 'en',
                'type'           => 1, //activity
                'discount'       => 0, //porcentaje
            ]);
    
            Product::create([
                'id'             => 27,
                'tittle'         => 'iced mountain of  santa isabel  risaralda (lunch included)',
                'description'    => 'iced mountain of  santa isabel  risaralda (lunch included).',
                'itinerary'      => 'iced mountain of  santa isabel  risaralda (lunch included)',
                'slug_url'       => str_slug('iced mountain of  santa isabel  risaralda (lunch included)'),
                'days'           => 1,
                'price_adults'   => '125',
                'price_children' => '62',
                'local'          => 'en',
                'type'           => 1, //activity
                'discount'       => 0, //porcentaje
            ]);
    
            Product::create([
                'id'             => 28,
                'tittle'         => 'shopping, down town, dinner at solar restaurant',
                'description'    => 'shopping, down town, dinner at solar restaurant.',
                'itinerary'      => 'shopping, down town, dinner at solar restaurant',
                'slug_url'       => str_slug('shopping, down town, dinner at solar restaurant'),
                'days'           => 1,
                'price_adults'   => '125',
                'price_children' => '62',
                'local'          => 'en',
                'type'           => 1, //activity
                'discount'       => 0, //porcentaje
            ]);
    
            Product::create([
                'id'             => 29,
                'tittle'         => 'lagoon  of  otun risaralda   (lunch included)',
                'description'    => 'lagoon  of  otun risaralda   (lunch included).',
                'itinerary'      => 'lagoon  of  otun risaralda   (lunch included)',
                'slug_url'       => str_slug('lagoon  of  otun risaralda   (lunch included)'),
                'days'           => 1,
                'price_adults'   => '125',
                'price_children' => '62',
                'local'          => 'en',
                'type'           => 1, //activity
                'discount'       => 0, //porcentaje
            ]);
    
            Product::create([
                'id'             => 30,
                'tittle'         => 'balsaje across a river called "la vieja"  (lunch included)',
                'description'    => 'balsaje across a river called "la vieja"  (lunch included).',
                'itinerary'      => 'balsaje across a river called "la vieja"  (lunch included)',
                'slug_url'       => str_slug('balsaje across a river called "la vieja"  (lunch included)'),
                'days'           => 1,
                'price_adults'   => '125',
                'price_children' => '62',
                'local'          => 'en',
                'type'           => 1, //activity
                'discount'       => 0, //porcentaje
            ]);
    
            Product::create([
                'id'             => 31,
                'tittle'         => 'nature walk calarca (picnic lunch  in platano or congo leaves)',
                'description'    => 'nature walk calarca (picnic lunch  in platano or congo leaves).',
                'itinerary'      => 'nature walk calarca (picnic lunch  in platano or congo leaves)',
                'slug_url'       => str_slug('nature walk calarca (picnic lunch  in platano or congo leaves)'),
                'days'           => 1,
                'price_adults'   => '125',
                'price_children' => '62',
                'local'          => 'en',
                'type'           => 1, //activity
                'discount'       => 0, //porcentaje
            ]);
    
            Product::create([
                'id'             => 32,
                'tittle'         => 'paintball ',
                'description'    => 'paintball .',
                'itinerary'      => 'paintball ',
                'slug_url'       => str_slug('paintball '),
                'days'           => 1,
                'price_adults'   => '125',
                'price_children' => '62',
                'local'          => 'en',
                'type'           => 1, //activity
                'discount'       => 0, //porcentaje
            ]);
    
            Product::create([
                'id'             => 33,
                'tittle'         => 'canopy ',
                'description'    => 'canopy .',
                'itinerary'      => 'canopy ',
                'slug_url'       => str_slug('canopy '),
                'days'           => 1,
                'price_adults'   => '125',
                'price_children' => '62',
                'local'          => 'en',
                'type'           => 1, //activity
                'discount'       => 0, //porcentaje
            ]);
    
            Product::create([
                'id'             => 34,
                'tittle'         => 'camping monteroca',
                'description'    => 'camping monteroca.',
                'itinerary'      => 'camping monteroca',
                'slug_url'       => str_slug('camping monteroca'),
                'days'           => 1,
                'price_adults'   => '125',
                'price_children' => '62',
                'local'          => 'en',
                'type'           => 1, //activity
                'discount'       => 0, //porcentaje
            ]);
    
            Product::create([
                'id'             => 35,
                'tittle'         => 'ecological park peñas blancas',
                'description'    => 'ecological park peñas blancas.',
                'itinerary'      => 'ecological park peñas blancas',
                'slug_url'       => str_slug('ecological park peñas blancas'),
                'days'           => 1,
                'price_adults'   => '125',
                'price_children' => '62',
                'local'          => 'en',
                'type'           => 1, //activity
                'discount'       => 0, //porcentaje
            ]);
    
            Product::create([
                'id'             => 36,
                'tittle'         => 'calima lake',
                'description'    => 'calima lake.',
                'itinerary'      => 'calima lake',
                'slug_url'       => str_slug('calima lake'),
                'days'           => 1,
                'price_adults'   => '125',
                'price_children' => '62',
                'local'          => 'en',
                'type'           => 1, //activity
                'discount'       => 0, //porcentaje
            ]);
    
            Product::create([
                'id'             => 37,
                'tittle'         => ' jeep panoramico',
                'description'    => ' jeep panoramico.',
                'itinerary'      => ' jeep panoramico',
                'slug_url'       => str_slug(' jeep panoramico'),
                'days'           => 1,
                'price_adults'   => '125',
                'price_children' => '62',
                'local'          => 'en',
                'type'           => 1, //activity
                'discount'       => 0, //porcentaje
            ]);
    
            Product::create([
                'id'             => 38,
                'tittle'         => 'parque de la vida',
                'description'    => 'parque de la vida.',
                'itinerary'      => 'parque de la vida',
                'slug_url'       => str_slug('parque de la vida'),
                'days'           => 1,
                'price_adults'   => '125',
                'price_children' => '62',
                'local'          => 'en',
                'type'           => 1, //activity
                'discount'       => 0, //porcentaje
            ]);
    
            Product::create([
                'id'             => 39,
                'tittle'         => 'party  (be clear it is just dancing and drinks, no drugs, we don´t know how to say that politely) ',
                'description'    => 'party  (be clear it is just dancing and drinks, no drugs, we don´t know how to say that politely) .',
                'itinerary'      => 'party  (be clear it is just dancing and drinks, no drugs, we don´t know how to say that politely) ',
                'slug_url'       => str_slug('party  (be clear it is just dancing and drinks, no drugs, we don´t know how to say that politely) '),
                'days'           => 1,
                'price_adults'   => '125',
                'price_children' => '62',
                'local'          => 'en',
                'type'           => 1, //activity
                'discount'       => 0, //porcentaje
            ]);
    
            Product::create([
                'id'             => 40,
                'tittle'         => 'barcelona  (try forcha, kumis, sirope, pandebonos and traditional food) ',
                'description'    => 'barcelona  (try forcha, kumis, sirope, pandebonos and traditional food) .',
                'itinerary'      => 'barcelona  (try forcha, kumis, sirope, pandebonos and traditional food) ',
                'slug_url'       => str_slug('barcelona  (try forcha, kumis, sirope, pandebonos and traditional food) '),
                'days'           => 1,
                'price_adults'   => '125',
                'price_children' => '62',
                'local'          => 'en',
                'type'           => 1, //activity
                'discount'       => 0, //porcentaje
            ]);
            Product::create([
                'id'             => 41,
                'tittle'         => 'shopping at mercar  (fruits ang vegetables),  ',
                'description'    => 'shopping at mercar  (fruits ang vegetables),  .',
                'itinerary'      => 'shopping at mercar  (fruits ang vegetables),  ',
                'slug_url'       => str_slug('shopping at mercar  (fruits ang vegetables),  '),
                'days'           => 1,
                'price_adults'   => '125',
                'price_children' => '62',
                'local'          => 'en',
                'type'           => 1, //activity
                'discount'       => 0, //porcentaje
            ]);
            Product::create([
                'id'             => 42,
                'tittle'         => 'shopping malls',
                'description'    => 'shopping malls.',
                'itinerary'      => 'shopping malls',
                'slug_url'       => str_slug('shopping malls'),
                'days'           => 1,
                'price_adults'   => '125',
                'price_children' => '62',
                'local'          => 'en',
                'type'           => 1, //activity
                'discount'       => 0, //porcentaje
            ]);
            Product::create([
                'id'             => 43,
                'tittle'         => 'down town ',
                'description'    => 'down town .',
                'itinerary'      => 'down town ',
                'slug_url'       => str_slug('down town '),
                'days'           => 1,
                'price_adults'   => '125',
                'price_children' => '62',
                'local'          => 'en',
                'type'           => 1, //activity
                'discount'       => 0, //porcentaje
            ]);
            Product::create([
                'id'             => 44,
                'tittle'         => 'genova',
                'description'    => 'genova.',
                'itinerary'      => 'genova',
                'slug_url'       => str_slug('genova'),
                'days'           => 1,
                'price_adults'   => '125',
                'price_children' => '62',
                'local'          => 'en',
                'type'           => 1, //activity
                'discount'       => 0, //porcentaje
            ]);
            Product::create([
                'id'             => 45,
                'tittle'         => 'natural park barbas bremen ',
                'description'    => 'natural park barbas bremen .',
                'itinerary'      => 'natural park barbas bremen ',
                'slug_url'       => str_slug('natural park barbas bremen '),
                'days'           => 1,
                'price_adults'   => '125',
                'price_children' => '62',
                'local'          => 'en',
                'type'           => 1, //activity
                'discount'       => 0, //porcentaje
            ]);
            
        }
    }
