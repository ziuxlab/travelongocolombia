<?php
    
    use App\kindsHotel;
    use Illuminate\Database\Seeder;
    
    class kindhotelSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            //
            kindsHotel::create([
                'id'           => 1,
                'kind_room'    => 'Individual',
                'kind_room_es' => 'Individual'
            ]);
    
            kindsHotel::create([
                'id'           => 2,
                'kind_room'    => 'Multiple',
                'kind_room_es' => 'Multiple'
            ]);
    
            kindsHotel::create([
                'id'           => 3,
                'kind_room'    => 'Double',
                'kind_room_es' => 'Doble'
            ]);
        }
    }
