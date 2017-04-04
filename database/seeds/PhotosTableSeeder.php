<?php
    
    use App\Photo;
    use Illuminate\Database\Seeder;
    
    class PhotosSeeder extends Seeder
    {
        
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            Photo::create([
                'product_id' => 1,
                'img'        => 'img/activities/parque1.jpg',
                'order'      => 1,
            ]);
            Photo::create([
                'product_id' => 1,
                'img'        => 'img/activities/parque2.jpg',
                'order'      => 2,
            ]);
            Photo::create([
                'product_id' => 2,
                'img'        => 'img/activities/panaca1.jpg',
                'order'      => 1,
            ]);
            Photo::create([
                'product_id' => 2,
                'img'        => 'img/activities/panaca2.jpg',
                'order'      => 2,
            ]);
            Photo::create([
                'product_id' => 3,
                'img'        => 'img/activities/recuca1.jpg',
                'order'      => 1,
            ]);
            Photo::create([
                'product_id' => 3,
                'img'        => 'img/activities/recuca2.jpg',
                'order'      => 2,
            ]);
            Photo::create([
                'product_id' => 4,
                'img'        => 'img/packages/package1.png',
                'order'      => 1,
            ]);
            Photo::create([
                'product_id' => 5,
                'img'        => 'img/packages/package2.png',
                'order'      => 1,
            ]);
            Photo::create([
                'product_id' => 6,
                'img'        => 'img/packages/package3.png',
                'order'      => 1,
            ]);
            Photo::create([
                'product_id' => 4,
                'img'        => 'img/packages/package1.png',
                'order'      => 1,
            ]);
            Photo::create([
                'product_id' => 5,
                'img'        => 'img/packages/package2.png',
                'order'      => 1,
            ]);
            Photo::create([
                'product_id' => 6,
                'img'        => 'img/packages/package3.png',
                'order'      => 1,
            ]);
        }
    }
