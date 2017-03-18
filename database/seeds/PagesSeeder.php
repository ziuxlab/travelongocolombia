<?php
    
    use App\Page;
    use Illuminate\Database\Seeder;
    
    class PagesSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            //
            Page::create([
                'slug_url'   => '',
                'name'       => 'home',
                'tittle'     => 'home',
                'body'       => '{home}',
                'menu_order' => 1,
                'local'      => 'en',
                'tipo'       => 1,
            ]);
        }
    }
