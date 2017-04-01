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
            
            Page::create([
                'slug_url'   => 'inicio',
                'name'       => 'inicio',
                'tittle'     => 'inicio',
                'body'       => '{home}',
                'menu_order' => 1,
                'local'      => 'es',
                'tipo'       => 1,
            ]);
            
            Page::create([
                'slug_url'   => 'about-us',
                'name'       => 'About Us',
                'tittle'     => 'who we are',
                'body'       => '<div class="bg-white"><div class="content content-boxed"><div class="row"><div class="col-md-8 col-md-offset-2 col-sm-12 text-center"><div class="block"><h2>Who we are</h2><div class="block-content"><p><strong>Travelongo</strong> Colombia is a privately-owned company based in the city of Armenia, Colombia (Department of Quind&iacute;o). We are dedicated to showing the world this gorgeous mountainous coffee region, with its semi tropical climate, tremendous biodiversity, tourist friendly infrastructure, and welcoming Latin population.</p><p>Travelongo Colombia was founded by a Colombian from Armenia Quind&iacute;o, with a Bachelor of Science degree in International Trade and a U.S. citizen physician entrepreneur who visited Armenia Quind&iacute;o in 2016, fell in love with its land and its people and now desires that other world travelers enjoy this country of extraordinary natural and cultural wealth.</p></div></div></div></div></div></div><div class="flex row"><div class="bg-primary col-sm-6 content text-center"><div class="block block-transparent"><h2>Our Mision</h2><div class="block-content"><p>To create a truly unique and carefree vacation experience, especially for foreign travelers, by engaging the scenic beauty, vibrant culture and historical landmarks of this Colombian coffee area.</p></div></div></div><div class="bg-secondary col-sm-6 content text-center text-white"><div class="block block-transparent"><h2>Our Vision</h2><div class="block-content"><p>To become a leading international corporation which provides highest quality tourist services at competitive prices and with a high degree of social and environmental responsibility.</p></div></div></div></div><div class="content-boxed"><div class="col-lg-10 col-md-9 col-sm-7 content"><div class="block block-transparent"><div class="text-center"><h2>Our Creators</h2></div><div class="block-content"><p>Liliana Betancurt Casta&ntilde;eda was born and university educated in Armenia, Colombia and Malaysia. She is fluent in English as well as her native Spanish and has partnered with Dr O&#39;Connell to bring you the best of what central Colombia has to offer. She understands the concept of &quot;single resource tour planning&quot; for visitors to this rapidly modernizing, high mountain region. At the customer&rsquo;s direction, her tours can concentrate on historical or scientific education, recreation, focused instruction or a combination of all.</p><p>Dr O&#39;Connell, a U.S. citizen, retired physician and frequent traveler, has long recognized the shortcomings of travel agencies, especially in Latin America &ndash; many fraught with incomplete services and persistent language barriers.</p><p>Together, Travelongo Colombia recognizes the mismatch between what English speakers want and what other agencies typically provide. By simply choosing from a checklist of desired accommodations, activities and an assortment of additional tailored services, Travelongo Colombia can make it all happen. Finally, a truly complete vacation coordinator.</p></div></div></div><div class="col-lg-2 col-md-3 col-sm-5 remove-padding text-white-op"><div class="col-sm-12 col-xs-6 fx-img-zoom-in img-container remove-padding"><img alt="" class="img-responsive" src="https://s3.amazonaws.com/uifaces/faces/twitter/nzcode/128.jpg" /><div class="img-options-content-about"><div class="bg-black-op content-mini content-mini-full push-20-t"><h5>Liliana Betancurt Casta&ntilde;eda</h5></div></div></div><div class="col-sm-12 col-xs-6 fx-img-zoom-in img-container remove-padding"><img alt="" class="img-responsive" src="https://s3.amazonaws.com/uifaces/faces/twitter/jm_denis/128.jpg" /><div class="img-options-content-about text-left"><div class="bg-black-op content-mini content-mini-full"><h5>Dr O&#39;Connell</h5></div></div></div></div></div>',
                'menu_order' => 6,
                'local'      => 'en',
                'tipo'       => 1,
            ]);
        }
    }
