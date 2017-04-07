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
                'id'      => 1,
                'feature' => 'Translator',
                'icon'    => 'fa fa-language',
                'type'    => 0, //0 = package, 1 = activity, 2 = hotel
            ]);
            Feature::create([
                'id'      => 2,
                'feature' => 'Hotel',
                'icon'    => 'fa fa-building-o',
                'type'    => 0, //0 = package, 1 = activity, 2 = hotel
            ]);
            Feature::create([
                'id'      => 3,
                'feature' => 'Adventure',
                'icon'    => 'icon icon-hiking',
                'type'    => 0, //0 = package, 1 = activity, 2 = hotel
            ]);
            Feature::create([
                'id'      => 4,
                'feature' => 'Romantic',
                'icon'    => 'fa fa-heart',
                'type'    => 0, //0 = package, 1 = activity, 2 = hotel
            ]);
            Feature::create([
                'id'      => 5,
                'feature' => 'Family',
                'icon'    => 'fa fa-users',
                'type'    => 0, //0 = package, 1 = activity, 2 = hotel
            ]);
            Feature::create([
                'id'      => 6,
                'feature' => 'Theme Parks',
                'icon'    => 'fa fa-fort-awesome',
                'type'    => 1, //0 = package, 1 = activity, 2 = hotel
            ]);
            Feature::create([
                'id'      => 7,
                'feature' => 'Nature',
                'icon'    => 'fa fa-leaf',
                'type'    => 1, //0 = package, 1 = activity, 2 = hotel
            ]);
            Feature::create([
                'id'      => 8,
                'feature' => 'Culture',
                'icon'    => 'fa fa-book',
                'type'    => 1, //0 = package, 1 = activity, 2 = hotel
            ]);
            Feature::create([
                'id'      => 9,
                'feature' => 'Museums',
                'icon'    => 'icon icon-tourism-icons-monument',
                'type'    => 1, //0 = package, 1 = activity, 2 = hotel
            ]);
            Feature::create([
                'id'      => 10,
                'feature' => 'Shows',
                'icon'    => 'icon icon-tourism-icons-objective',
                'type'    => 1, //0 = package, 1 = activity, 2 = hotel
            ]);
            Feature::create([
                'id'      => 11,
                'feature' => 'Horse Riding',
                'icon'    => 'icon icon-horse-riding',
                'type'    => 1, //0 = package, 1 = activity, 2 = hotel
            ]);
            Feature::create([
                'id'      => 12,
                'feature' => 'Amusement Park',
                'icon'    => 'fa fa-smile-o',
                'type'    => 1, //0 = package, 1 = activity, 2 = hotel
            ]);
            Feature::create([
                'id'      => 13,
                'feature' => 'Extreme Sports',
                'icon'    => 'icon icon-bicycle-rider',
                'type'    => 1, //0 = package, 1 = activity, 2 = hotel
            ]);
            Feature::create([
                'id'      => 14,
                'feature' => 'Coffee Knowledge',
                'icon'    => 'icon icon-tourism-icons-coffee-beans',
                'type'    => 1, //0 = package, 1 = activity, 2 = hotel
            ]);
            Feature::create([
                'id'      => 15,
                'feature' => 'Crops',
                'icon'    => 'icon icon-tourism-icons-forest',
                'type'    => 1, //0 = package, 1 = activity, 2 = hotel
            ]);
            Feature::create([
                'id'      => 16,
                'feature' => 'Fishing',
                'icon'    => 'icon icon-fishing-man',
                'type'    => 1, //0 = package, 1 = activity, 2 = hotel
            ]);
            Feature::create([
                'id'      => 17,
                'feature' => 'Agriculture',
                'icon'    => 'icon icon-tourism-icons-plant',
                'type'    => 1, //0 = package, 1 = activity, 2 = hotel
            ]);
            Feature::create([
                'id'      => 18,
                'feature' => 'Spring Waters',
                'icon'    => 'icon icon-tourism-icons-swimming',
                'type'    => 1, //0 = package, 1 = activity, 2 = hotel
            ]);
            Feature::create([
                'id'      => 19,
                'feature' => 'Relaxing & Beauty',
                'icon'    => 'icon icon-tourism-icons-sun',
                'type'    => 1, //0 = package, 1 = activity, 2 = hotel
            ]);
            
            Feature::create([
                'id'      => 20,
                'feature' => 'Night Life',
                'icon'    => 'icon icon-tourism-icons-coctail',
                'type'    => 1, //0 = package, 1 = activity, 2 = hotel
            ]);
            
            Feature::create([
                'id'      => 21,
                'feature' => 'Parking',
                'icon'    => 'fa fa-car',
                'type'    => 2, //0 = package, 1 = activity, 2 = hotel
            ]);
            Feature::create([
                'id'      => 22,
                'feature' => 'Pool',
                'icon'    => 'icon icon-tourism-icons-swimming',
                'type'    => 2, //0 = package, 1 = activity, 2 = hotel
            ]);
            Feature::create([
                'id'      => 23,
                'feature' => 'TV',
                'icon'    => 'icon icon-tourism-icons-tv',
                'type'    => 2, //0 = package, 1 = activity, 2 = hotel
            ]);
            Feature::create([
                'id'      => 24,
                'feature' => 'Translator',
                'icon'    => 'fa fa-language',
                'type'    => 2, //0 = package, 1 = activity, 2 = hotel
            ]);
            Feature::create([
                'id'      => 25,
                'feature' => 'wifi',
                'icon'    => 'icon icon-tourism-icons-free-wifi',
                'type'    => 2, //0 = package, 1 = activity, 2 = hotel
            ]);
            Feature::create([
                'id'      => 26,
                'feature' => 'Breakfast',
                'icon'    => 'icon icon-tourism-icons-toast',
                'type'    => 2, //0 = package, 1 = activity, 2 = hotel
            ]);
            Feature::create([
                'id'      => 27,
                'feature' => 'Air Conditioner',
                'icon'    => 'fa fa-snowflake-o',
                'type'    => 2, //0 = package, 1 = activity, 2 = hotel
            ]);
            Feature::create([
                'id'      => 28,
                'feature' => 'Minibar',
                'icon'    => 'icon icon-tourism-icons-lemonade',
                'type'    => 2, //0 = package, 1 = activity, 2 = hotel
            ]);
            Feature::create([
                'id'      => 29,
                'feature' => 'SPA',
                'icon'    => 'icon icon icon-tourism-icons-sun',
                'type'    => 2, //0 = package, 1 = activity, 2 = hotel
            ]);
            Feature::create([
                'id'      => 30,
                'feature' => 'Gym',
                'icon'    => 'icon icon-tourism-icons-fitness',
                'type'    => 2, //0 = package, 1 = activity, 2 = hotel
            ]);
            
        }
    }
