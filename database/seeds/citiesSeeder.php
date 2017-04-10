<?php
    
    use App\city;
    use Illuminate\Database\Seeder;
    
    class citiesSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            //
            city::create([
                'id'   => 1,
                'city' => 'Armenia'
            ]);
    
            city::create([
                'id'   => 2,
                'city' => 'Pereira'
            ]);
    
            city::create([
                'id'   => 3,
                'city' => 'Manizales'
            ]);
    
            city::create([
                'id'   => 4,
                'city' => 'Salento'
            ]);
        }
    }
