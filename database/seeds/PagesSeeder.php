<?php
	
	use App\Page;
	use Illuminate\Database\Seeder;
	
	class PagesSeeder extends Seeder {
		/**
		 * Run the database seeds.
		 *
		 * @return void
		 */
		public function run() {
			//
			Page::create( [
				'id'               => 1,
				'slug_url'         => '',
				'name'             => 'home',
				'tittle'           => 'Travel to colombia all inclusive',
				'body'             => '{home}',
				'menu_order'       => 1,
				'local'            => 'en',
				'tipo'             => 1,
				'meta_description' => 'ONE STOP PLANNING FOR VACATION TO COLOMBIA, Discover a rich Latin Culture with English language guidance throughout your stay, all inclusive.',
				'keywords'         => 'travel to colombia, hotels armenia quindio, activities in quindio, all inclusive in colombia',
			
			] );
			
			Page::create( [
				'id'               => 2,
				'meta_description' => 'ONE STOP PLANNING FOR VACATION TO COLOMBIA, Discover a rich Latin Culture with English language guidance throughout your stay, all inclusive.',
				'keywords'         => 'travel to colombia, hotels armenia quindio, activities in quindio, all inclusive in colombia',
				'slug_url'         => 'inicio',
				'name'             => 'inicio',
				'tittle'           => 'Viaja a colombia todo incluido',
				'body'             => '{home}',
				'menu_order'       => 1,
				'local'            => 'es',
				'tipo'             => 1,
			] );
			
			Page::create( [
				'id'         => 3,
				'slug_url'   => 'packages',
				'name'       => 'Packages',
				'tittle'     => 'packages',
				'body'       => '{products}',
				'menu_order' => 3,
				'local'      => 'en',
				'tipo'       => 1,
				'img'        => 'img/PackagesC.jpg',
			] );
			
			Page::create( [
				'id'         => 4,
				'slug_url'   => 'paquetes',
				'name'       => 'Paquetes',
				'tittle'     => 'paquetes',
				'body'       => '{products}',
				'menu_order' => 3,
				'local'      => 'es',
				'tipo'       => 1,
				'img'        => 'img/PackagesC.jpg',
			] );
			
			Page::create( [
				'id'         => 5,
				'slug_url'   => 'activities',
				'name'       => 'Activities',
				'tittle'     => 'activities',
				'body'       => '{activities}',
				'menu_order' => 4,
				'local'      => 'en',
				'tipo'       => 1,
				'img'        => 'img/ActivitiesC.jpg',
			] );
			
			Page::create( [
				'id'         => 6,
				'slug_url'   => 'actividades',
				'name'       => 'Actividades',
				'tittle'     => 'actividades',
				'body'       => '{activities}',
				'menu_order' => 4,
				'local'      => 'es',
				'tipo'       => 1,
				'img'        => 'img/ActivitiesC.jpg',
			] );
			
			Page::create( [
				'id'         => 7,
				'slug_url'   => 'hotels',
				'name'       => 'hotels',
				'tittle'     => 'hotels',
				'body'       => '{hotels}',
				'menu_order' => 5,
				'local'      => 'en',
				'tipo'       => 1,
				'img'        => 'img/HotelsC.jpg',
			] );
			
			Page::create( [
				'id'         => 8,
				'slug_url'   => 'hoteles',
				'name'       => 'hoteles',
				'tittle'     => 'hoteles',
				'body'       => '{hotels}',
				'menu_order' => 5,
				'local'      => 'es',
				'tipo'       => 1,
				'img'        => 'img/HotelsC.jpg',
			] );
			
			Page::create( [
				'id'         => 9,
				'slug_url'   => 'about-us',
				'name'       => 'About Us',
				'tittle'     => 'Who we are',
				'body'       => '<div class="bg-white"><div class="content content-boxed"><div class="row"><div class="col-md-8 col-md-offset-2 col-sm-12 text-center"><div class="block"><div class="block-content"><p class="text-justify"><strong>Travel<span class="text-primary">on</span>go</strong> Colombia is a privately-owned company based in the city of Armenia, Colombia (Department of Quind&iacute;o). We are dedicated to showing the world this gorgeous mountainous coffee region, with its semi tropical climate, tremendous biodiversity, tourist friendly infrastructure, and welcoming Latin population.</p><p class="text-justify"><strong> Travel<span class="text-primary">on</span>go</strong> Colombia was founded by a Colombian from Armenia Quind&iacute;o, with a Bachelor of Science degree in International Trade and a U.S. citizen physician entrepreneur who visited Armenia Quind&iacute;o in 2016, fell in love with its land and its people and now desires that other world travelers enjoy this country of extraordinary natural and cultural wealth.</p></div></div></div></div></div></div><div class="flex row"><div class="bg-primary col-sm-6 content text-center"><div class="block block-transparent"><h2>Our Mision</h2><div class="block-content"><p class="text-justify">To create a truly unique and carefree vacation experience, especially for foreign travelers, by engaging the scenic beauty, vibrant culture and historical landmarks of this Colombian coffee area.</p></div></div></div><div class="bg-secondary col-sm-6 content text-center text-white"><div class="block block-transparent"><h2>Our Vision</h2><div class="block-content"><p class="text-justify">To become a leading international corporation which provides highest quality tourist services at competitive prices and with a high degree of social and environmental responsibility.</p></div></div></div></div><div class="content-boxed flex"><div class="col-lg-10 col-md-9 col-sm-7 content flex-center"><div class="block block-transparent"><div class="text-center"><h2>Our Creators</h2></div><div class="block-content"><p class="text-justify">Liliana Betancurt Casta&ntilde;eda was born and university educated in Armenia, Colombia and Malaysia. She is fluent in English as well as her native Spanish and has partnered with Dr O&#39;Connell to bring you the best of what central Colombia has to offer. She understands the concept of &quot;single resource tour planning&quot; for visitors to this rapidly modernizing, high mountain region. At the customer&rsquo;s direction, her tours can concentrate on historical or scientific education, recreation, focused instruction or a combination of all.</p><p>Dr O&#39;Connell, a U.S. citizen, retired physician and frequent traveler, has long recognized the shortcomings of travel agencies, especially in Latin America &ndash; many fraught with incomplete services and persistent language barriers.</p><p>Together, <strong> Travel<span class="text-primary">on</span>go</strong> Colombia recognizes the mismatch between what English speakers want and what other agencies typically provide. By simply choosing from a checklist of desired accommodations, activities and an assortment of additional tailored services, <strong> Travel<span class="text-primary">on</span>go</strong> Colombia can make it all happen. Finally, a truly complete vacation coordinator.</p></div></div></div><div class="col-lg-2 col-md-3 col-sm-5 remove-padding text-white-op"><div class="col-sm-12 col-xs-6 fx-img-zoom-in img-container remove-padding"><img alt="liliana travelongo" class="img-responsive" src="https://travelongocolombia.com/img/avatars/liliana_photo.jpg" /><div class="img-options-content-about"><div class="bg-black-op content-mini content-mini-full push-20-t"><h5>Liliana Betancurt Casta&ntilde;eda</h5></div></div></div><div class="col-sm-12 col-xs-6 fx-img-zoom-in img-container remove-padding"><img alt="mike travelongo" class="img-responsive" src="https://travelongocolombia.com/img/avatars/mike_photo.jpg" /><div class="img-options-content-about text-left"><div class="bg-black-op content-mini content-mini-full"><h5>Dr O&#39;Connell</h5></div></div></div></div></div>',
				'menu_order' => 6,
				'local'      => 'en',
				'tipo'       => 0,
				'img'        => 'img/Who-We-AreC.jpg',
			] );
			
			Page::create( [
				'id'         => 10,
				'slug_url'   => 'nosotros',
				'name'       => 'Quiénes Somos',
				'tittle'     => 'Quiénes Somos',
				'body'       => '<div class="bg-white">
<div class="content content-boxed"><div class="row"><div class="col-md-8 col-md-offset-2 col-sm-12 text-center"><div class="block"><div class="block-content"><p class="text-justify"><strong>Travel<span class="text-primary">on</span>go</strong> Colombia es una empresa privada localizada en la ciudad de Armenia, Colombia (Departamento del Quind&iacute;o), dedicada a mostrarle al mundo esta regi&oacute;n cafetera de hermosas monta&ntilde;as, con su clima semi- tropical, inmensa biodiversidad, infraestructura tur&iacute;stica y una poblaci&oacute;n latina amable.</p><p class="text-justify"><strong> Travel<span class="text-primary">on</span>go</strong> Colombia fue fundada por una colombiana de Armenia Quind&iacute;o, graduada como Profesional en Comercio Internacional y un m&eacute;dico empresario Estadounidense quien en el a&ntilde;o 2016 vino por primera vez a Armenia Quind&iacute;o, se enamor&oacute; de esta tierra y su gente y ahora desea que otros viajeros internacionales disfruten de esta extraordinaria riqueza natural y cultural.</p></div></div></div></div></div></div><div class="flex row"><div class="bg-primary col-sm-6 content text-center"><div class="block block-transparent"><h2>Misi&oacute;n</h2><div class="block-content"><p class="text-justify">Crear experiencias de viajes placenteras y &uacute;nicas, especialmente a viajeros extranjeros, atray&eacute;ndolos a un hermoso escenario, a una cultura vibrante y a sitios emblem&aacute;ticos e hist&oacute;ricos del eje cafetero colombiano.</p></div></div></div><div class="bg-secondary col-sm-6 content text-center text-white"><div class="block block-transparent"><h2>Visi&oacute;n</h2><div class="block-content"><p class="text-justify">Consolidarnos como una empresa con liderazgo internacional la cual provea servicios tur&iacute;sticos con los m&aacute;s altos est&aacute;ndares de calidad a precios competitivos, y con un alto grado de responsabilidad social y ambiental.</p></div></div></div></div><div class="content-boxed flex"><div class="col-lg-10 col-md-9 col-sm-7 content flex-center"><div class="block block-transparent"><div class="text-center"><h2>Los Creadores</h2></div><div class="block-content"><p class="text-justify">Liliana Betancurt Castañeda nació y fue educada en Armenia Colombia y Malasia, fluída en Inglés y con su Español nativo, se asoció con el Doctor O ́Connell para traer lo mejor que el centro de Colombia tiene para ofrecer. Ella entiende el concepto de 
“Planear viajes todo incluído”para visitantes a este región montañosa ligeramente modernizad. Los tours pueden ser dirigidos a educación histórica o científica, recreación, clases dirigidas o una combinación de todo.</p><p>Dr O ́Connell, Estadounidense, medico retirado y viajero frecuente, ha identificado las ausencias de las agencias de viajes, especialmente en Latinoamérica muchas incertidumbres, con servicios incompletos y la persistente barrera del lenguaje.</p><p>Juntos, <strong> Travel<span class="text-primary">on</span>go</strong> Juntos, Travelongo Colombia reconoce el desbalance entre lo que los angloparlantes quieren y las que otras agencias usualmente les ofrecen.  
A través de una lista de chequeo, con hospedajes deseados, diferentes actividades, y una gama de servicios a la medida,  <strong> Travel<span class="text-primary">on</span>go</strong> Colombia puede hacer todo posible.  Finalmente, somos un verdadero y completo coordinador de vacaciones.</p></div></div></div><div class="col-lg-2 col-md-3 col-sm-5 remove-padding text-white-op"><div class="col-sm-12 col-xs-6 fx-img-zoom-in img-container remove-padding"><img alt="travelogo team" class="img-responsive" src="https://travelongocolombia.com/img/avatars/liliana_photo.jpg" /><div class="img-options-content-about"><div class="bg-black-dark-op content-mini content-mini-full push-20-t"><h5>Liliana Betancurt Casta&ntilde;eda</h5></div></div></div><div class="col-sm-12 col-xs-6 fx-img-zoom-in img-container remove-padding"><img alt="travelongo colombia team" class="img-responsive" src="https://travelongocolombia.com/img/avatars/mike_photo.jpg" /><div class="img-options-content-about text-left"><div class="bg-black-dark-op content-mini content-mini-full"><h5>Dr O&#39;Connell</h5></div></div></div></div></div>',
				'menu_order' => 6,
				'local'      => 'es',
				'tipo'       => 0,
				'img'        => 'img/Who-We-AreC.jpg',
			] );
			Page::create( [
				'id'         => 11,
				'slug_url'   => 'international-opinions',
				'name'       => 'International Opinions',
				'tittle'     => 'International Opinions',
				'body'       => '{components}',
				'menu_order' => 2,
				'local'      => 'en',
				'tipo'       => 1,
			] );
			
			Page::create( [
				'id'         => 12,
				'slug_url'   => 'opinion-internacional',
				'name'       => 'Opinión Internacional',
				'tittle'     => 'Opinión Internacional',
				'body'       => '{components}',
				'menu_order' => 2,
				'local'      => 'es',
				'tipo'       => 1,
			] );
			
			Page::create( [
				'id'         => 13,
				'slug_url'   => 'sustainability-policy',
				'name'       => 'Sustainability Policy',
				'tittle'     => 'Sustainability Policy',
				'body'       => '<div class="content content-boxed content-full"><div class="col-md-8 col-md-offset-2 col-sm-12"><p class="text-justify"><strong> Travel<span class="text-primary">on</span>go</strong>&acute;s priority is to be known in the national and international market for not only its quality service, but also its &lsquo;sustainability model&rsquo; which employs eco-friendly activities and preserves cultural heritage while highlighting autogenous traditions and customs of Quind&iacute;o, Risaralda and Caldas.</p><p class="text-justify"><strong> Travel<span class="text-primary">on</span>go</strong> Colombia encourages our customers and tour team to preserve and conserve natural resources, and to only offer tours that demonstrate a respect for all life and cultures. Compliance with current law, contribution to socioeconomic responsibility by offering employees and contractors fair salaries and payments, and offering employment opportunities first to local citizens are all goals established by <strong> Travel<span class="text-primary">on</span>go</strong> Colombia. In addition we will expose and denounce all illegal activities or behavior contrary to our cultural heritage or fauna and flora species, or that contributes to child exploitation or sexual trafficking.</p><div class="flex row"><div class="col-sm-6"><a class="block block-rounded block-transparent block-link-hover2" data-target="#sexual" data-toggle="modal" href="#"><img alt="travelongo sustainability policy" class="img-responsive" src="//travelongocolombia.com/img/sustainability/English-A.jpg" /> </a><div class="push-10-t"><h5><a class="block block-rounded block-transparent block-link-hover2" data-target="#sexual" data-toggle="modal" href="#">No to the sexual explotation of children and adolescents</a></h5></div><a class="block block-rounded block-transparent block-link-hover2" data-target="#sexual" data-toggle="modal" href="#"> </a><div class="fade modal" id="sexual"><div class="modal-dialog modal-dialog-popin"><div class="modal-content"><div class="block block-themed block-transparent remove-margin-b"><div class="bg-primary-dark block-header"><ul class="block-options">	<li>
<button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
</li></ul><h3 class="block-title">NO TO THE SEXUAL EXPLOITATION OF CHILDREN AND ADOLESCEN</h3></div><div class="block-content"><img alt="travelongo sustainability" class="img-responsive push-20" src="//travelongocolombia.com/img/sustainability/English-A.jpg" /><p><strong> Travel<span class="text-primary">on</span>go</strong> Colombia complying with law 679 of 2001 and 1336 of 2009 refuse every violent sexual act against boys, girls and teenagers of the country, for that reason we promote in our customers respect for children, refusing all action which affects their well being (child pornography and prostitution, and others) and at the same time we encourage the immediate denouncement of the crimes against our children.</p><p>Call to:<br />Attention Phone number : 018000918080 &ndash;4 opti&oacute;n or Quind&iacute;o (6) 745-79-01<br />Police emergency number 123</p></div></div><div class="modal-footer"><a class="btn btn-minw btn-primary" data-dismiss="modal" href="#" type="button"> Ok </a></div></div></div></div></div><div class="col-sm-6"><a class="block block-transparent block-rounded block-link-hover2" data-target="#culture" data-toggle="modal" href="#"><img alt="travelongo policy" class="img-responsive" src="//travelongocolombia.com/img/sustainability/English-D.jpg" /> </a><div class="push-10-t"><h5><a class="block block-transparent block-rounded block-link-hover2" data-target="#culture" data-toggle="modal" href="#">Respect our cultural goods</a></h5></div><a class="block block-transparent block-rounded block-link-hover2" data-target="#culture" data-toggle="modal" href="#"> </a><div class="fade modal" id="culture"><div class="modal-dialog modal-dialog-popin"><div class="modal-content"><div class="block block-themed block-transparent remove-margin-b"><div class="bg-primary-dark block-header"><ul class="block-options">	<li>
<button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
</li></ul><h3 class="block-title">CULTURAL GOODS COMMERCIALIZATION AND DAMAGE</h3></div><div class="block-content"><img alt="CULTURAL GOODS COMMERCIALIZATION AND DAMAGE" class="img-responsive push-20" src="//travelongocolombia.com/img/sustainability/English-D.jpg" /><p><strong> Travel<span class="text-primary">on</span>go</strong> Colombia refuses commercialization and damage to cultural goods, Law 103 of 1991 If you know of any action against colombian cultural and archaeological heritage, please call.</p><p>Call to:<br />National Police: 123</p><h4>Tourist</h4><p>Wherever you leave Colombia carrying any object which is classified as cultural heritage, You must ask for an export authorization to the appropriate institutions:</p><ul>	<li>Written documents: General Archive of the Nation Web: <a href="http://www.archivogeneral.gov.co">www.archivogeneral.gov.co</a></li>	<li>Every kind of cultural goods: Minister of Culture &ndash; Division of heritage Web <a href="http://www.mincultura.gov.co">www.mincultura.gov.co</a></li>	<li>Archaeological heritage or replicas: Colombian Institute of Anthropology and History Web: <a href="http://www.icanh.gov.co">www.icanh.gov.co</a></li></ul></div></div><div class="modal-footer"> <a class="btn btn-minw btn-primary" data-dismiss="modal" href="#"> Ok </a></div></div></div></div></div><div class="col-sm-6"><a class="block block-transparent  block-rounded block-link-hover2" data-target="#flora" data-toggle="modal" href="#"><img alt="flora and fauna colombia" class="img-responsive" src="//travelongocolombia.com/img/sustainability/English-C.jpg" /> </a><div class="push-10-t"><h5><a class="block block-transparent  block-rounded block-link-hover2" data-target="#flora" data-toggle="modal" href="#">We protect Fauna and Flora</a></h5></div><a class="block block-transparent  block-rounded block-link-hover2" data-target="#flora" data-toggle="modal" href="#"> </a><div class="fade modal" id="flora"><div class="modal-dialog modal-dialog-popin"><div class="modal-content"><div class="block block-themed block-transparent remove-margin-b"><div class="bg-primary-dark block-header"><ul class="block-options">	<li>
<button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
</li></ul><h3 class="block-title">FAUNA AND FLORA</h3></div><div class="block-content"><img alt="fauna and flora travleongo colombia" class="img-responsive push-20" src="//travelongocolombia.com/img/sustainability/English-C.jpg" /><p><strong> Travel<span class="text-primary">on</span>go</strong> Colombia promotes respect and preservation of colombian flora and fauna (Law 17 of 1981, resolution 1367 de 2000) .</p><p><strong>Denounce: </strong><br />National Police 123<br />C.R.Q phone numbers 018000916625 &ndash; 7460600</p></div></div><div class="modal-footer"><a class="btn btn-minw btn-primary" data-dismiss="modal" href="#" type="button"> Ok </a></div></div></div></div></div><div class="col-sm-6"><a class="block  block-transparent block-rounded block-link-hover2" data-target="#explotation" data-toggle="modal" href="#"><img alt="We refuses expolitative child labor" class="img-responsive" src="//travelongocolombia.com/img/sustainability/English-b.jpg" /> </a><div class="push-10-t"><h5><a class="block  block-transparent block-rounded block-link-hover2" data-target="#explotation" data-toggle="modal" href="#">We refuses expolitative child labor</a></h5></div><a class="block  block-transparent block-rounded block-link-hover2" data-target="#explotation" data-toggle="modal" href="#"> </a><div class="fade modal" id="explotation"><div class="modal-dialog modal-dialog-popin"><div class="modal-content"><div class="block block-themed block-transparent remove-margin-b"><div class="bg-primary-dark block-header"><ul class="block-options">	<li>
<button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
</li></ul><h3 class="block-title">CHILD EXPLOITATION</h3></div><div class="block-content"><img alt="CHILD EXPLOITATION" class="img-responsive push-20" src="//travelongocolombia.com/img/sustainability/English-b.jpg" /><p><strong> Travel<span class="text-primary">on</span>go</strong> Colombia refuses and denounces all kind of exploitative child labor for porpose of profit or other benefit.</p><p>Call to:<br />Calling to Bienestar Familiar (ICBF) 01-8000-91-80-80<br />Police emergency number 123</p></div></div><div class="modal-footer"> <a class="btn btn-minw btn-primary" data-dismiss="modal" href="#" type="button"> Ok </a></div></div></div></div></div></div></div></div>',
				'menu_order' => 7,
				'local'      => 'en',
				'tipo'       => 0,
				'img'        => 'img/Sustainability-PolicyC.jpg',
			] );
			
			Page::create( [
				'id'         => 14,
				'slug_url'   => 'politica-de-sostenibilidad',
				'name'       => 'Política de Sostenibilidad',
				'tittle'     => 'Política de Sostenibilidad',
				'body'       => '<div class="content content-boxed content-full"><div class="col-md-8 col-md-offset-2 col-sm-12"><p class="text-justify">La prioridad de <strong> Travel<span class="text-primary">on</span>go</strong> es ser reconocido en el mercado nacional e internacional no solo por su servicio de calidad, sino tambi&eacute;n por su &ldquo;modelo de sostenibilidad&rdquo; el cual emplea actividades eco-amigables y preserva el patrimonio cultural mientras resalta las costumbres y tradiciones m&aacute;s aut&oacute;ctonas del Quind&iacute;o, Risaralda y Caldas.</p><p class="text-justify"><strong> Travel<span class="text-primary">on</span>go</strong> Colombia busca promover en sus clientes y en su equipo el respeto por la preservaci&oacute;n y conservaci&oacute;n de los recursos naturales, ofreciendo planes tur&iacute;sticos que demuestran respeto por la vida y las culturas.</p><p class="text-justify">Dar cumplimiento a la normatividad vigente y contribuir con la responsabilidad social empresarial ofreciendo a empleados y proveedores salarios y pagos justos, ofreciendo oportunidades de empleo primero a ciudadanos locales son objetivos trazados por <strong> Travel<span class="text-primary">on</span>go</strong> Colombia. Adem&aacute;s de responsabilizarnos de denunciar todo comportamiento que promueva el tr&aacute;fico il&iacute;cito de bienes culturales y especies de fauna y flora, la explotaci&oacute;n y comercio sexual de menores de edad y toda practica que conlleve a la explotaci&oacute;n infantil.</p><div class="flex row"><div class="col-sm-6"><a class="block block-rounded block-transparent block-link-hover2" data-target="#sexual" data-toggle="modal" href="#"><img alt="travelongo politicas" class="img-responsive" src="//travelongocolombia.com/img/sustainability/Español-A.jpg" /> </a><div class="push-10-t"><h5><a class="block block-rounded block-transparent block-link-hover2" data-target="#sexual" data-toggle="modal" href="#">No a la explotaci&oacute;n sexual de ni&ntilde;os, ni&ntilde;as y adolescentes</a></h5></div><a class="block block-rounded block-transparent block-link-hover2" data-target="#sexual" data-toggle="modal" href="#"> </a><div class="fade modal" id="sexual"><div class="modal-dialog modal-dialog-popin"><div class="modal-content"><div class="block block-themed block-transparent remove-margin-b"><div class="bg-primary-dark block-header"><ul class="block-options"><li><button data-dismiss="modal" type="button"><i class="si si-close"></i></button></li></ul><h3 class="block-title">No a la explotaci&oacute;n sexual de ni&ntilde;os, ni&ntilde;as y adolescentes</h3></div><div class="block-content"><img alt="travelongo politica de sostenibilidad" class="img-responsive push-20" src="//travelongocolombia.com/img/sustainability/Español-A.jpg" /><p><strong> Travel<span class="text-primary">on</span>go</strong> Colombia dando cumplimiento a lo establecido en el art&iacute;culo 17 Ley 679 de 2001 y la Ley 1336 de 2009 rechaza todo acto sexual violento contra los ni&ntilde;os, ni&ntilde;as y adolescentes del pa&iacute;s, por tanto promovemos en nuestros clientes el respeto por los menores de edad, rechazando toda acci&oacute;n que afecte su bienestar (pornograf&iacute;a infantil, prostituci&oacute;n infantil, etc), y a su vez motivamos la denuncia inmediata de los delitos hacia nuestros ni&ntilde;os.</p><p>Llamar a:<br />Linea de atenci&oacute;n&nbsp;: 018000918080 &nbsp;opci&oacute;n 4 &nbsp;&oacute; en el&nbsp;Quind&iacute;o (6) 745-79-01<br />N&uacute;mero de emergencia de la polic&iacute;a&nbsp;123</p></div></div><div class="modal-footer"><a class="btn btn-minw btn-primary" data-dismiss="modal" href="#" type="button">Ok </a></div></div></div></div></div><div class="col-sm-6"><a class="block block-transparent block-rounded block-link-hover2" data-target="#culture" data-toggle="modal" href="#"><img alt="Comercializaci&oacute;n y da&ntilde;o de bienes culturales" class="img-responsive" src="//travelongocolombia.com/img/sustainability/Español-D.jpg" /> </a><div class="push-10-t"><h5><a class="block block-transparent block-rounded block-link-hover2" data-target="#culture" data-toggle="modal" href="#">Comercializaci&oacute;n y da&ntilde;o de bienes culturales</a></h5></div><a class="block block-transparent block-rounded block-link-hover2" data-target="#culture" data-toggle="modal" href="#"> </a><div class="fade modal" id="culture"><div class="modal-dialog modal-dialog-popin"><div class="modal-content"><div class="block block-themed block-transparent remove-margin-b"><div class="bg-primary-dark block-header"><ul class="block-options">	<li>
<button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
</li></ul><h3 class="block-title">COMERCIALIZACI&Oacute;N Y DA&Ntilde;O DE BIENES CULTURALES</h3></div><div class="block-content"><img alt="COMERCIALIZACI&Oacute;N Y DA&Ntilde;O DE BIENES CULTURALES" class="img-responsive push-20" src="//travelongocolombia.com/img/sustainability/Español-D.jpg" /><p><strong> Travel<span class="text-primary">on</span>go</strong> Colombia rechaza comercializaci&oacute;n y da&ntilde;o de bienes culturales Ley 103 de 1991 Si observa alguna acci&oacute;n que atente contra el patrimonio cultural y arqueol&oacute;gico de nuestro pa&iacute;s.</p><p>Llamar a:<br />Polic&iacute;a Nacional: 123</p><h4>Se&ntilde;or Turista</h4><p>Cada vez que usted se dirija a otro pa&iacute;s con cualquier elemento que este catalogado como patrimonio cultural, usted debe solicitar la autorizaci&oacute;n de exportaci&oacute;n ante las entidades competentes:</p><ul>	<li>Bienes documentales: Archivo general de la naci&oacute;n Web: <a href="http://www.archivogeneral.gov.co">www.archivogeneral.gov.co</a></li>	<li>Toda clase de bienes culturales: Ministerio de Cultura - Direcci&oacute;n de Patrimonio Web <a href="http://www.mincultura.gov.co">www.mincultura.gov.co</a></li>	<li>Patrimonio arqueol&oacute;gico o replicas: Instituto Colombiano de Antropolog&iacute;a e Historia Web: <a href="http://www.icanh.gov.co">www.icanh.gov.co</a></li></ul></div></div><div class="modal-footer"><a class="btn btn-minw btn-primary" data-dismiss="modal" href="#">Ok </a></div></div></div></div></div><div class="col-sm-6"><a class="block block-transparent  block-rounded block-link-hover2" data-target="#flora" data-toggle="modal" href="#"><img alt="flora and fauna colombia" class="img-responsive" src="//travelongocolombia.com/img/sustainability/Español-C.jpg" /> </a><div class="push-10-t"><h5><a class="block block-transparent  block-rounded block-link-hover2" data-target="#flora" data-toggle="modal" href="#">Nosotros Protegemos la Fauna y Flora</a></h5></div><a class="block block-transparent  block-rounded block-link-hover2" data-target="#flora" data-toggle="modal" href="#"> </a><div class="fade modal" id="flora"><div class="modal-dialog modal-dialog-popin"><div class="modal-content"><div class="block block-themed block-transparent remove-margin-b"><div class="bg-primary-dark block-header"><ul class="block-options">	<li>
<button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
</li></ul><h3 class="block-title">FAUNA Y&nbsp;FLORA</h3></div><div class="block-content"><img alt="fauna and flora travleongo colombia" class="img-responsive push-20" src="//travelongocolombia.com/img/sustainability/Español-C.jpg" /><p><strong> Travel<span class="text-primary">on</span>go</strong> Colombia promueve el respeto y la conservaci&oacute;n de la fauna y flora de Colombia (Ley 17 de 1981, resoluci&oacute;n 1367 de 2000).</p><p><strong>Denuncie: </strong><br />Polic&iacute;a Nacional 123<br />C.R.Q Linea Gratuita 018000916625 &ndash; 7460600</p></div></div><div class="modal-footer"> <a class="btn btn-minw btn-primary" data-dismiss="modal" href="#" type="button"> Ok </a></div></div></div></div></div><div class="col-sm-6"><a class="block  block-transparent block-rounded block-link-hover2" data-target="#explotation" data-toggle="modal" href="#"><img alt="Explotaci&oacute;n Infantil" class="img-responsive" src="//travelongocolombia.com/img/sustainability/Español-B.jpg" /> </a><div class="push-10-t"><h5><a class="block  block-transparent block-rounded block-link-hover2" data-target="#explotation" data-toggle="modal" href="#">Explotaci&oacute;n Infantil</a></h5></div><a class="block  block-transparent block-rounded block-link-hover2" data-target="#explotation" data-toggle="modal" href="#"> </a><div class="fade modal" id="explotation"><div class="modal-dialog modal-dialog-popin"><div class="modal-content"><div class="block block-themed block-transparent remove-margin-b"><div class="bg-primary-dark block-header"><ul class="block-options"><li>
<button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
</li></ul><h3 class="block-title">EXPLOTACI&Oacute;N INFANTIL</h3></div><div class="block-content"><img alt="Explotaci&oacute;n Infantil" class="img-responsive push-20" src="//travelongocolombia.com/img/sustainability/Español-B.jpg" /><p><strong> Travel<span class="text-primary">on</span>go</strong> Colombia rechaza y denuncia todo tipo de trabajo realizado por menores de edad a cambio de dinero u otro beneficio.</p><p>Denuencie:<br />Denuncie en la l&iacute;nea Gratuita Nacional de Bienestar Familiar (ICBF) 01-8000-91-80-80<br />Policia Nacional 123</p></div></div><div class="modal-footer"> <a class="btn btn-minw btn-primary" data-dismiss="modal" href="#" type="button"> Ok </a></div></div></div></div></div></div></div></div>',
				'menu_order' => 7,
				'local'      => 'es',
				'tipo'       => 0,
				'img'        => 'img/Sustainability-PolicyC.jpg',
			] );
			
			Page::create( [
				'id'         => 15,
				'slug_url'   => 'join-us',
				'name'       => 'Join Us',
				'tittle'     => 'Join Us',
				'body'       => '{join_us}',
				'menu'       => 0,
				'menu_order' => 1,
				'local'      => 'en',
				'tipo'       => 1,
				'img'        => 'img/joinusC.jpg',
			] );
			
			Page::create( [
				'id'         => 16,
				'slug_url'   => 'trabaja-con-nosotros',
				'name'       => 'Trabaja Con Nosotros',
				'tittle'     => 'Trabaja Con Nosotros',
				'body'       => '{join_us}',
				'menu'       => 0,
				'menu_order' => 1,
				'local'      => 'es',
				'tipo'       => 1,
				'img'        => 'img/joinusC.jpg',
			] );
			
			Page::create( [
				'id'         => 17,
				'slug_url'   => 'contact-us',
				'name'       => 'Contact Us',
				'tittle'     => 'Contact Us',
				'body'       => '{contact_us}',
				'menu'       => 1,
				'menu_order' => 9,
				'local'      => 'en',
				'tipo'       => 1,
				'img'        => 'img/contactC.jpg',
			] );
			
			Page::create( [
				'id'         => 18,
				'slug_url'   => 'contactanos',
				'name'       => 'Contáctanos',
				'tittle'     => 'Contáctanos',
				'body'       => '{contact_us}',
				'menu'       => 1,
				'menu_order' => 9,
				'local'      => 'es',
				'tipo'       => 1,
				'img'        => 'img/contactC.jpg',
			] );
			
			Page::create( [
				'id'         => 19,
				'slug_url'   => 'arma-tu-plan',
				'name'       => 'Arma tu plan',
				'tittle'     => 'Arma tu plan',
				'body'       => '{design}',
				'menu'       => 0,
				'menu_order' => 9,
				'local'      => 'es',
				'tipo'       => 1,
			] );
			
			Page::create( [
				'id'         => 20,
				'slug_url'   => 'design-your-plan',
				'name'       => 'Design your plan',
				'tittle'     => 'Design your plan',
				'body'       => '{design}',
				'menu'       => 0,
				'menu_order' => 9,
				'local'      => 'en',
				'tipo'       => 1,
			] );
			
			Page::create( [
				'id'         => 21,
				'slug_url'   => 'Our-allies',
				'name'       => 'Our Allies',
				'tittle'     => 'Our Allies',
				'body'       => '{allies}',
				'menu'       => 1,
				'menu_order' => 6,
				'local'      => 'en',
				'tipo'       => 1,
				'img'        => 'img/Our-AlliesC.jpg',
			] );
			
			Page::create( [
				'id'         => 22,
				'slug_url'   => 'nuestros-aliados',
				'name'       => 'Nuestros Aliados',
				'tittle'     => 'Nuestros Aliados',
				'body'       => '{allies}',
				'menu'       => 1,
				'menu_order' => 6,
				'local'      => 'es',
				'tipo'       => 1,
				'img'        => 'img/Our-AlliesC.jpg',
			] );
			Page::create( [
				'id'       => 23,
				'slug_url' => 'terms-and-conditions',
				'name'     => 'Terms and Conditions',
				'tittle'   => 'Terms and Conditions',
				'body'     => '<div class="bg-white">
        <div class="content  content-boxed content-full">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-12">
                    <ol class="h3 push-20">
                        <li><h2 class="h3 font-w600">Introduction</h2></li>
                    </ol>
                    <p class="push-10">These Website Standard Terms and Conditions written on this webpage shall manage
                                       your use of this
                                       website. These Terms will be applied fully and affect to your use of this
                                       Website. By using this Website,
                                       you agreed to accept all terms and conditions written in here. You must not use
                                       this Website if you
                                       disagree with any of these Website Standard Terms and Conditions.</p>
                    <p>Minors or people below 18 years old are not allowed to use this Website.</p>
                    <ol start="2" class="h3 push-20">
                        <li><h2 class="h3 font-w600">Intellectual Property Rights</h2></li>
                    </ol>
                    <p class="push-10">Other than the content you own, under these Terms, <span
                                class="text-primary">Travelongo Colombia</span> and/or its licensors own all the
                       intellectual property rights and materials contained in this Website.</p>
                    <p>You are granted limited license only for purposes of viewing the material contained on this
                       Website.</p>
                    <ol start="3" class="h3 push-20">
                        <li><h2 class="h3 font-w600">Restrictions</h2></li>
                    </ol>
                    <p>You are specifically restricted from all of the following</p>
                    <ul class="push-20">
                        <li>publishing any Website material in any other media;</li>
                        <li>selling, sublicensing and/or otherwise commercializing any Website material;</li>
                        <li>publicly performing and/or showing any Website material;</li>
                        <li>using this Website in any way that is or may be damaging to this Website;</li>
                        <li>using this Website in any way that impacts user access to this Website;</li>
                        <li>using this Website contrary to applicable laws and regulations, or in any way may cause harm
                            to the
                            Website, or to any person or business entity;
                        </li>
                        <li>engaging in any data mining, data harvesting, data extracting or any other similar activity
                            in
                            relation to this Website;
                        </li>
                        <li>using this Website to engage in any advertising or marketing.</li>
                    </ul>
                    <p>Certain areas of this Website are restricted from being access by you and <span
                                class="text-primary">Travelongo Colombia</span> may further
                       restrict access by you to any areas of this Website, at any time, in absolute discretion. Any
                       user ID and
                       password you may have for this Website are confidential and you must maintain confidentiality as
                       well.</p>
                    <ol start="4" class="h3 push-20">
                        <li><h2 class="h3 font-w600">Your Content</h2></li>
                    </ol>
                    <p class="push-10">In these Website Standard Terms and Conditions, “Your Content” shall mean any audio, video text,
                       images
                       or other material you choose to display on this Website. By displaying Your Content, you grant
                       Travelongo
                       Colombia a non-exclusive, worldwide irrevocable, sub licensable license to use, reproduce, adapt,
                       publish, translate and distribute it in any and all media.</p>
                    <p>Your Content must be your own and must not be invading any third-party’s rights. <span
                                class="text-primary">Travelongo Colombia</span>
                       reserves the right to remove any of Your Content from this Website at any time without notice.
                    </p>
                    <ol start="5" class="h3 push-20">
                        <li><h2 class="h3 font-w600">No warranties</h2></li>
                    </ol>
                    <p>This Website is provided “as is,” with all faults, and <span class="text-primary">Travelongo Colombia</span>
                       express no representations or
                       warranties, of any kind related to this Website or the materials contained on this Website. Also,
                       nothing
                       contained on this Website shall be interpreted as advising you.</p>
                    <ol start="6" class="h3 push-20">
                        <li><h2 class="h3 font-w600">Limitation of liability</h2></li>
                    </ol>
                    <p>In no event shall <span class="text-primary">Travelongo Colombia</span>, nor any of its officers,
                       directors and employees, shall be held
                       liable for anything arising out of or in any way connected with your use of this <a
                                href="https://travelongocolombia.com" target="_blank">Website</a> whether such liability
                       is
                       under contract. &nbsp;<span class="text-primary">Travelongo Colombia</span>, including its
                       officers, directors and employees shall not be
                       held liable for any indirect, consequential or special liability arising out of or in any way
                       related to
                       your use of this Website.</p>
                    <ol start="7" class="h3 push-20">
                        <li><h2 class="h3 font-w600">Indemnification</h2></li>
                    </ol>
                    <p>You hereby indemnify to the fullest extent <span class="text-primary">Travelongo Colombia</span>
                       from and against any and/or all
                       liabilities, costs, demands, causes of action, damages and expenses arising in any way related to
                       your
                       breach of any of the provisions of these Terms.</p>
                    <ol start="8" class="h3 push-20">
                        <li><h2 class="h3 font-w600">Severability</h2></li>
                    </ol>
                    <p>If any provision of these Terms is found to be invalid under any applicable law, such provisions
                       shall be
                       deleted without affecting the remaining provisions herein.</p>
                    <ol start="9" class="h3 push-20">
                        <li><h2 class="h3 font-w600">Variation of Terms</h2></li>
                    </ol>
                    <p><span class="text-primary">Travelongo Colombia</span> is permitted to revise these Terms at any
                                                                             time as it sees fit, and by using this
                                                                             Website you are expected to review these
                                                                             Terms on a regular basis.</p>
                    <ol start="10" class="h3 push-20">
                        <li><h2 class="h3 font-w600">Assignment</h2></li>
                    </ol>
                    <p>The <span class="text-primary">Travelongo Colombia</span> is allowed to assign, transfer, and
                       subcontract its rights and/or obligations
                       under these Terms without any notification. However, you are not allowed to assign, transfer, or
                       subcontract any of your rights and/or obligations under these Terms.</p>
                    <ol start="11" class="h3 push-20">
                        <li><h2 class="h3 font-w600">Entire Agreement</h2></li>
                    </ol>
                    <p>These Terms constitute the entire agreement between <span class="text-primary">Travelongo Colombia</span>
                       and you in relation to your use
                       of this Website, and supersede all prior agreements and understandings.</p>
                    <ol start="12" class="h3 push-20">
                        <li><h2 class="h3 font-w600">Governing Law &amp; Jurisdiction</h2></li>
                    </ol>
                    <p>These Terms will be governed by and interpreted in accordance with the laws of the State of
                       florida, and
                       you submit to the non-exclusive jurisdiction of the state and federal courts located in florida
                       for the
                       resolution of any disputes.</p>
                
                </div>
            </div>
        </div>
    </div>',
				'menu'     => 0,
				'local'    => 'en',
				'tipo'     => 0,
			] );
			
			Page::create( [
				'id'       => 24,
				'slug_url' => 'terminos-y-condiciones',
				'name'     => 'Terminos y Condiciones',
				'tittle'   => 'Terminos y Condiciones',
				'body'     => '<div class="bg-white">
        <div class="content  content-boxed content-full">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-12">
                    <ol class="h3 push-20">
                        <li><h2 class="h3 font-w600">Introduction</h2></li>
                    </ol>
                    <p class="push-10">These Website Standard Terms and Conditions written on this webpage shall manage
                                       your use of this
                                       website. These Terms will be applied fully and affect to your use of this
                                       Website. By using this Website,
                                       you agreed to accept all terms and conditions written in here. You must not use
                                       this Website if you
                                       disagree with any of these Website Standard Terms and Conditions.</p>
                    <p>Minors or people below 18 years old are not allowed to use this Website.</p>
                    <ol start="2" class="h3 push-20">
                        <li><h2 class="h3 font-w600">Intellectual Property Rights</h2></li>
                    </ol>
                    <p class="push-10">Other than the content you own, under these Terms, <span
                                class="text-primary">Travelongo Colombia</span> and/or its licensors own all the
                       intellectual property rights and materials contained in this Website.</p>
                    <p>You are granted limited license only for purposes of viewing the material contained on this
                       Website.</p>
                    <ol start="3" class="h3 push-20">
                        <li><h2 class="h3 font-w600">Restrictions</h2></li>
                    </ol>
                    <p>You are specifically restricted from all of the following</p>
                    <ul>
                        <li>publishing any Website material in any other media;</li>
                        <li>selling, sublicensing and/or otherwise commercializing any Website material;</li>
                        <li>publicly performing and/or showing any Website material;</li>
                        <li>using this Website in any way that is or may be damaging to this Website;</li>
                        <li>using this Website in any way that impacts user access to this Website;</li>
                        <li>using this Website contrary to applicable laws and regulations, or in any way may cause harm
                            to the
                            Website, or to any person or business entity;
                        </li>
                        <li>engaging in any data mining, data harvesting, data extracting or any other similar activity
                            in
                            relation to this Website;
                        </li>
                        <li>using this Website to engage in any advertising or marketing.</li>
                    </ul>
                    <p>Certain areas of this Website are restricted from being access by you and <span
                                class="text-primary">Travelongo Colombia</span> may further
                       restrict access by you to any areas of this Website, at any time, in absolute discretion. Any
                       user ID and
                       password you may have for this Website are confidential and you must maintain confidentiality as
                       well.</p>
                    <ol start="4" class="h3 push-20">
                        <li><h2 class="h3 font-w600">Your Content</h2></li>
                    </ol>
                    <p class="push-10">In these Website Standard Terms and Conditions, “Your Content” shall mean any audio, video text,
                       images
                       or other material you choose to display on this Website. By displaying Your Content, you grant
                       Travelongo
                       Colombia a non-exclusive, worldwide irrevocable, sub licensable license to use, reproduce, adapt,
                       publish, translate and distribute it in any and all media.</p>
                    <p>Your Content must be your own and must not be invading any third-party’s rights. <span
                                class="text-primary">Travelongo Colombia</span>
                       reserves the right to remove any of Your Content from this Website at any time without notice.
                    </p>
                    <ol start="5" class="h3 push-20">
                        <li><h2 class="h3 font-w600">No warranties</h2></li>
                    </ol>
                    <p>This Website is provided “as is,” with all faults, and <span class="text-primary">Travelongo Colombia</span>
                       express no representations or
                       warranties, of any kind related to this Website or the materials contained on this Website. Also,
                       nothing
                       contained on this Website shall be interpreted as advising you.</p>
                    <ol start="6" class="h3 push-20">
                        <li><h2 class="h3 font-w600">Limitation of liability</h2></li>
                    </ol>
                    <p>In no event shall <span class="text-primary">Travelongo Colombia</span>, nor any of its officers,
                       directors and employees, shall be held
                       liable for anything arising out of or in any way connected with your use of this <a
                                href="https://travelongocolombia.com" target="_blank">Website</a> whether such liability
                       is
                       under contract. &nbsp;<span class="text-primary">Travelongo Colombia</span>, including its
                       officers, directors and employees shall not be
                       held liable for any indirect, consequential or special liability arising out of or in any way
                       related to
                       your use of this Website.</p>
                    <ol start="7" class="h3 push-20">
                        <li><h2 class="h3 font-w600">Indemnification</h2></li>
                    </ol>
                    <p>You hereby indemnify to the fullest extent <span class="text-primary">Travelongo Colombia</span>
                       from and against any and/or all
                       liabilities, costs, demands, causes of action, damages and expenses arising in any way related to
                       your
                       breach of any of the provisions of these Terms.</p>
                    <ol start="8" class="h3 push-20">
                        <li><h2 class="h3 font-w600">Severability</h2></li>
                    </ol>
                    <p>If any provision of these Terms is found to be invalid under any applicable law, such provisions
                       shall be
                       deleted without affecting the remaining provisions herein.</p>
                    <ol start="9" class="h3 push-20">
                        <li><h2 class="h3 font-w600">Variation of Terms</h2></li>
                    </ol>
                    <p><span class="text-primary">Travelongo Colombia</span> is permitted to revise these Terms at any
                                                                             time as it sees fit, and by using this
                                                                             Website you are expected to review these
                                                                             Terms on a regular basis.</p>
                    <ol start="10" class="h3 push-20">
                        <li><h2 class="h3 font-w600">Assignment</h2></li>
                    </ol>
                    <p>The <span class="text-primary">Travelongo Colombia</span> is allowed to assign, transfer, and
                       subcontract its rights and/or obligations
                       under these Terms without any notification. However, you are not allowed to assign, transfer, or
                       subcontract any of your rights and/or obligations under these Terms.</p>
                    <ol start="11" class="h3 push-20">
                        <li><h2 class="h3 font-w600">Entire Agreement</h2></li>
                    </ol>
                    <p>These Terms constitute the entire agreement between <span class="text-primary">Travelongo Colombia</span>
                       and you in relation to your use
                       of this Website, and supersede all prior agreements and understandings.</p>
                    <ol start="12" class="h3 push-20">
                        <li><h2 class="h3 font-w600">Governing Law &amp; Jurisdiction</h2></li>
                    </ol>
                    <p>These Terms will be governed by and interpreted in accordance with the laws of the State of
                       florida, and
                       you submit to the non-exclusive jurisdiction of the state and federal courts located in florida
                       for the
                       resolution of any disputes.</p>
                
                </div>
            </div>
        </div>
    </div>',
				'menu'     => 0,
				'local'    => 'es',
				'tipo'     => 0,
			] );
			
		}
	}
