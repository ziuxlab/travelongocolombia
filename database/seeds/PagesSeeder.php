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
                'id'         => 1,
                'slug_url'   => '',
                'name'       => 'home',
                'tittle'     => 'home',
                'body'       => '{home}',
                'menu_order' => 1,
                'local'      => 'en',
                'tipo'       => 1,
            ]);
            
            Page::create([
                'id'         => 2,
                'slug_url'   => 'inicio',
                'name'       => 'inicio',
                'tittle'     => 'inicio',
                'body'       => '{home}',
                'menu_order' => 1,
                'local'      => 'es',
                'tipo'       => 1,
            ]);
            
            Page::create([
                'id'         => 3,
                'slug_url'   => 'packages',
                'name'       => 'Packages',
                'tittle'     => 'packages',
                'body'       => '{products}',
                'menu_order' => 3,
                'local'      => 'en',
                'tipo'       => 1,
            ]);
            
            Page::create([
                'id'         => 4,
                'slug_url'   => 'paquetes',
                'name'       => 'Paquetes',
                'tittle'     => 'paquetes',
                'body'       => '{products}',
                'menu_order' => 3,
                'local'      => 'es',
                'tipo'       => 1,
            ]);
            
            Page::create([
                'id'         => 5,
                'slug_url'   => 'activities',
                'name'       => 'Activities',
                'tittle'     => 'activities',
                'body'       => '{activities}',
                'menu_order' => 4,
                'local'      => 'en',
                'tipo'       => 1,
            ]);
            
            Page::create([
                'id'         => 6,
                'slug_url'   => 'actividades',
                'name'       => 'Actividades',
                'tittle'     => 'actividades',
                'body'       => '{activities}',
                'menu_order' => 4,
                'local'      => 'es',
                'tipo'       => 1,
            ]);
            
            Page::create([
                'id'         => 7,
                'slug_url'   => 'hotels',
                'name'       => 'hotels',
                'tittle'     => 'hotels',
                'body'       => '{hotels}',
                'menu_order' => 5,
                'local'      => 'en',
                'tipo'       => 1,
            ]);
            
            Page::create([
                'id'         => 8,
                'slug_url'   => 'hoteles',
                'name'       => 'hoteles',
                'tittle'     => 'hoteles',
                'body'       => '{hotels}',
                'menu_order' => 5,
                'local'      => 'es',
                'tipo'       => 1,
            ]);
            
            Page::create([
                'id'         => 9,
                'slug_url'   => 'about-us',
                'name'       => 'About Us',
                'tittle'     => 'Who we are',
                'body'       => '<div class="bg-white"><div class="content content-boxed"><div class="row"><div class="col-md-8 col-md-offset-2 col-sm-12 text-center"><div class="block"><h2>Who we are</h2><div class="block-content"><p class="text-justify"><strong>Travel<span class="text-primary">on</span>go</strong> Colombia is a privately-owned company based in the city of Armenia, Colombia (Department of Quind&iacute;o). We are dedicated to showing the world this gorgeous mountainous coffee region, with its semi tropical climate, tremendous biodiversity, tourist friendly infrastructure, and welcoming Latin population.</p><p class="text-justify"><strong> Travel<span class="text-primary">on</span>go</strong> Colombia was founded by a Colombian from Armenia Quind&iacute;o, with a Bachelor of Science degree in International Trade and a U.S. citizen physician entrepreneur who visited Armenia Quind&iacute;o in 2016, fell in love with its land and its people and now desires that other world travelers enjoy this country of extraordinary natural and cultural wealth.</p></div></div></div></div></div></div><div class="flex row"><div class="bg-primary col-sm-6 content text-center"><div class="block block-transparent"><h2>Our Mision</h2><div class="block-content"><p class="text-justify">To create a truly unique and carefree vacation experience, especially for foreign travelers, by engaging the scenic beauty, vibrant culture and historical landmarks of this Colombian coffee area.</p></div></div></div><div class="bg-secondary col-sm-6 content text-center text-white"><div class="block block-transparent"><h2>Our Vision</h2><div class="block-content"><p class="text-justify">To become a leading international corporation which provides highest quality tourist services at competitive prices and with a high degree of social and environmental responsibility.</p></div></div></div></div><div class="content-boxed"><div class="col-lg-10 col-md-9 col-sm-7 content"><div class="block block-transparent"><div class="text-center"><h2>Our Creators</h2></div><div class="block-content"><p class="text-justify">Liliana Betancurt Casta&ntilde;eda was born and university educated in Armenia, Colombia and Malaysia. She is fluent in English as well as her native Spanish and has partnered with Dr O&#39;Connell to bring you the best of what central Colombia has to offer. She understands the concept of &quot;single resource tour planning&quot; for visitors to this rapidly modernizing, high mountain region. At the customer&rsquo;s direction, her tours can concentrate on historical or scientific education, recreation, focused instruction or a combination of all.</p><p>Dr O&#39;Connell, a U.S. citizen, retired physician and frequent traveler, has long recognized the shortcomings of travel agencies, especially in Latin America &ndash; many fraught with incomplete services and persistent language barriers.</p><p>Together, <strong> Travel<span class="text-primary">on</span>go</strong> Colombia recognizes the mismatch between what English speakers want and what other agencies typically provide. By simply choosing from a checklist of desired accommodations, activities and an assortment of additional tailored services, <strong> Travel<span class="text-primary">on</span>go</strong> Colombia can make it all happen. Finally, a truly complete vacation coordinator.</p></div></div></div><div class="col-lg-2 col-md-3 col-sm-5 remove-padding text-white-op"><div class="col-sm-12 col-xs-6 fx-img-zoom-in img-container remove-padding"><img alt="" class="img-responsive" src="https://travelongocolombia.com/img/avatars/liliana_photo.jpg" /><div class="img-options-content-about"><div class="bg-black-op content-mini content-mini-full push-20-t"><h5>Liliana Betancurt Casta&ntilde;eda</h5></div></div></div><div class="col-sm-12 col-xs-6 fx-img-zoom-in img-container remove-padding"><img alt="" class="img-responsive" src="https://travelongocolombia.com/img/avatars/mike_photo.jpg" /><div class="img-options-content-about text-left"><div class="bg-black-op content-mini content-mini-full"><h5>Dr O&#39;Connell</h5></div></div></div></div></div>',
                'menu_order' => 6,
                'local'      => 'en',
                'tipo'       => 0,
            ]);
            
            Page::create([
                'id'         => 10,
                'slug_url'   => 'nosotros',
                'name'       => 'Quienes Somos',
                'tittle'     => 'Quienes Somos',
                'body'       => '<div class="bg-white"><div class="content content-boxed"><div class="row"><div class="col-md-8 col-md-offset-2 col-sm-12 text-center"><div class="block"><h2>Quienes Somos</h2><div class="block-content"><p class="text-justify"><strong>Travel<span class="text-primary">on</span>go</strong> Colombia es una empresa privada localizada en la ciudad de Armenia, Colombia (Departamento del Quind&iacute;o), dedicada a mostrarle al mundo esta regi&oacute;n cafetera de hermosas monta&ntilde;as, con su clima semi- tropical, inmensa biodiversidad, infraestructura tur&iacute;stica y una poblaci&oacute;n latina amable.</p><p class="text-justify"><strong> Travel<span class="text-primary">on</span>go</strong> Colombia fue fundada por una colombiana de Armenia Quind&iacute;o, graduada como Profesional en Comercio Internacional y un m&eacute;dico empresario Estadounidense quien en el a&ntilde;o 2016 vino por primera vez a Armenia Quind&iacute;o, se enamor&oacute; de esta tierra y su gente y ahora desea que otros viajeros internacionales disfruten de esta extraordinaria riqueza natural y cultural.</p></div></div></div></div></div></div><div class="flex row"><div class="bg-primary col-sm-6 content text-center"><div class="block block-transparent"><h2>Misi&oacute;n</h2><div class="block-content"><p class="text-justify">Crear experiencias de viajes placenteras y &uacute;nicas, especialmente a viajeros extranjeros, atray&eacute;ndolos a un hermoso escenario, a una cultura vibrante y a sitios emblem&aacute;ticos e hist&oacute;ricos del eje cafetero colombiano.</p></div></div></div><div class="bg-secondary col-sm-6 content text-center text-white"><div class="block block-transparent"><h2>Visi&oacute;n</h2><div class="block-content"><p class="text-justify">Consolidarnos como una empresa con liderazgo internacional la cual provea servicios tur&iacute;sticos con los m&aacute;s altos est&aacute;ndares de calidad a precios competitivos, y con un alto grado de responsabilidad social y ambiental.</p></div></div></div></div><div class="content-boxed"><div class="col-lg-10 col-md-9 col-sm-7 content"><div class="block block-transparent"><div class="text-center"><h2>Our Creators</h2></div><div class="block-content"><p class="text-justify">Liliana Betancurt Casta&ntilde;eda was born and university educated in Armenia, Colombia and Malaysia. She is fluent in English as well as her native Spanish and has partnered with Dr O&#39;Connell to bring you the best of what central Colombia has to offer. She understands the concept of &quot;single resource tour planning&quot; for visitors to this rapidly modernizing, high mountain region. At the customer&rsquo;s direction, her tours can concentrate on historical or scientific education, recreation, focused instruction or a combination of all.</p><p>Dr O&#39;Connell, a U.S. citizen, retired physician and frequent traveler, has long recognized the shortcomings of travel agencies, especially in Latin America &ndash; many fraught with incomplete services and persistent language barriers.</p><p>Together, <strong> Travel<span class="text-primary">on</span>go</strong> Colombia recognizes the mismatch between what English speakers want and what other agencies typically provide. By simply choosing from a checklist of desired accommodations, activities and an assortment of additional tailored services, <strong> Travel<span class="text-primary">on</span>go</strong> Colombia can make it all happen. Finally, a truly complete vacation coordinator.</p></div></div></div><div class="col-lg-2 col-md-3 col-sm-5 remove-padding text-white-op"><div class="col-sm-12 col-xs-6 fx-img-zoom-in img-container remove-padding"><img alt="" class="img-responsive" src="https://travelongocolombia.com/img/avatars/liliana_photo.jpg" /><div class="img-options-content-about"><div class="bg-black-dark-op content-mini content-mini-full push-20-t"><h5>Liliana Betancurt Casta&ntilde;eda</h5></div></div></div><div class="col-sm-12 col-xs-6 fx-img-zoom-in img-container remove-padding"><img alt="" class="img-responsive" src="https://travelongocolombia.com/img/avatars/mike_photo.jpg" /><div class="img-options-content-about text-left"><div class="bg-black-dark-op content-mini content-mini-full"><h5>Dr O&#39;Connell</h5></div></div></div></div></div>',
                'menu_order' => 6,
                'local'      => 'es',
                'tipo'       => 0,
            ]);
            Page::create([
                'id'         => 11,
                'slug_url'   => 'international-opinions',
                'name'       => 'International Opinions',
                'tittle'     => 'International Opinions',
                'body'       => '{components}',
                'menu_order' => 2,
                'local'      => 'en',
                'tipo'       => 1,
            ]);
            
            Page::create([
                'id'         => 12,
                'slug_url'   => 'opinion-internacional',
                'name'       => 'Opinión Internacional',
                'tittle'     => 'Opinión Internacional',
                'body'       => '{components}',
                'menu_order' => 2,
                'local'      => 'es',
                'tipo'       => 1,
            ]);
            
            Page::create([
                'id'         => 13,
                'slug_url'   => 'sustainability-policy',
                'name'       => 'Sustainability Policy',
                'tittle'     => 'Sustainability Policy',
                'body'       => '<div class="content content-boxed content-full"><div class="col-md-8 col-md-offset-2 col-sm-12"><p class="text-justify"><strong> Travel<span class="text-primary">on</span>go</strong>&acute;s priority is to be known in the national and international market for not only its quality service, but also its &lsquo;sustainability model&rsquo; which employs eco-friendly activities and preserves cultural heritage while highlighting autogenous traditions and customs of Quind&iacute;o, Risaralda and Caldas.</p><p class="text-justify"><strong> Travel<span class="text-primary">on</span>go</strong> Colombia encourages our customers and tour team to preserve and conserve natural resources, and to only offer tours that demonstrate a respect for all life and cultures. Compliance with current law, contribution to socioeconomic responsibility by offering employees and contractors fair salaries and payments, and offering employment opportunities first to local citizens are all goals established by <strong> Travel<span class="text-primary">on</span>go</strong> Colombia. In addition we will expose and denounce all illegal activities or behavior contrary to our cultural heritage or fauna and flora species, or that contributes to child exploitation or sexual trafficking.</p><div class="flex row"><div class="col-sm-6"><a class="block block-rounded block-transparent block-link-hover2" data-target="#sexual" data-toggle="modal" href="#"><img alt="" class="img-responsive" src="//travelongocolombia.com/img/sustainability/English-A.jpg" /> </a><div class="push-10-t"><h5><a class="block block-rounded block-transparent block-link-hover2" data-target="#sexual" data-toggle="modal" href="#">No to the sexual explotation of children and adolescents</a></h5></div><a class="block block-rounded block-transparent block-link-hover2" data-target="#sexual" data-toggle="modal" href="#"> </a><div class="fade modal" id="sexual"><div class="modal-dialog modal-dialog-popin"><div class="modal-content"><div class="block block-themed block-transparent remove-margin-b"><div class="bg-primary-dark block-header"><ul class="block-options">	<li>&nbsp;</li></ul><h3 class="block-title">NO TO THE SEXUAL EXPLOITATION OF CHILDREN AND ADOLESCEN</h3></div><div class="block-content"><img alt="" class="img-responsive push-20" src="//travelongocolombia.com/img/sustainability/English-A.jpg" /><p><strong> Travel<span class="text-primary">on</span>go</strong> Colombia complying with law 679 of 2001 and 1336 of 2009 refuse every violent sexual act against boys, girls and teenagers of the country, for that reason we promote in our customers respect for children, refusing all action which affects their well being (child pornography and prostitution, and others) and at the same time we encourage the immediate denouncement of the crimes against our children.</p><p>Call to:<br />Attention Phone number : 018000918080 &ndash;4 opti&oacute;n or Quind&iacute;o (6) 745-79-01<br />Police emergency number 123</p></div></div><div class="modal-footer"><a class="btn btn-minw btn-default" data-dismiss="modal" href="#" type="button">Close</a> <a class="btn btn-minw btn-primary" data-dismiss="modal" href="#" type="button"> Ok </a></div></div></div></div></div><div class="col-sm-6"><a class="block block-transparent block-rounded block-link-hover2" data-target="#culture" data-toggle="modal" href="#"><img alt="" class="img-responsive" src="//travelongocolombia.com/img/sustainability/English-D.jpg" /> </a><div class="push-10-t"><h5><a class="block block-transparent block-rounded block-link-hover2" data-target="#culture" data-toggle="modal" href="#">Respect our cultural goods</a></h5></div><a class="block block-transparent block-rounded block-link-hover2" data-target="#culture" data-toggle="modal" href="#"> </a><div class="fade modal" id="culture"><div class="modal-dialog modal-dialog-popin"><div class="modal-content"><div class="block block-themed block-transparent remove-margin-b"><div class="bg-primary-dark block-header"><ul class="block-options">	<li>&nbsp;</li></ul><h3 class="block-title">CULTURAL GOODS COMMERCIALIZATION AND DAMAGE</h3></div><div class="block-content"><img alt="" class="img-responsive push-20" src="//travelongocolombia.com/img/sustainability/English-D.jpg" /><p><strong> Travel<span class="text-primary">on</span>go</strong> Colombia refuses commercialization and damage to cultural goods, Law 103 of 1991 If you know of any action against colombian cultural and archaeological heritage, please call.</p><p>Call to:<br />National Police: 123</p><h4>Tourist</h4><p>Wherever you leave Colombia carrying any object which is classified as cultural heritage, You must ask for an export authorization to the appropriate institutions:</p><ul>	<li>Written documents: General Archive of the Nation Web: <a href="www.archivogeneral.gov.co">www.archivogeneral.gov.co</a></li>	<li>Every kind of cultural goods: Minister of Culture &ndash; Division of heritage Web <a href="www.mincultura.gov.co">www.mincultura.gov.co</a></li>	<li>Archaeological heritage or replicas: Colombian Institute of Anthropology and History Web: <a href="www.icanh.gov.co">www.icanh.gov.co</a></li></ul></div></div><div class="modal-footer"><a class="btn btn-minw btn-default" data-dismiss="modal" href="#">Close</a> <a class="btn btn-minw btn-primary" data-dismiss="modal" href="#"> Ok </a></div></div></div></div></div><div class="col-sm-6"><a class="block block-transparent  block-rounded block-link-hover2" data-target="#flora" data-toggle="modal" href="#"><img alt="flora and fauna colombia" class="img-responsive" src="//travelongocolombia.com/img/sustainability/English-C.jpg" /> </a><div class="push-10-t"><h5><a class="block block-transparent  block-rounded block-link-hover2" data-target="#flora" data-toggle="modal" href="#">We protect Fauna and Flora</a></h5></div><a class="block block-transparent  block-rounded block-link-hover2" data-target="#flora" data-toggle="modal" href="#"> </a><div class="fade modal" id="flora"><div class="modal-dialog modal-dialog-popin"><div class="modal-content"><div class="block block-themed block-transparent remove-margin-b"><div class="bg-primary-dark block-header"><ul class="block-options">	<li>&nbsp;</li></ul><h3 class="block-title">FAUNA AND FLORA</h3></div><div class="block-content"><img alt="fauna and flora travleongo colombia" class="img-responsive push-20" src="//travelongocolombia.com/img/sustainability/English-C.jpg" /><p><strong> Travel<span class="text-primary">on</span>go</strong> Colombia promotes respect and preservation of colombian flora and fauna (Law 17 of 1981, resolution 1367 de 2000) .</p><p><strong>Denounce: </strong><br />National Police 123<br />C.R.Q phone numbers 018000916625 &ndash; 7460600</p></div></div><div class="modal-footer"><a class="btn btn-minw btn-default" data-dismiss="modal" href="#" type="button">Close</a> <a class="btn btn-minw btn-primary" data-dismiss="modal" href="#" type="button"> Ok </a></div></div></div></div></div><div class="col-sm-6"><a class="block  block-transparent block-rounded block-link-hover2" data-target="#explotation" data-toggle="modal" href="#"><img alt="" class="img-responsive" src="//travelongocolombia.com/img/sustainability/English-b.jpg" /> </a><div class="push-10-t"><h5><a class="block  block-transparent block-rounded block-link-hover2" data-target="#explotation" data-toggle="modal" href="#">We refuses expolitative child labor</a></h5></div><a class="block  block-transparent block-rounded block-link-hover2" data-target="#explotation" data-toggle="modal" href="#"> </a><div class="fade modal" id="explotation"><div class="modal-dialog modal-dialog-popin"><div class="modal-content"><div class="block block-themed block-transparent remove-margin-b"><div class="bg-primary-dark block-header"><ul class="block-options">	<li>&nbsp;</li></ul><h3 class="block-title">CHILD EXPLOITATION</h3></div><div class="block-content"><img alt="" class="img-responsive push-20" src="//travelongocolombia.com/img/sustainability/English-b.jpg" /><p><strong> Travel<span class="text-primary">on</span>go</strong> Colombia refuses and denounces all kind of exploitative child labor for porpose of profit or other benefit.</p><p>Call to:<br />Calling to Bienestar Familiar (ICBF) 01-8000-91-80-80<br />Police emergency number 123</p></div></div><div class="modal-footer"><a class="btn btn-minw btn-default" data-dismiss="modal" href="#" type="button">Close</a> <a class="btn btn-minw btn-primary" data-dismiss="modal" href="#" type="button"> Ok </a></div></div></div></div></div></div></div></div>',
                'menu_order' => 7,
                'local'      => 'en',
                'tipo'       => 0,
            ]);
            
            Page::create([
                'id'         => 14,
                'slug_url'   => 'politica-de-sostenibilidad',
                'name'       => 'Política de Sostenibilidad',
                'tittle'     => 'Política de Sostenibilidad',
                'body'       => '<div class="content content-boxed content-full"><div class="col-md-8 col-md-offset-2 col-sm-12"><p class="text-justify">La prioridad de <strong> Travel<span class="text-primary">on</span>go</strong> es ser reconocido en el mercado nacional e internacional no solo por su servicio de calidad, sino tambi&eacute;n por su &ldquo;modelo de sostenibilidad&rdquo; el cual emplea actividades eco-amigables y preserva el patrimonio cultural mientras resalta las costumbres y tradiciones m&aacute;s aut&oacute;ctonas del Quind&iacute;o, Risaralda y Caldas.</p><p class="text-justify"><strong> Travel<span class="text-primary">on</span>go</strong> Colombia busca promover en sus clientes y en su equipo el respeto por la preservaci&oacute;n y conservaci&oacute;n de los recursos naturales, ofreciendo planes tur&iacute;sticos que demuestran respeto por la vida y las culturas.</p><p class="text-justify">Dar cumplimiento a la normatividad vigente y contribuir con la responsabilidad social empresarial ofreciendo a empleados y proveedores salarios y pagos justos, ofreciendo oportunidades de empleo primero a ciudadanos locales son objetivos trazados por <strong> Travel<span class="text-primary">on</span>go</strong> Colombia. Adem&aacute;s de responsabilizarnos de denunciar todo comportamiento que promueva el tr&aacute;fico il&iacute;cito de bienes culturales y especies de fauna y flora, la explotaci&oacute;n y comercio sexual de menores de edad y toda practica que conlleve a la explotaci&oacute;n infantil.</p><div class="flex row"><div class="col-sm-6"><a class="block block-rounded block-transparent block-link-hover2" data-target="#sexual" data-toggle="modal" href="#"><img alt="" class="img-responsive" src="//travelongocolombia.com/img/sustainability/Español-A.jpg" /> </a><div class="push-10-t"><h5><a class="block block-rounded block-transparent block-link-hover2" data-target="#sexual" data-toggle="modal" href="#">No a la explotaci&oacute;n sexual de ni&ntilde;os, ni&ntilde;as y adolescentes</a></h5></div><a class="block block-rounded block-transparent block-link-hover2" data-target="#sexual" data-toggle="modal" href="#"> </a><div class="fade modal" id="sexual"><div class="modal-dialog modal-dialog-popin"><div class="modal-content"><div class="block block-themed block-transparent remove-margin-b"><div class="bg-primary-dark block-header"><ul class="block-options">	<li>&nbsp;</li></ul><h3 class="block-title">No a la explotaci&oacute;n sexual de ni&ntilde;os, ni&ntilde;as y adolescentes</h3></div><div class="block-content"><img alt="" class="img-responsive push-20" src="//travelongocolombia.com/img/sustainability/Español-A.jpg" /><p><strong> Travel<span class="text-primary">on</span>go</strong> Colombia dando cumplimiento a lo establecido en el art&iacute;culo 17 Ley 679 de 2001 y la Ley 1336 de 2009 rechaza todo acto sexual violento contra los ni&ntilde;os, ni&ntilde;as y adolescentes del pa&iacute;s, por tanto promovemos en nuestros clientes el respeto por los menores de edad, rechazando toda acci&oacute;n que afecte su bienestar (pornograf&iacute;a infantil, prostituci&oacute;n infantil, etc), y a su vez motivamos la denuncia inmediata de los delitos hacia nuestros ni&ntilde;os.</p><p>Llamar a:<br />Linea de atenci&oacute;n&nbsp;: 018000918080 &nbsp;opci&oacute;n 4 &nbsp;&oacute; en el&nbsp;Quind&iacute;o (6) 745-79-01<br />N&uacute;mero de emergencia de la polic&iacute;a&nbsp;123</p></div></div><div class="modal-footer"><a class="btn btn-minw btn-default" data-dismiss="modal" href="#" type="button">Cerrar</a>&nbsp;<a class="btn btn-minw btn-primary" data-dismiss="modal" href="#" type="button">Ok </a></div></div></div></div></div><div class="col-sm-6"><a class="block block-transparent block-rounded block-link-hover2" data-target="#culture" data-toggle="modal" href="#"><img alt="" class="img-responsive" src="//travelongocolombia.com/img/sustainability/Español-D.jpg" /> </a><div class="push-10-t"><h5><a class="block block-transparent block-rounded block-link-hover2" data-target="#culture" data-toggle="modal" href="#">Comercializaci&oacute;n y da&ntilde;o de bienes culturales</a></h5></div><a class="block block-transparent block-rounded block-link-hover2" data-target="#culture" data-toggle="modal" href="#"> </a><div class="fade modal" id="culture"><div class="modal-dialog modal-dialog-popin"><div class="modal-content"><div class="block block-themed block-transparent remove-margin-b"><div class="bg-primary-dark block-header"><ul class="block-options">	<li>&nbsp;</li></ul><h3 class="block-title">COMERCIALIZACI&Oacute;N Y DA&Ntilde;O DE BIENES CULTURALES</h3></div><div class="block-content"><img alt="" class="img-responsive push-20" src="//travelongocolombia.com/img/sustainability/Español-D.jpg" /><p><strong> Travel<span class="text-primary">on</span>go</strong> Colombia rechaza comercializaci&oacute;n y da&ntilde;o de bienes culturales Ley 103 de 1991 Si observa alguna acci&oacute;n que atente contra el patrimonio cultural y arqueol&oacute;gico de nuestro pa&iacute;s.</p><p>Llamar a:<br />Polic&iacute;a Nacional: 123</p><h4>Se&ntilde;or Turista</h4><p>Cada vez que usted se dirija a otro pa&iacute;s con cualquier elemento que este catalogado como patrimonio cultural, usted debe solicitar la autorizaci&oacute;n de exportaci&oacute;n ante las entidades competentes:</p><ul>	<li>Bienes documentales: Archivo general de la naci&oacute;n Web: <a href="www.archivogeneral.gov.co">www.archivogeneral.gov.co</a></li>	<li>Toda clase de bienes culturales: Ministerio de Cultura - Direcci&oacute;n de Patrimonio Web <a href="www.mincultura.gov.co">www.mincultura.gov.co</a></li>	<li>Patrimonio arqueol&oacute;gico o replicas: Instituto Colombiano de Antropolog&iacute;a e Historia Web: <a href="www.icanh.gov.co">www.icanh.gov.co</a></li></ul></div></div><div class="modal-footer"><a class="btn btn-minw btn-default" data-dismiss="modal" href="#">Cerrar</a>&nbsp;<a class="btn btn-minw btn-primary" data-dismiss="modal" href="#">Ok </a></div></div></div></div></div><div class="col-sm-6"><a class="block block-transparent  block-rounded block-link-hover2" data-target="#flora" data-toggle="modal" href="#"><img alt="flora and fauna colombia" class="img-responsive" src="//travelongocolombia.com/img/sustainability/Español-C.jpg" /> </a><div class="push-10-t"><h5><a class="block block-transparent  block-rounded block-link-hover2" data-target="#flora" data-toggle="modal" href="#">Nosotros Protegemos la Fauna y Flora</a></h5></div><a class="block block-transparent  block-rounded block-link-hover2" data-target="#flora" data-toggle="modal" href="#"> </a><div class="fade modal" id="flora"><div class="modal-dialog modal-dialog-popin"><div class="modal-content"><div class="block block-themed block-transparent remove-margin-b"><div class="bg-primary-dark block-header"><ul class="block-options">	<li>&nbsp;</li></ul><h3 class="block-title">FAUNA Y&nbsp;FLORA</h3></div><div class="block-content"><img alt="fauna and flora travleongo colombia" class="img-responsive push-20" src="//travelongocolombia.com/img/sustainability/Español-C.jpg" /><p><strong> Travel<span class="text-primary">on</span>go</strong> Colombia promueve el respeto y la conservaci&oacute;n de la fauna y flora de Colombia (Ley 17 de 1981, resoluci&oacute;n 1367 de 2000).</p><p><strong>Denuncie: </strong><br />Polic&iacute;a Nacional 123<br />C.R.Q Linea Gratuita 018000916625 &ndash; 7460600</p></div></div><div class="modal-footer"><a class="btn btn-minw btn-default" data-dismiss="modal" href="#" type="button">Close</a> <a class="btn btn-minw btn-primary" data-dismiss="modal" href="#" type="button"> Ok </a></div></div></div></div></div><div class="col-sm-6"><a class="block  block-transparent block-rounded block-link-hover2" data-target="#explotation" data-toggle="modal" href="#"><img alt="" class="img-responsive" src="//travelongocolombia.com/img/sustainability/Español-B.jpg" /> </a><div class="push-10-t"><h5><a class="block  block-transparent block-rounded block-link-hover2" data-target="#explotation" data-toggle="modal" href="#">Explotaci&oacute;n Infantil</a></h5></div><a class="block  block-transparent block-rounded block-link-hover2" data-target="#explotation" data-toggle="modal" href="#"> </a><div class="fade modal" id="explotation"><div class="modal-dialog modal-dialog-popin"><div class="modal-content"><div class="block block-themed block-transparent remove-margin-b"><div class="bg-primary-dark block-header"><ul class="block-options">	<li>&nbsp;</li></ul><h3 class="block-title">EXPLOTACI&Oacute;N INFANTIL</h3></div><div class="block-content"><img alt="" class="img-responsive push-20" src="//travelongocolombia.com/img/sustainability/Español-B.jpg" /><p><strong> Travel<span class="text-primary">on</span>go</strong> Colombia rechaza y denuncia todo tipo de trabajo realizado por menores de edad a cambio de dinero u otro beneficio.</p><p>Denuencie:<br />Denuncie en la l&iacute;nea Gratuita Nacional de Bienestar Familiar (ICBF) 01-8000-91-80-80<br />Policia Nacional 123</p></div></div><div class="modal-footer"><a class="btn btn-minw btn-default" data-dismiss="modal" href="#" type="button">Close</a> <a class="btn btn-minw btn-primary" data-dismiss="modal" href="#" type="button"> Ok </a></div></div></div></div></div></div></div></div>',
                'menu_order' => 7,
                'local'      => 'es',
                'tipo'       => 0,
            ]);
            
            Page::create([
                'id'         => 15,
                'slug_url'   => 'join-us',
                'name'       => 'Join Us',
                'tittle'     => 'Join Us',
                'body'       => '{join_us}',
                'menu'       => 0,
                'menu_order' => 1,
                'local'      => 'en',
                'tipo'       => 1,
            ]);
            
            Page::create([
                'id'         => 16,
                'slug_url'   => 'trabaja-con-nosotros',
                'name'       => 'Trabaja Con Nosotros',
                'tittle'     => 'Trabaja Con Nosotros',
                'body'       => '{join_us}',
                'menu'       => 0,
                'menu_order' => 1,
                'local'      => 'es',
                'tipo'       => 1,
            ]);
        }
    }
