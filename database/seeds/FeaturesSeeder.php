<?php
    
    use App\Feature;
    use Illuminate\Database\Seeder;
    
    class FeaturesSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            //
            Feature::create([
                'id'         => 1,
                'feature'    => 'Translator',
                'feature_es' => 'Traductor',
                'icon'       => 'fa fa-language',
                'type'       => 0, //0 = package, 1 = activity, 2 = hotel
            ]);
            Feature::create([
                'id'         => 2,
                'feature'    => 'Hotel',
                'feature_es' => 'Hotel',
                'icon'       => 'fa fa-building-o',
                'type'       => 0, //0 = package, 1 = activity, 2 = hotel
            ]);
            Feature::create([
                'id'         => 3,
                'feature'    => 'Adventure',
                'feature_es' => 'Aventura',
                'icon'       => 'icon icon-hiking',
                'type'       => 0, //0 = package, 1 = activity, 2 = hotel
            ]);
            Feature::create([
                'id'         => 4,
                'feature'    => 'Romantic',
                'feature_es' => 'Romantico',
                'icon'       => 'fa fa-heart',
                'type'       => 0, //0 = package, 1 = activity, 2 = hotel
            ]);
            Feature::create([
                'id'         => 5,
                'feature'    => 'Family',
                'feature_es' => 'Familia',
                'icon'       => 'fa fa-users',
                'type'       => 0, //0 = package, 1 = activity, 2 = hotel
            ]);
            Feature::create([
                'id'         => 6,
                'feature'    => 'Theme Parks',
                'feature_es' => 'Parques Temáticos',
                'icon'       => 'fa fa-fort-awesome',
                'type'       => 1, //0 = package, 1 = activity, 2 = hotel
            ]);
            Feature::create([
                'id'         => 7,
                'feature'    => 'Nature',
                'feature_es' => 'Naturaleza',
                'icon'       => 'fa fa-leaf',
                'type'       => 1, //0 = package, 1 = activity, 2 = hotel
            ]);
            Feature::create([
                'id'         => 8,
                'feature'    => 'Culture',
                'feature_es' => 'Cultura',
                'icon'       => 'fa fa-book',
                'type'       => 1, //0 = package, 1 = activity, 2 = hotel
            ]);
            Feature::create([
                'id'         => 9,
                'feature'    => 'Museums',
                'feature_es' => 'Museos',
                'icon'       => 'icon icon-tourism-icons-monument',
                'type'       => 1, //0 = package, 1 = activity, 2 = hotel
            ]);
            Feature::create([
                'id'         => 10,
                'feature'    => 'Shows',
                'feature_es' => 'Shows',
                'icon'       => 'icon icon-tourism-icons-objective',
                'type'       => 1, //0 = package, 1 = activity, 2 = hotel
            ]);
            Feature::create([
                'id'         => 11,
                'feature'    => 'Horse Riding',
                'feature_es' => 'Equitación',
                'icon'       => 'icon icon-horse-riding',
                'type'       => 1, //0 = package, 1 = activity, 2 = hotel
            ]);
            Feature::create([
                'id'         => 12,
                'feature'    => 'Amusement Park',
                'feature_es' => 'Parque de Atracciones ',
                'icon'       => 'fa fa-smile-o',
                'type'       => 1, //0 = package, 1 = activity, 2 = hotel
            ]);
            Feature::create([
                'id'         => 13,
                'feature'    => 'Extreme Sports',
                'feature_es' => 'Deportes Extremos',
                'icon'       => 'icon icon-bicycle-rider',
                'type'       => 1, //0 = package, 1 = activity, 2 = hotel
            ]);
            Feature::create([
                'id'         => 14,
                'feature'    => 'Coffee Knowledge',
                'feature_es' => 'Conocimiento del Café',
                'icon'       => 'icon icon-tourism-icons-coffee-beans',
                'type'       => 1, //0 = package, 1 = activity, 2 = hotel
            ]);
            Feature::create([
                'id'         => 15,
                'feature'    => 'Crops',
                'feature_es' => 'Cultivos',
                'icon'       => 'icon icon-tourism-icons-forest',
                'type'       => 1, //0 = package, 1 = activity, 2 = hotel
            ]);
            Feature::create([
                'id'         => 16,
                'feature'    => 'Fishing',
                'feature_es' => 'Pezca',
                'icon'       => 'icon icon-fishing-man',
                'type'       => 1, //0 = package, 1 = activity, 2 = hotel
            ]);
            Feature::create([
                'id'         => 17,
                'feature'    => 'Agriculture',
                'feature_es' => 'Agricultura',
                'icon'       => 'icon icon-tourism-icons-plant',
                'type'       => 1, //0 = package, 1 = activity, 2 = hotel
            ]);
            Feature::create([
                'id'         => 18,
                'feature'    => 'Spring Waters',
                'feature_es' => 'Aguas Termales',
                'icon'       => 'icon icon-tourism-icons-swimming',
                'type'       => 1, //0 = package, 1 = activity, 2 = hotel
            ]);
            Feature::create([
                'id'         => 19,
                'feature'    => 'Relaxing & Beauty',
                'feature_es' => 'Belleza y Relajación',
                'icon'       => 'icon icon-tourism-icons-sun',
                'type'       => 1, //0 = package, 1 = activity, 2 = hotel
            ]);
            
            Feature::create([
                'id'         => 20,
                'feature'    => 'Night Life',
                'feature_es' => 'Vida nocturna',
                'icon'       => 'icon icon-tourism-icons-coctail',
                'type'       => 1, //0 = package, 1 = activity, 2 = hotel
            ]);
            
            Feature::create([
                'id'            => 21,
                'feature'       => 'Parking',
                'feature_es'    => 'Parqueadero',
                'in_categories' => 0,
                'icon'          => 'fa fa-car',
                'type'          => 2, //0 = package, 1 = activity, 2 = hotel
            ]);
            Feature::create([
                'id'            => 22,
                'feature'       => 'Pool',
                'feature_es'    => 'Piscina',
                'in_categories' => 0,
                'icon'          => 'icon icon-tourism-icons-swimming',
                'type'          => 2, //0 = package, 1 = activity, 2 = hotel
            ]);
            Feature::create([
                'id'            => 23,
                'feature'       => 'TV',
                'feature_es'    => 'TV',
                'in_categories' => 0,
                'icon'          => 'icon icon-tourism-icons-tv',
                'type'          => 2, //0 = package, 1 = activity, 2 = hotel
            ]);
            Feature::create([
                'id'            => 24,
                'feature'       => 'Translator',
                'feature_es'    => 'Traductor',
                'in_categories' => 0,
                'icon'          => 'fa fa-language',
                'type'          => 2, //0 = package, 1 = activity, 2 = hotel
            ]);
            Feature::create([
                'id'            => 25,
                'feature'       => 'wifi',
                'feature_es'    => 'Wifi',
                'in_categories' => 0,
                'icon'          => 'icon icon-tourism-icons-free-wifi',
                'type'          => 2, //0 = package, 1 = activity, 2 = hotel
            ]);
            Feature::create([
                'id'            => 26,
                'feature'       => 'Breakfast',
                'feature_es'    => 'Desayuno',
                'in_categories' => 0,
                'icon'          => 'icon icon-tourism-icons-toast',
                'type'          => 2, //0 = package, 1 = activity, 2 = hotel
            ]);
            Feature::create([
                'id'            => 27,
                'feature'       => 'Air Conditioner',
                'feature_es'    => 'Aire Acondicionado',
                'in_categories' => 0,
                'icon'          => 'fa fa-snowflake-o',
                'type'          => 2, //0 = package, 1 = activity, 2 = hotel
            ]);
            Feature::create([
                'id'            => 28,
                'feature'       => 'Minibar',
                'feature_es'    => 'Minibar',
                'in_categories' => 0,
                'icon'          => 'icon icon-tourism-icons-lemonade',
                'type'          => 2, //0 = package, 1 = activity, 2 = hotel
            ]);
            Feature::create([
                'id'            => 29,
                'feature'       => 'SPA',
                'feature_es'    => 'SPA',
                'in_categories' => 0,
                'icon'          => 'icon icon icon-tourism-icons-sun',
                'type'          => 2, //0 = package, 1 = activity, 2 = hotel
            ]);
            Feature::create([
                'id'            => 30,
                'feature'       => 'Gym',
                'feature_es'    => 'Gimnasio',
                'in_categories' => 0,
                'icon'          => 'icon icon-tourism-icons-fitness',
                'type'          => 2, //0 = package, 1 = activity, 2 = hotel
            ]);
            Feature::create([
                'id'            => 31,
                'feature'       => 'Countryside Hotel',
                'feature_es'    => 'Hotel Campestre',
                'in_categories' => 1,
                'icon'          => 'icon icon-tourism-icons-mountain-track',
                'type'          => 2, //0 = package, 1 = activity, 2 = hotel
            ]);
            Feature::create([
                'id'            => 32,
                'feature'       => 'Cityside Hotel',
                'feature_es'    => 'Hotel Ciudad',
                'in_categories' => 1,
                'icon'          => 'icon icon-tourism-icons-monument',
                'type'          => 2, //0 = package, 1 = activity, 2 = hotel
            ]);
            Feature::create([
                'id'            => 33,
                'feature'       => 'Farm Hotel',
                'feature_es'    => 'Finca Hotel',
                'in_categories' => 1,
                'icon'          => 'icon icon-tourism-icons-house',
                'type'          => 2, //0 = package, 1 = activity, 2 = hotel
            ]);
            Feature::create([
                'id'            => 34,
                'feature'       => 'Resort Hotel',
                'feature_es'    => 'Hotel de Lujo',
                'in_categories' => 1,
                'icon'          => 'icon icon-tourism-icons-beach-house',
                'type'          => 2, //0 = package, 1 = activity, 2 = hotel
            ]);
            Feature::create([
                'id'            => 35,
                'feature'       => 'Furnished Apartment',
                'feature_es'    => 'Apartamento Amoblado',
                'in_categories' => 1,
                'icon'          => 'icon icon-tourism-icons-monument-2',
                'type'          => 2, //0 = package, 1 = activity, 2 = hotel
            ]);

            Feature::create([
                'id'            => 36,
                'feature'       => 'Restaurant',
                'feature_es'    => 'restaurante',
                'in_categories' => 0,
                'icon'          => 'icon icon-tourism-icons-toast',
                'type'          => 2, //0 = package, 1 = activity, 2 = hotel
            ]);
        }
    }
