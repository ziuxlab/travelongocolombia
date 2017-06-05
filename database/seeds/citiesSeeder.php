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
                'city' => 'Quindío',
                'city_code'=>'AXM'
            ]);
    
            city::create([
                'id'   => 2,
                'city' => 'Risaralda',
                'city_code'=>'PEI'
            ]);
    
            city::create([
                'id'   => 3,
                'city' => 'Caldas',
                'city_code'=>'MZL'
            ]);
	        
	        city::create([
		        'id'   => 4,
		        'city' => 'Valle del Cauca',
		        'city_code'=>'CAL'
	        ]);
        }
    }
