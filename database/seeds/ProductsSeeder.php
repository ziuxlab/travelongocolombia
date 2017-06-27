<?php
	
	use App\Product;
	use Illuminate\Database\Seeder;
	
	class ProductsSeeder extends Seeder {
		
		/**
		 * Run the database seeds.
		 *
		 * @return void
		 */
		public function run() {
			
			//========== Inicio de las actividades ==============//
			
			Product::create( [
				'id'                => 1,
				'tittle'            => 'The Coffee Park',
				'description'       => 'THE COFFEE PARK (El Parque del Café), as its name suggests, is a theme park with fairly obvious theme. It is in part a condensed tour of Quindío’s renowned coffee crops, replete with the detailed history and production process of Colombia’s most famous goods. El Parque pays tribute to the labors of coffee growers through the centuries. The larger area of the park (56 acres) is devoted to over 20 amusement rides, ensconced within 4000 species of plants and trees. Entertainment includes two very dramatic roller coasters as well as tamer water rides and cultural shows. With an average temperature of 21 degrees C, the Coffee Park is comfortable recreating year round, day and evening (bring a sweater), the perfect blend of ancestral tradition with modernity and innovation.                              At the coffee park you will have a whole adventure in Quindío with a bilingual travel guide who will help you to enjoy this experience without any languaje barriers.',
				'short_description' => 'It  is  in  part  a  condensed  tour  of  Quindío’s renowned coffee crops, replete with the detailed history and production process of Colombia’s most famous goods.  This park has over  20  amusement  rides',
				'itinerary'         => 'Breakfast,Park travel,Lunch,Atraction,Drink coffee,Dinner,',
				'slug_url'          => str_slug( 'coffe park', '-' ),
				'days'              => '8 hours',
				'price_adults'      => '100',
				'price_children'    => '50',
				'local'             => 'en',
				'type'              => 1,
				'discount'          => 10, //porcentaje
				'city_id'           => 1,
				'meta_description'  => 'The Coffee Park',
				'keywords'          => 'The Coffee Park',
				'include'           => 'Multiple ticket,  Drinks and snacks ',        // price include
				'suggestion'        => 'Comfortable shoes, No sandals, Cap or hat, Sunblock, Drink, Camera, Sunblock ',
			] );
			
			Product::create( [
				'id'                => 2,
				'tittle'            => 'Parque del café',
				'description'       => 'El parque de café como su nombre lo indica es un tour del renombrado cultivo de café, lleno de historia y del proceso de producción del commodity más famoso de Colombia. El Parque rinde tributo a la labor de los caficultores a través de siglos. El área más grande del Parque (56 hectáreas) alberga más de 20 atracciones mecánicas, instaladas entre 4000 especies de plantas y árboles. El entretenimiento incluye, entre otras, montaña rusa, montaña acuática y shows culturales.   Con una temperatura de 21º, el Parque del Café recrea todo el año, de día y de noche (trae una chaqueta), la mezcla perfecta de la tradición ancestral con la modernidad y la innovación. El parque del café te permite vivir toda una aventura en el Quindío, acompañado de un guía bilingüe que le facilitará el goce de  esta experiencia sin la limitación de la diferencia idiomática.',
				'short_description' => 'Es un tour  del  renombrado  cultivo  de  café,  lleno  de  historia  y  del  proceso  de producción del commodity más famoso de Colombia. Este parque  alberga más de 20 atracciones mecánicas ',
				'itinerary'         => 'Breakfast,Park travel,Lunch,Atraction,Drink coffee,Dinner,',
				'slug_url'          => str_slug( 'parque del cafe', '-' ),
				'days'              => '8 horas',
				'price_adults'      => '100',
				'price_children'    => '50',
				'local'             => 'es',
				'type'              => 1,
				'discount'          => 10, //porcentaje
				'city_id'           => 1,
				'meta_description'  => 'Parque del café',
				'keywords'          => 'Parque del café',
				'include'           => 'Pasaporte múltiple, Bebidas y snacks',        // price include
				'suggestion'        => 'Zapatos cómodos, No usar sandalias, Gorra o sombrero, Bebida, Cámara fotográfica, Bloqueador solar ',
			] );
			
			Product::create( [
				'id'                => 3,
				'tittle'            => 'Panaca',
				'description'       => 'PANACA is the first purely zoo-agricultural theme park in the world, the biggest in Latin America and offers a unique experience of interaction with the regional agrarian countryside and coffee culture Here you will find the most amazing shows, educational theme stations and the biggest collection of domestic zoology in the world. You will enjoy an unforgettable Latin America vacations through the relations between animals and nature - a whole day of fun and excitement interacting with more than 4,500 animal species in a journey of 2.8 kilometers.  Come and enjoy this adventure in Quindío with side activities such as an ecological tour, farmyard milking practices, horseback riding, Tibetan bridges and canopy flying ',
				'short_description' => 'PANACA is the first purely zoo-agricultural theme park in the world, the biggest in Latin America and offers a unique experience of interaction with the regional agrarian countryside',
				'itinerary'         => 'Breakfast,Park travel,Lunch,Atraction,Drink coffee,Dinner,',
				'slug_url'          => str_slug( 'panaca', '-' ),
				'price_adults'      => '120',
				'price_children'    => '60',
				'days'              => '8 hours',
				'local'             => 'en',
				'type'              => 1,
				'discount'          => 20, //porcentaje
				'city_id'           => 1,
				'meta_description'  => 'Panaca',
				'keywords'          => 'Panaca',
				'include'           => 'Terra ticket, Drinks and snacks ',        // price include
				'suggestion'        => 'Comfortable shoes, No sandals, Cap or hat, Sunblock, Drink, Camera, Sunblock ',
			] );
			
			Product::create( [
				'id'                => 4,
				'tittle'            => 'Panaca',
				'description'       => 'PANACA es el primer parque temático agropecuario en el mundo y el más grande en Latinoamérica que ofrece una experiencia única llena de diversión e interacción con el campo y la cultura del café 
Panaca cuenta con los Shows más sorprendentes, las más impresionantes Estaciones temáticas y la colección de zoología doméstica más grande del mundo, donde se viven las más inigualables vacaciones en Latinoamérica entre los animales, la naturaleza y el hombre. En este Parque, se disfruta un día entero de diversión, emoción y adrenalina, y se experimentan emociones fuertes en cada rincón interactuando con más de 4.500 animales en un recorrido de 2.8 kilómetros. Ven y vive una gran aventura en el Quindío, rodeada de sensacionales paisajes, naturaleza sin límite, animales asombrosos y un sinfín de actividades como caminatas ecológicas, prácticas de ordeño, cabalgatas, puentes tibetanos, canopy y más.',
				'short_description' => 'Es el primer parque temático agropecuario en el mundo y el más grande en Latinoamérica que ofrece una experiencia única llena de diversión e interacción con el campo',
				'itinerary'         => 'Breakfast,Park travel,Lunch,Atraction,Drink coffee,Dinner,',
				'slug_url'          => str_slug( 'panaca es', '-' ),
				'price_adults'      => '120',
				'price_children'    => '60',
				'days'              => '8 horas',
				'local'             => 'es',
				'type'              => 1,
				'discount'          => 20, //porcentaje
				'city_id'           => 1,
				'meta_description'  => 'Panaca',
				'keywords'          => 'Panaca',
				'include'           => 'Pasaporte Terra, Bebidas y snacks ',        // price include
				'suggestion'        => 'Zapatos cómodos, No usar sandalias, Gorra o sombrero, Bebida, Cámara fotográfica, Bloqueador solar',
			] );
			
			Product::create( [
				'id'                => 5,
				'tittle'            => 'Salento, Cocora Valley, Craftsman Village',
				'description'       => 'SALENTO, COCORA VALLEY, CRAFTSMAN VILLAGE The twisting mountain road leading to Salento reveals dramatic green valleys, lush jungle-layered peaks and banana and plantain covered foothills. After maybe five miles drive Salento is reached, a slightly larger town, with beautiful (often largely pedestrian) streets, frequently traversed by traditional coffee growers dressed in their standard garb (sombrero, light pants, colorful shawls and mustachioed visage) strolling to the main square for a cerveza fría, tomales, and traditional entertainment.  Among the quaint calles of Salento, you will find the Craftsman Village, a beehive of activity with gaily colorful shops where locally made handicrafts are sold (wine bottle holders made of bamboo or guadua, key chains of black cedar and small chests of eucalyptus. Lastly, undoubtedly the most special place of this region is the Cocora Valley, about seven miles beyond Salento, through some high grazing country that strikingly resembles Switzerland. At the very top of the valley is Cocora, heralded by thousands of wax palm, Colombia\'s national tree, dotting even the taller peaks. Off in the distance loom the highest snow covered peaks (volcanos actually) of Nevados National Park. Hiking and horseback riding trails abound. Deep in these jungles the puma roams free, likewise a national emblem.',
				'short_description' => 'The twisting mountain road leading to Salento reveals dramatic green valleys, lush jungle-layered peaks and banana and plantain covered foothills. ',
				'slug_url'          => str_slug( 'Salento, Cocora Valley, Craftsman Village', '-' ),
				'days'              => '8 hours',
				'price_adults'      => '125',
				'price_children'    => '62',
				'local'             => 'en',
				'type'              => 1, //activity
				'discount'          => 0, //porcentaje
				'city_id'           => 1,
				'meta_description'  => 'Salento, Cocora Valley, Craftsman Village',
				'keywords'          => 'Salento, Cocora Valley, Craftsman Village',
				'include'           => '',        // price include
				'suggestion'        => 'Comfortable shoes, Camera, Cap or hut, Sweater',
			] );
			
			Product::create( [
				'id'                => 6,
				'tittle'            => 'Salento, Valle del Cocora, la Aldea del Artesano',
				'description'       => 'SALENTO, VALLE DEL COCORA, LA ALDEA DEL ARTESANO El camino serpenteante en medio de la montaña que conduce a Salento revela los dramáticos valles verdes, los exuberantes picos de las montañas y colinas cubiertas por plantaciones de plátano y banano. Después de unos ocho kilómetros se llega en vehículo a Salento, un pueblo un poco más grande, con calles hermosas, frecuentadas por los cafeteros tradicionales vestidos con su atuendo típico (sombrero, pantalones ligeros, chales de colores y bigote) que llegan a la plaza del pueblo para tomar una cerveza fría y conversar con sus amigos.  Entre las pintorescas calles de Salento, se encuentra La Villa de los Artesanos, un conjunto de tiendas alegremente coloridas donde se venden artesanías hechas por los habitantes del lugar (botellas de vino de bambú o guadua, llaveros de cedro negro y pequeños cofres de eucalipto, entre otros). Por último, sin duda, el lugar más especial de esta región es el Valle de Cocora, a unos once kilómetros de Salento, a través de un campo de pastoreo alto que se asemeja sorprendentemente a Suiza. En lo más alto del valle está Cocora, anunciada por miles de palmas de cera, el árbol nacional de Colombia. En la distancia se divisan los picos nevados más altos (volcanes) del Parque Nacional los Nevados. Las rutas de senderismo y cabalgatas abundan. En el fondo de estas selvas el puma, también emblema nacional, pasea libremente por la zona.',
				'short_description' => 'El camino serpenteante en medio de la montaña que conduce a Salento revela los dramáticos valles verdes, los exuberantes picos de las montañas y colinas cubiertas por plantaciones de plátano y banano. ',
				'slug_url'          => str_slug( 'Salento, Valle del Cocora, la Aldea del Artesano', '-' ),
				'days'              => '8 horas',
				'price_adults'      => '125',
				'price_children'    => '62',
				'local'             => 'es',
				'type'              => 1, //activity
				'discount'          => 0, //porcentaje
				'city_id'           => 1,
				'meta_description'  => 'Salento, Valle del Cocora, la Aldea del Artesano',
				'keywords'          => 'Salento, Valle del Cocora, la Aldea del Artesano',
				'include'           => '',        // price include
				'suggestion'        => 'Cámara, Zapatos cómodos, Gorra o sombrero',
			] );
			
			Product::create( [
				'id'                => 7,
				'tittle'            => 'Las cascadas de Río Verde',
				'short_description' => 'Las cascadas de  Río Verde son una reserva natural de 80 hectáreas, ofrec fascinantes paisajes naturales para quienes no se oponen a caminar varias millas e los Andes',
				'description'       => 'Las cascadas de Río Verde son una reserva natural de 80 hectáreas en Córdoba Quindío a una hora y media de Armenia, ofrece fascinantes paisajes naturales para quienes no se oponen a caminar varias millas en los Andes.  El viaje empieza con un paseo en Jeep de 30 minutos sobre caminos agrestes, ¡espera!, después, a dos kilómetros una agradable caminata en ascenso rodeado de bellísimo y robusto ganado pastando campos entremezclados con una densa jungla de ficus gigante, cedro negro, eucaliptos y helechos.  Las vistas espectaculares hacen que la fatiga muscular leve y la falta de aire no sólo sea agradable, sino inolvidable.  Tan pronto como llegues a la sede de la reserva  (que también es la casa del guía y en su tiempo fue un territorio invadido por la guerrilla), donde los turistas son recibidos con frutas locales, aguapanela caliente  (bebida de caña de azúcar) y deliciosos quesos con bocadillos producidos por los habitantes de la vereda. ',
				'slug_url'          => str_slug( 'Las cascadas de Río Verde', '-' ),
				'days'              => '5 horas',
				'price_adults'      => 100,
				'price_children'    => 100,
				'discount'          => 10,
				'local'             => 'es',
				'type'              => 1,
				'city_id'           => 1,
				'meta_description'  => 'Las cascadas de Río Verde',
				'keywords'          => 'Las cascadas de Río Verde',
				'include'           => 'Almuerzo, Ingreso, Transporte desde Armenia en Jeep, Bebidas y snacks ',
				'suggestion'        => 'Zapatos cómodos, No usar sandalias, Gorra o sombrero, Bebida, Cámara fotográfica, Bloqueador solar',
			
			] );
			
			Product::create( [
				'id'                => 8,
				'tittle'            => 'The Río Verde Waterfalls',
				'description'       => 'The Río Verde Waterfalls is a 80 acres natural reserve located in Córdoba, about one and a half hour drive from Armenia, offering  beautiful natural landscapes for those not averse to hiking several miles in the Andes.The trip begins with rigorous 30 minutes jeep ride over rugged dirt/boulder roads, hang on!, then a two kilometer gentle uphill hike through gorgeous high altitude cattle grazing fields interspersed with dense jungle of giant ficus, black cedar, eucalyptus and fern trees.  The spectacular views make the mild muscle fatigue and shortness of breath not only pleasant but unforgettable.   One soon arrives at the main reserve site (also the expert guide\'s home and actually a former \'guerilla\' hideout more than one decade ago), where visitors are greeted with local fruit, warm panela (sugar cane extract) and delicious cheeses made by the inhabitants of the village.',
				'short_description' => 'The Río Verde Waterfalls is a 80 acres natural reserve located in Córdoba,  offering  beautiful natural landscapes for those not averse to hiking several miles in the Andes.',
				'slug_url'          => str_slug( 'The Río Verde Waterfalls', '-' ),
				'days'              => '5 hours',
				'price_adults'      => '125',
				'price_children'    => '62',
				'local'             => 'en',
				'type'              => 1,
				'discount'          => 0,
				'city_id'           => 1,
				'meta_description'  => 'The Río Verde Waterfalls',
				'keywords'          => 'The Río Verde Waterfalls',
				'include'           => 'Lunch, Transport  from Armenia by JEEP, Drinks and snacks ',
				'suggestion'        => 'Comfortable shoes, No sandals, Cap or hat, Sunblock, Drink, Camera',
			] );
			
			Product::create( [
				'id'                => 9,
				'tittle'            => 'Nevado de santa Isable y laguna de otun',
				'description'       => 'En este recorrido tenemos la oportunidad de conocer 2 destinos exóticos de Latinoamerica;  La Laguna del Otún y el Nevado de Santa Isabel y gracias a estos magestuosos lugares  vivirás una memorable aventura en la región cafetera Colombiana. Laguna del Otún: es el humedal más importante del Parque Nacional los Nevados, ubicada a una altura de 3.950 m.s.n.m. allí nace el rio Otún, fuente de agua para los habitantes de Pereira. Nevado de Santa Isabel: fue llamado por los indígenas Poleka Kasue que significa “doncella de la montaña” es uno de los últimos 6 glaciares de Colombia, tiene una altura de 4.750 m.s.n.m.',
				'short_description' => 'En este recorrido tenemos la oportunidad de conocer 2 lugares fantásticos del Parque Nacional los Nevados; la Laguna del Otún  y el Nevado de Santa Isabel que es uno de los últimos glaciares de Colombia',
				'slug_url'          => str_slug( 'Nevado de santa Isable y laguna de otun', '-' ),
				'days'              => '8 horas',
				'price_adults'      => '125',
				'price_children'    => '62',
				'local'             => 'es',
				'type'              => 1,
				'discount'          => 0,
				'city_id'           => 1,
				'meta_description'  => 'Nevado de santa Isable y laguna de otun',
				'keywords'          => 'Nevado de santa Isable y laguna de otun',
				'include'           => 'Guía Local, Transporte por dos días (compartido),  2 Desayunos, 2 Almuerzos, 1 Cena, Hospedaje en finca o campamento, Entrada al parque nacional, Nebidas y snacks  ',
				'suggestion'        => 'Ropa para clima frío, Zapatos de agarre, Guantes, Bufanda, Pasamontañas, Impermeable, Bloqueador, Sleeping, Shapstick, Frutas o cereal en barra, Otra muda de ropa por si llueve, Gafas oscuras con protección UV, Agua, Cámara, Documento identidad',
			] );
			
			Product::create( [
				'id'                => 10,
				'tittle'            => 'The Otun Lagoon and Santa Isabel Nevado',
				'description'       => 'This hiking will give us the opportunity to visit two exotic destinations in Latin America; the Otún lagoon and Santa Isabel Nevado.The Otun Lagoon (La Laguna del Otún) is the most important wetland of Nevados National Park, it is at 3950 meters above see level, over there the Otún river mouth is, which provides water for Pereira populationSanta Isabel Nevado was called by Indigenous ""Poleka Kasue"" or ""Mountain Maiden"" in English, the nevado is one of the last six glaciers of Colombia, its height is 4750 meters above see level.  You will live a real adventure in coffee region of Colombia',
				'short_description' => 'This hiking will give us the opportunity to visit two wonderful places of Nevados National Park; the Otún lagoon  is the most important wetland of Nevados National Park and Santa Isabel Nevado is one of the last six glaciers of Colombia',
				'slug_url'          => str_slug( 'The Otun Lagoon and Santa Isabel Nevado', '-' ),
				'days'              => '8 hours',
				'price_adults'      => '125',
				'price_children'    => '62',
				'local'             => 'en',
				'type'              => 1,
				'discount'          => 0,
				'city_id'           => 1,
				'meta_description'  => 'The Otun Lagoon and Santa Isabel Nevado',
				'keywords'          => 'The Otun Lagoon and Santa Isabel Nevado',
				'include'           => 'Local guide,  Transport for  2 Days  (Shared),  2 Breakfast, 2 Lunch, 1 Dinner Accomodation at a farm or camping, Ticket to the national park, Drinks and snacks ',
				'suggestion'        => 'Cold weather clothes, Hiking shoes, Gloves, Scarf, Wood cap, Raining coat, Sunblock, Sleeping, Lips stick, Fruits or Cereal bars, Clothes and shoes if it rains, Sunglasses with UV protection, Water, Camera, ID ',
			] );
			
			Product::create( [
				'id'                => 11,
				'tittle'            => 'Quimbaya Museum',
				'description'       => 'The Quimbaya “Gold” Museum is relatively small, but one of the more beautiful museums in Colombia. It is a tribute to the first native inhabitants of Quindío who created an extensive indigenous art in goldsmithery and ceramics. The archaeological exhibits are accompanied by detailed written scripts that describe the results of rigorous scientific investigations. The curator’s primary mission is to integrate the rich beauty of the pre-Hispanic legacy (spanning over 10,000 years!) with an increasing knowledge, awareness and deep respect for the indigenous tribes. In addition to exhibitions of art and architecture, the museum also organizes anthropological theme tours, more specifically targeting children.',
				'short_description' => 'The Quimbaya “Gold” Museum is relatively small, but one of the more beautiful museums in Colombia. It is a tribute to the first native inhabitants of Quindío who created an extensive indigenous art in goldsmithery and ceramics. The archaeological exhibits are accompanied by detailed written scripts that describe the results of rigorous scientific investigations. The curator’s primary mission is to integrate the rich beauty of the pre-Hispanic legacy (spanning over 10,000 years!) with an increasing knowledge, awareness and deep respect for the indigenous tribes. In addition to exhibitions of art and architecture, the museum also organizes anthropological theme tours, more specifically targeting children. Traveling to Armenia –Colombia is an attractive option for foreigners and Quimbaya Museum is one of the reasons to start this adventure in Quindío.  With one of our bilingual travel guide you will not skip any detail.',
				'slug_url'          => str_slug( 'Quimbaya Museum', '-' ),
				'days'              => '4 Hours',
				'price_adults'      => '125',
				'price_children'    => '62',
				'local'             => 'en',
				'type'              => 1, //activity
				'discount'          => 0, //porcentaje
				'city_id'           => 1,
				'meta_description'  => 'Quimbaya Museum',
				'keywords'          => 'Quimbaya Museum',
				'include'           => 'Free Entry',        // price include
				'suggestion'        => 'Camera',
			] );
			
			Product::create( [
				'id'                => 12,
				'tittle'            => 'Museo Quimbaya',
				'description'       => 'El museo de Oro Quimbaya es relativamente pequeño, pero es uno de los más hermosos museos de Colombia. Es un tributo a los primeros habitantes nativos del Quindío quienes crearon un diverso e invaluable arte indígena en orfebrería y cerámica. Las exhibiciones arqueológicas están acompañadas de un guión que describe los resultados de rigurosos investigaciones científicas. La misión fundamental del museo es integrar la abundante belleza de la legacía prehispánica (abarca más de 10.000 años) con un conocimiento creciente, conciencia y profundo respeto por las tribus indígenas. Adicional a las exhibiciones de arte y arquitectura, el museo también organiza recorridos temáticos antropológicos especialmente dirigidos a niños. Viajar a Armenia –Colombia es una opción muy atractiva para habitantes de otros países y el museo Quimbaya es una razón para emprender esta cautivante aventura en el Quindío.  Con uno de nuestros guías bilingues no perderás ningún detalle .',
				'short_description' => 'Es uno de los más hermosos museos de Colombia.  Es un tributo a los primeros habitantes nativos del Quindío quienes crearon un diverso e invaluable arte indígena en orfebrería y cerámica.',
				'slug_url'          => str_slug( 'Museo Quimbaya', '-' ),
				'days'              => '4 Hours',
				'price_adults'      => '125',
				'price_children'    => '62',
				'local'             => 'es',
				'type'              => 1, //activity
				'discount'          => 0, //porcentaje
				'city_id'           => 1,
				'meta_description'  => 'Museo Quimbaya',
				'keywords'          => 'Museo Quimbaya',
				'include'           => 'Entrada Libre',        // price include
				'suggestion'        => 'Cámara',
			] );
			
			Product::create( [
				'id'                => 13,
				'tittle'            => 'The Barbas´ palace',
				'description'       => 'About two kilometers(by 4WD Jeep)from the town square in Filandia you will discover the remote Barbas Palace. After donning the rubber boots provided, this spectacular 4km 3.5 hour hikeoffers its visitors a slow paced(but sometimes slightly muddy)walk through dense jungle, along rushing streams and cascading waterfalls, and its highest trees are draped with bright orange howler monkeys (be careful of getting too close – they commonly throw feces at intruders).The guide will point out fascinating plants, geologic phenomena,and interesting facts about the tribes that once inhabited the region (and insects that still do). ',
				'short_description' => 'Walk through dense jungle, along rushing streams and cascading waterfalls, and its highest trees are draped with bright orange howler monkeys ',
				'itinerary'         => 'natural park barbas bremen ',
				'slug_url'          => str_slug( 'The Barbas´ palace', '-' ),
				'days'              => '6 Hours',
				'price_adults'      => '125',
				'price_children'    => '62',
				'local'             => 'en',
				'type'              => 1,
				'discount'          => 0,
				'city_id'           => 1,
				'meta_description'  => 'The Barbas´ palace',
				'keywords'          => 'The Barbas´ palace',
				'include'           => 'Jeep since the square of Filandia, Entry, Local guide, Cup of coffee and natural limonade at the end of the hiking ',
				'suggestion'        => 'Raincoat and hood, Camera, Sunblock, Hiking shoes, Sweater, Repelent',
			] );
			
			Product::create( [
				'id'                => 14,
				'tittle'            => 'El palacio de barbas',
				'short_description' => 'Inmerso en la densa selva, a lo largo de los riachuelos y cascadas, sus más altos árboles están cubiertos con los monos aulladores de color naranja brillante',
				'description'       => 'Cerca de dos kilómetros (en 4WD Jeep) desde el parque de Filandia descubrirás el remoto Palacio del Barbas.  Luego de ponerse las botas plásticas proveídas, ésta especular excursión de 4km y 3.5 horas ofrece a sus visitantes un recorrido lento  (pero en ocasiones levemente enlodado)  inmerso en la densa selva, a lo largo de los riachuelos y cascadas, sus más altos árboles están cubiertos con los monos aulladores de color naranja brillante  (se cuidadoso de acercarte – ellos comúnmente lanzan heces a intrusos).  El guía te mostrará plantas fascinantes, fenómenos geológicos e interesantes hechos que alguna vez habitaron la región  (e insectos que aún lo hacen).',
				'slug_url'          => str_slug( 'El palacio de barbas', '-' ),
				'days'              => '6 Horas',
				'price_adults'      => '125',
				'price_children'    => '62',
				'local'             => 'es',
				'type'              => 1,
				'discount'          => 0,
				'city_id'           => 1,
				'meta_description'  => 'El palacio de barbas',
				'keywords'          => 'El palacio de barbas',
				'include'           => 'Jeep since the square of Filandia, Entry, Local guide, Cup of coffee and natural limonade at the end of the hiking ',
				'suggestion'        => 'Impermeable con capota, Zapatos de agarre, Saco y repelente',
			] );
			
			Product::create( [
				'id'                => 15,
				'tittle'            => 'The Promised land',
				'short_description' => 'The Promised Land is an authentic Paradise on Earth. The park consists of a virgin forest full of diverse species of plants and animals, and an active archaeological site exploring ancestral indigenous inhabitants',
				'description'       => 'Just twenty minutes from Armenia, you will find this popular agroecological park. The Promised Land is an authentic Paradise on Earth. The park consists of a virgin forest full of diverse species of plants and animals, and an active archaeological site exploring ancestral indigenous inhabitants. Many of its trails were aboriginal paths, later co-opted by Spanish conquistadors. During the tour you will enjoy “The Charming Trail” which weaves through wetlands, lakes and natural pools. The Promised Land proudly exhibits the fauna and flora of the region in order to promote the preservation of the natural heritage of Quindío. Here you will experience first-hand the spectacle of wildlife in its natural state and at the same time sharing with family and friends.',
				'slug_url'          => str_slug( 'The Promised land', '-' ),
				'days'              => '4 Hours',
				'price_adults'      => '125',
				'price_children'    => '62',
				'local'             => 'en',
				'type'              => 1,
				'discount'          => 0,
				'city_id'           => 1,
				'meta_description'  => 'The Promised land',
				'keywords'          => 'The Promised land',
				'include'           => 'Entry, Sense path, Smming in the river, Beach voleyball, Local guide ',
				'suggestion'        => 'Comfortable shoes and clothes, Hut or cap, Sunblock, Camera, Clothes to go in the river, Sweater',
			] );
			
			Product::create( [
				'id'                => 16,
				'tittle'            => 'La tierra prometida',
				'description'       => 'A solo veinte minutos de Armenia, encontrarás este famoso parque agroecológico.  La Tierra Prometida es un auténtico paraíso terrenal.  El parque consiste en un bosque virgen lleno de diversidad de plantas y animales y un lugar arqueológico para explorar los ancestros indígenas.  Muchos de sus senderos fueron caminos aborígenes, más tarde recorridos por conquistadores españoles.  Durante el tour disfrutarás de “El sendero del Encanto”  el cual se haya entre humedales, lagos y piscinas naturales.  La tierra prometida orgullosamente exhibe la fauna y flora de la región para promover la preservación del patrimonio natural del Quindío.  Aquí experimentarás de primera mano el espectáculo de la vida silvestre en su estado natural y al mismo tiempo compartir con familia y amigos.',
				'short_description' => 'La Tierra Prometida es un auténtico paraíso terrenal.  El parque consiste en un bosque virgen lleno de diversidad de plantas y animales y un lugar arqueológico para explorar los ancestros indígenas. ',
				'slug_url'          => str_slug( 'La tierra prometida', '-' ),
				'days'              => '4 Horas',
				'price_adults'      => '125',
				'price_children'    => '62',
				'local'             => 'es',
				'type'              => 1, //activity
				'discount'          => 0, //porcentaje
				'city_id'           => 1,
				'meta_description'  => 'La tierra prometida',
				'keywords'          => 'La tierra prometida',
				'include'           => '',        // price include
				'suggestion'        => 'Zapatos y ropa cómoda, Sombrero o gorra, Bloqueador solar,Cámara, Ropa para entrar al río, Saco',
			] );
			
			Product::create( [
				'id'                => 17,
				'tittle'            => 'Buenavista and Pijao',
				'description'       => 'Buenavista: Located within the mountain range stretching along the east of Armenia, and from which you can appreciate the most beautiful panoramas and sunsets, is BuenaVista. This picturesque village is surrounded by verdent coffee plantations, and invites you to enjoy the majesty of the landscapes below while sipping and tasting a rich iced coffee. This historical Quindiano town is home to San Alberto’s, an international award winning grower of its famous strain of bold but smooth Arabica bean. PIJAO: Over the crest of the range, nestled low among three or four mountain peaks, you can also discover Pijao, another beautiful little higher altitude town (and former regional guerilla stronghold in ages past). Rather ironically, it is the quietest (dare we say sleepiest) village of the entire Quindío department, but ranks nationally among the highest in quality of ‘stress free’ Colombian living. There is one café, owned by a local coffee grower, next to the church on the square that serves up the best granizado (frozen coffee) in the Quindío department. And if you are lucky, toward dusk, thousands of large squawking white birds (Gaviotas) take flight for a couple minutes and then roost in a huge tree clearly visible in the distance.',
			'short_description' => 'This picturesque villages are surrounded by verdent coffee plantations, and invites you to enjoy the majesty of the landscapes below while sipping a rich iced coffee',
				'itinerary'         => '',
				'slug_url'          => str_slug( 'Buenavista and Pijao', '-' ),
				'days'              => '8 horas',
				'price_adults'      => '125',
				'price_children'    => '62',
				'local'             => 'en',
				'type'              => 1, //activity
				'discount'          => 0, //porcentaje
				'city_id'           => 1,
				'meta_description'  => 'Buenavista and Pijao',
				'keywords'          => 'Buenavista and Pijao',
				'include'           => '',        // price include
				'suggestion'        => 'Comfortable shoes, Camera, Cap or hut',
			] );
			
			Product::create( [
				'id'                => 18,
				'tittle'            => 'Buenavista y Pijao',
				'description'       => 'Buenavista: Situado en la cordillera que se extiende a lo largo del lado este de Armenia desde donde se aprecian los más bellos panoramas y puestas de sol, se encuentra Buenavista. Este pintoresco pueblo está rodeado de verdes plantaciones de café que observarás mientras vas degustando un rico café helado y disfrutando de la majestuosidad de los paisajes que se divisan en la parte baja de este fantástico municipio. Este pueblo histórico del Quindío es el hogar del Café San Alberto, ganador de premios internacionales por su famoso grano Arabica y su suave sabor. PIJAO: A lo largo de la cima de la cordillera, enclavada entre las tres o cuatro cumbres de las montañas, se encuentra Pijao, otro hermoso y pequeño pueblo de altura (y antigua fortaleza guerrillera en épocas pasadas). Irónicamente, es la aldea más silenciosa de todo el departamento del Quindío, pero se ubica a nivel nacional entre las más altas en calidad de vida, libre de estrés en Colombia. Hay una cafetería, propiedad de un cafetalero local, junto a la iglesia en la plaza principal que sirve el mejor granizado en el departamento. Y quizás, hacia el anochecer, podrás presenciar cómo miles de grandes gaviotas emprenden vuelo durante un par de minutos y luego descansan en un enorme árbol de fácil visibilidad en la distancia.',
				'short_description' => 'Pintorescos pueblos están rodeados de verdes plantaciones de café e invita a disfrutar de la majestuosidad de los paisajes que se divisan en la parte baja mientras tomas un rico café helado.',
				'slug_url'          => str_slug( 'Buenavista y Pijao', '-' ),
				'days'              => '8 horas',
				'price_adults'      => '125',
				'price_children'    => '62',
				'local'             => 'es',
				'type'              => 1, //activity
				'discount'          => 0, //porcentaje
				'city_id'           => 1,
				'meta_description'  => 'Buenavista y Pijao',
				'keywords'          => 'Buenavista y Pijao',
				'include'           => '',        // price include
				'suggestion'        => 'Cámara, Zapatos cómodos, Gorra o sombrero',
			] );
			
			//========== Fin de las actividades ==============//
			
			
			//========== Inicio de Paquetes ==============//
			
			//Plan a less Physically Taxing 19
			Product::create( [
				'id'                => 19,
				'tittle'            => 'Plan A (Less Physically Challenging)',
				'slug_url'          => str_slug( 'Plan A (Less Physically Challenging)', '-' ),
				'days'              => '10 Days',
				'price_adults'      => 100,
				'price_children'    => 100,
				'discount'          => 10, //porcentaje
				'meta_description'  => 'Plan A (Less Physically Challenging)',
				'keywords'          => 'Plan A (Less Physically Challenging)',
				'status'            => 1,
				'local'             => 'en',
				'include'           => 'All road transportation within Colombia, English speaking guide anywhere/everywhere you wish, Daily Breakfast, Non alcoholic beverages, Souvenirs, All entrance fees for applicable activities',
				'description'       => 'This is the perfect all inclusive vacation package to Colombia for those who wish to know in depth about one of the most fascinating Latin cultures. In ten days you will learn of the rich Colombian history and heritage, be part of coffee plantations tours and tropical fruit production, and the finer points of tasting the highest grade Colombian café. You will casually hike through serene mountains, observe extensive flora/fauna, ride to your destination in classic “Willy” jeeps, and harvest your own coffee beans (in traditional garb if you like). Children as well as adults will have fun and gain direct knowledge of Quindío.  There are not language barriers you will be with a colombian bilingual travel guide ',
				'short_description' => 'This is the perfect plan for those who wish to know in depth about one of the most fascinating Latin cultures. In ten days you will learn of the rich Colombian history and heritage, coffee and tropical fruit production, and the finer points of tasting the highest grade Colombian café. You will casually hike through serene mountains, observe extensive flora/fauna, ride to your destination in classic “Willy” jeeps, and harvest your own coffee beans (in traditional garb if you like). Children as well as adults will have fun and gain direct knowledge of Quindío.',
				'itinerary'         => '
<div class="panel-group">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">
<span class="text-primary">Day 1</span> 
</h3>
</div>
<div class="panel-body text-muted">
<ul class="fa-ul">
<li><i class="fa fa-check fa-li"></i>WELCOME AT THE AIRPORT WITH FRESH JUICE AND COOKIES</li>
<li><i class="fa fa-check fa-li"></i>TRANSPORTATION TO ACCOMMODATIONS</li>
<li><i class="fa fa-check fa-li"></i>CHECK INTO ACCOMMODATIONS AND REST FOR THE NIGHT</li>
<li><i class="fa fa-check fa-li"></i>DINNER/DRINKS AT ACCOMMODATION 7pm</li>
</ul>                           
</div>
</div>
</div>
<div class="panel-group">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">
<span class="text-primary">Day 2</span> 
</h3>
</div>
<div class="panel-body text-muted">
<ul class="fa-ul">
<li><i class="fa fa-clock-o fa-li"></i>08:00 am BREAKFAST AT ACCOMMODATION</li>
<li><i class="fa fa-clock-o fa-li"></i>09:00 am CITY TOUR </li>
<li><i class="fa fa-clock-o fa-li"></i>01:00 pm LUNCH</li>
<li><i class="fa fa-clock-o fa-li"></i>03:00 pm COFFEE TASTING</li>
<li><i class="fa fa-clock-o fa-li"></i>07:00 pm DINNER</li>
</ul>                           
</div>
</div>
</div>
<div class="panel-group">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">
<span class="text-primary">Day 3</span> 
</h3>
</div>
<div class="panel-body text-muted">
<ul class="fa-ul">
<li><i class="fa fa-clock-o fa-li"></i>08:00 am BREAKFAST AT ACCOMMODATION</li>
<li><i class="fa fa-clock-o fa-li"></i>09:00 am PARQUE DEL CAFE (LUNCH INCLUDED)</li>
<li><i class="fa fa-clock-o fa-li"></i>06:00 pm RETURN ACCOMMODATIONS</li>
<li><i class="fa fa-clock-o fa-li"></i>07:00 pm DINNER AT ACCOMMODATIONS</li>
</ul>                           
</div>
</div>
</div>
<div class="panel-group">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">
<span class="text-primary">Day 4</span> 
</h3>
</div>
<div class="panel-body text-muted">
<ul class="fa-ul">
<li><i class="fa fa-clock-o fa-li"></i>08:00 am BREAKFAST AT ACCOMMODATION</li>
<li><i class="fa fa-clock-o fa-li"></i>09:00 am LA TIERRA PROMETIDA (THE PROMISSED LAND)</li>
<li><i class="fa fa-clock-o fa-li"></i>06:00 pm RETURN ACCOMMODATIONS</li>
<li><i class="fa fa-clock-o fa-li"></i>07:00 pm DINNER AT ACCOMMODATIONS</li>
</ul>                           
</div>
</div>
</div>
<div class="panel-group">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">
<span class="text-primary">Day 5</span> 
</h3>
</div>
<div class="panel-body text-muted">
<ul class="fa-ul">
<li><i class="fa fa-clock-o fa-li"></i>08:00 am BREAKFAST AT ACCOMMODATION</li>
<li><i class="fa fa-clock-o fa-li"></i>10:00 am TOUR BUENAVISTA</li>
<li><i class="fa fa-clock-o fa-li"></i>01:00 pm LUNCH</li>
<li><i class="fa fa-clock-o fa-li"></i>03:00 pm TOUR PIJAO</li>
<li><i class="fa fa-clock-o fa-li"></i>06:00 pm RETURN ACCOMMODATIONS</li>
<li><i class="fa fa-clock-o fa-li"></i>07:00 pm DINNER AT ACCOMMODATIONS</li>
</ul>                           
</div>
</div>
</div>
<div class="panel-group">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">
<span class="text-primary">Day 6</span> 
</h3>
</div>
<div class="panel-body text-muted">
<ul class="fa-ul">
<li><i class="fa fa-clock-o fa-li"></i>07:00 am BREAKFAST AT ACCOMMODATION
</li>
<li><i class="fa fa-clock-o fa-li"></i>08:00 am JARDIN BOTÁNICO (BOTANICAL GARDEN)</li>
<li><i class="fa fa-clock-o fa-li"></i>02:00 pm LUNCH </li>
<li><i class="fa fa-clock-o fa-li"></i>04:00 pm PARQUE DE LA VIDA  (LIFE PARK)</li>
<li><i class="fa fa-clock-o fa-li"></i>06:00 pm RETURN ACCOMMODATIONS ACCOMMODATIONS</li>
<li><i class="fa fa-clock-o fa-li"></i>07:00 pm DINNER AT ACCOMMODATIONS</li>
</ul>                           
</div>
</div>
</div>
<div class="panel-group">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">
<span class="text-primary">Day 7</span> 
</h3>
</div>
<div class="panel-body text-muted">
<ul class="fa-ul">
<li><i class="fa fa-clock-o fa-li"></i>08:00 am BREAKFAST AT ACCOMMODATION</li>
<li><i class="fa fa-clock-o fa-li"></i>09:00 am SALENTO, VALLE DEL COCORA </li>
<li><i class="fa fa-clock-o fa-li"></i>02:00 pm LUNCH</li>
<li><i class="fa fa-clock-o fa-li"></i>06:00 pm RETURN ACCOMMODATIONS </li>
<li><i class="fa fa-clock-o fa-li"></i>07:00 pm DINNER AT ACCOMMODATIONS</li>
</ul>                           
</div>
</div>
</div>
<div class="panel-group">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">
<span class="text-primary">Day 8</span> 
</h3>
</div>
<div class="panel-body text-muted">
<ul class="fa-ul">
<li><i class="fa fa-clock-o fa-li"></i>08:00 am BREAKFAST AT ACCOMMODATION</li>
<li><i class="fa fa-clock-o fa-li"></i>09:00 am RECUCA LUNCH INCLUDED</li>
<li><i class="fa fa-clock-o fa-li"></i>06:00 pm BARCELONA  (TRY FORCHA, KUMIS, SIROPE, PANDEBONOS AND TRADITIONAL FOOD) </li>
<li><i class="fa fa-clock-o fa-li"></i>08:00 pm RETURN ACCOMMODATIONS </li>
</ul>                           
</div>
</div>
</div>
<div class="panel-group">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">
<span class="text-primary">Day 9</span> 
</h3>
</div>
<div class="panel-body text-muted">
<ul class="fa-ul">
<li><i class="fa fa-clock-o fa-li"></i>08:00 am BREAKFAST AT ACCOMMODATION</li>
<li><i class="fa fa-clock-o fa-li"></i>10:00 am MUSEO QUIMBAYA, FILANDIA (QUIMBAYA MUSEUM)</li>
<li><i class="fa fa-clock-o fa-li"></i>01:00 pm LUNCH IN FILANDIA</li>
<li><i class="fa fa-clock-o fa-li"></i>03:00 pm TOUR IN FILANDIA AND LOOK OUT</li>
<li><i class="fa fa-clock-o fa-li"></i>06:00 pm DINNER IN FILANDIA </li>
</ul>                           
</div>
</div>
</div>
<div class="panel-group">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">
<span class="text-primary">Day 10</span> 
</h3>
</div>
<div class="panel-body text-muted">
<ul class="fa-ul">
<li><i class="fa fa-clock-o fa-li"></i>PICK UP AT THE HOTEL TO AIRPORT</li>
<li><i class="fa fa-clock-o fa-li"></i>FAREWELL BREAKFAST  (TRADITIONAL SOUVENIR) </li>
</ul>                           
</div>
</div>
</div>
',
				'type'              => 0, //package,activity
				'city_id'           => 1
			] );
			
			//Plan B Most Physically 20
			Product::create( [
				'id'                => 20,
				'tittle'            => 'Plan B (Most Physically Challenging)',
				'slug_url'          => str_slug( 'Plan B (Most Physically Challenging)', '-' ),
				'days'              => '9 Days',
				'price_adults'      => 100,
				'price_children'    => 100,
				'discount'          => 10, //porcentaje
				'meta_description'  => 'Plan B (Most Physically Challenging)',
				'keywords'          => 'Plan B (Most Physically Challenging)',
				'status'            => 1,
				'include'           => 'All road transportation within Colombia, English speaking guide anywhere/everywhere you wish, Daily Breakfast, Non alcoholic beverages, Souvenirs, All entrance fees for applicable activities',
				'local'             => 'en',
				'description'       => 'If you are looking for more adventure in Quindío,  to be in touch with nature, see some of the most beautiful places in Quindio, and also enjoy hiking above tree line (and in snow), this is your all inclusive vacation package to Colombia.',
				'short_description' => 'If you are looking for more adventure in Quindío,  to be in touch with nature, see some of the most beautiful places in Quindio, and also enjoy hiking above tree line (and in snow), this is your all inclusive vacation package to Colombia.',
				'itinerary'         => '
<div class="panel-group">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">
<span class="text-primary">Day 1</span> 
</h3>
</div>
<div class="panel-body text-muted">
<ul class="fa-ul">
<li><i class="fa fa-check fa-li"></i>WELCOME AT THE AIRPORT WITH FRESH JUICE AND COOKIES</li>
<li><i class="fa fa-check fa-li"></i>TRANSPORTATION TO ACCOMMODATIONS</li>
<li><i class="fa fa-check fa-li"></i>CHECK INTO ACCOMMODATIONS AND REST FOR THE NIGHT</li>
<li><i class="fa fa-check fa-li"></i>DINNER/DRINKS AT ACCOMMODATION 7pm</li>
</ul>                           
</div>
</div>
</div>
<div class="panel-group">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">
<span class="text-primary">Day 2</span> 
</h3>
</div>
<div class="panel-body text-muted">
<ul class="fa-ul">
<li><i class="fa fa-clock-o fa-li"></i>08:00 am BREAKFAST AT ACCOMMODATION</li>
<li><i class="fa fa-clock-o fa-li"></i>09:00 am WATERFALLS IN CORDOBA (LUNCH INCLUDED) </li>
<li><i class="fa fa-clock-o fa-li"></i>06:00 pm COFFEE TASTING AND TRADITIONAL FOOD</li>
<li><i class="fa fa-clock-o fa-li"></i>07:00 pm RETURN ACCOMMODATIONS </li>
</ul>                           
</div>
</div>
</div>
<div class="panel-group">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">
<span class="text-primary">Day 3</span> 
</h3>
</div>
<div class="panel-body text-muted">
<ul class="fa-ul">
<li><i class="fa fa-clock-o fa-li"></i>08:00 am BREAKFAST AT ACCOMMODATION</li>
<li><i class="fa fa-clock-o fa-li"></i>09:00 am PANACA  (LUNCH INCLUDED)</li>
<li><i class="fa fa-clock-o fa-li"></i>06:00 pm RETURN ACCOMMODATIONS</li>
<li><i class="fa fa-clock-o fa-li"></i>07:00 pm DINNER AT ACCOMMODATION</li>
</ul>                           
</div>
</div>
</div>
<div class="panel-group">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">
<span class="text-primary">Day 4</span> 
</h3>
</div>
<div class="panel-body text-muted">
<ul class="fa-ul">
<li><i class="fa fa-clock-o fa-li"></i>08:00 am BREAKFAST AT ACCOMMODATION</li>
<li><i class="fa fa-clock-o fa-li"></i>09:00 am BALSAJE ACROSS A RIVER CALLED "La Vieja"  (LUNCH INCLUDED)</li>
<li><i class="fa fa-clock-o fa-li"></i>05:00 pm RETURN ACCOMMODATIONS</li>
<li><i class="fa fa-clock-o fa-li"></i>07:00 pm DINNER AT ACCOMMODATION</li>
<li><i class="fa fa-clock-o fa-li"></i>08:00 pm PICK UP TO PEREIRA</li>
<li><i class="fa fa-clock-o fa-li"></i>09:00 pm CHECK IN AT HOTEL IN PEREIRA</li>
</ul>                           
</div>
</div>
</div>
<div class="panel-group">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">
<span class="text-primary">Day 5</span> 
</h3>
</div>
<div class="panel-body text-muted">
<ul class="fa-ul">
<li><i class="fa fa-clock-o fa-li"></i>05:00 am PICK UP TO START THE ADVENTURE</li>
<li><i class="fa fa-clock-o fa-li"></i>08:00 am BREAKFAST AT A FARM ON THE WAY</li>
<li><i class="fa fa-clock-o fa-li"></i>09:00 am CONTINUE THE TRANSPORT</li>
<li><i class="fa fa-clock-o fa-li"></i>10:00 am STARTING THE HIKING FOR 2.5 HOURS</li>
<li><i class="fa fa-clock-o fa-li"></i>12:30 pm REACH THE NEVADO SANTA ISABEL</li>
<li><i class="fa fa-clock-o fa-li"></i>01:00 pm STARTING THE DESCENT FOR 2 HOURS THEN BY CAR</li>
<li><i class="fa fa-clock-o fa-li"></i>03:00 pm LUNCH AT A FARM ON THE WAY</li>
<li><i class="fa fa-clock-o fa-li"></i>05:00 pm CHECK IN AT A FARM</li>
<li><i class="fa fa-clock-o fa-li"></i>07:00 pm DINNER AT A FARM</li>
</ul>                           
</div>
</div>
</div>
<div class="panel-group">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">
<span class="text-primary">Day 6</span> 
</h3>
</div>
<div class="panel-body text-muted">
<ul class="fa-ul">
<li><i class="fa fa-clock-o fa-li"></i>06:00 am START THE ADVENTURE TO THE OTUN LAGOON</li>
<li><i class="fa fa-clock-o fa-li"></i>08:00 am BREAKFAST AT A FARM ON THE WAY</li>
<li><i class="fa fa-clock-o fa-li"></i>09:00 am CONTINUE THE TRANSPORT</li>
<li><i class="fa fa-clock-o fa-li"></i>10:00 am STARTING THE HIKING FOR 2.5 HOURS</li>
<li><i class="fa fa-clock-o fa-li"></i>12:00 m  REACH THE OTUN LAGOON</li>
<li><i class="fa fa-clock-o fa-li"></i>01:00 pm STARTING THE DESCENT FOR 2 HOURS THEN BY CAR</li>
<li><i class="fa fa-clock-o fa-li"></i>03:00 pm LUNCH AT A FARM ON THE WAY</li>
<li><i class="fa fa-clock-o fa-li"></i>04:00 pm START TRAVELING TO SANTA ROSA, RISARALDA</li>
<li><i class="fa fa-clock-o fa-li"></i>06:00 pm CHECK IN AT THE HOTEL (SPRING WATER)</li>
</ul>                           
</div>
</div>
</div>
<div class="panel-group">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">
<span class="text-primary">Day 7</span> 
</h3>
</div>
<div class="panel-body text-muted">
<ul class="fa-ul">
<li><i class="fa fa-clock-o fa-li"></i>ENJOY THE WONDERFUL SPRING WATERS ALL DAY  (BREAKFAST, LUNCH AND DINNER INCLUDED)</li>
</ul>                           
</div>
</div>
</div>
<div class="panel-group">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">
<span class="text-primary">Day 8</span> 
</h3>
</div>
<div class="panel-body text-muted">
<ul class="fa-ul">
<li><i class="fa fa-clock-o fa-li"></i>ENJOY THE PLACE FREELY UNTIL CHECK OUT AT 1 PM</li>
<li><i class="fa fa-clock-o fa-li"></i>01:30 pm LUNCH</li>
<li><i class="fa fa-clock-o fa-li"></i>03:00 pm TRAVEL TO ARMENIA </li>
<li><i class="fa fa-clock-o fa-li"></i>06:00 pm CHECK IN AT THE HOTEL IN ARMENIA</li>
<li><i class="fa fa-clock-o fa-li"></i>07:00 pm DINNER ACCOMMODATIONS</li>
</ul>                           
</div>
</div>
</div>
<div class="panel-group">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">
<span class="text-primary">Day 9</span> 
</h3>
</div>
<div class="panel-body text-muted">
<ul class="fa-ul">
<li><i class="fa fa-clock-o fa-li"></i>PICK UP AT THE HOTEL TO AIRPORT </li>
<li><i class="fa fa-clock-o fa-li"></i>FAREWELL  (TRADITIONAL SOUVENIR)</li>
</ul>                           
</div>
</div>
</div>
',
				'type'              => 0, //package,activity
				'city_id'           => 1
			] );
			
			//Plan C Outdoors Tour 21
			Product::create( [
				'id'                => 21,
				'tittle'            => 'Plan C (Outdoors Tour but less challenging)',
				'slug_url'          => str_slug( 'Plan C (Outdoors Tour but less challenging)', '-' ),
				'days'              => '10 Days',
				'price_adults'      => 100,
				'price_children'    => 100,
				'discount'          => 10, //porcentaje
				'meta_description'  => 'Plan C (Outdoors Tour but less challenging)',
				'keywords'          => 'Plan C (Outdoors Tour but less challenging)',
				'status'            => 1,
				'include'           => 'All road transportation within Colombia, English speaking guide anywhere/everywhere you wish, Daily Breakfast, Non alcoholic beverages, Souvenirs, All entrance fees for applicable activities',
				'local'             => 'en',
				'description'       => 'This less strenuous plan will allow you to have the continual contact with natural landscapes, yet also tasting the best coffee in the world, but also to camp out in exotic settings, enjoy water sports at one of the largest and more beautiful lakes in Colombia and not miss the opportunity to see monkeys living their natural habitat.  You will have an excellent family vacacions with a bilingual guide with this all inclusive vacation package to Colombia',
				'short_description' => 'This less strenuous plan will allow you to have the continual contact with natural landscapes, yet also tasting the best coffee in the world, but also to camp out in exotic settings, enjoy water sports at one of the largest and more beautiful lakes in Colombia and not miss the opportunity to see monkeys living their natural habitat.  You will have an excellent family vacacions with a bilingual guide with this all inclusive vacation package to Colombia',
				'itinerary'         => '
<div class="panel-group">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">
<span class="text-primary">Day 1</span> 
</h3>
</div>
<div class="panel-body text-muted">
<ul class="fa-ul">
<li><i class="fa fa-check fa-li"></i>WELCOME AT THE AIRPORT WITH FRESH JUICE AND COOKIES</li>
<li><i class="fa fa-check fa-li"></i>TRANSPORTATION TO ACCOMMODATIONS</li>
<li><i class="fa fa-check fa-li"></i>CHECK INTO ACCOMMODATIONS AND REST FOR THE NIGHT</li>
<li><i class="fa fa-check fa-li"></i>DINNER/DRINKS AT ACCOMMODATION 7pm</li>
</ul>                           
</div>
</div>
</div>
<div class="panel-group">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">
<span class="text-primary">Day 2</span> 
</h3>
</div>
<div class="panel-body text-muted">
<ul class="fa-ul">
<li><i class="fa fa-clock-o fa-li"></i>08:00 am BREAKFAST AT ACCOMMODATION</li>
<li><i class="fa fa-clock-o fa-li"></i>09:00 am PANORAMIC JEEP AROUND TOWNS </li>
<li><i class="fa fa-clock-o fa-li"></i>01:00 pm LUNCH </li>
<li><i class="fa fa-clock-o fa-li"></i>03:00 pm PANORAMIC JEEP AROUND TOWNS</li>
<li><i class="fa fa-clock-o fa-li"></i>07:00 pm DINNER ON THE WAY</li>
<li><i class="fa fa-clock-o fa-li"></i>08:00 pm RETURN ACCOMMODATION</li>
</ul>                           
</div>
</div>
</div>
<div class="panel-group">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">
<span class="text-primary">Day 3</span> 
</h3>
</div>
<div class="panel-body text-muted">
<ul class="fa-ul">
<li><i class="fa fa-clock-o fa-li"></i>08:00 am BREAKFAST AT ACCOMMODATION</li>
<li><i class="fa fa-clock-o fa-li"></i>09:00 am NATURE WALK CALARCA </li>
<li><i class="fa fa-clock-o fa-li"></i>01:00 pm PICNIC LUNCH IN PLATANO OR CONGO LEAVES</li>
<li><i class="fa fa-clock-o fa-li"></i>04:00 pm RETURN ACCOMMODATIONS</li>
<li><i class="fa fa-clock-o fa-li"></i>07:00 pm DINNER ACCOMMODATIONS</li>
</ul>                           
</div>
</div>
</div>

<div class="panel-group">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">
<span class="text-primary">Day 4</span> 
</h3>
</div>
<div class="panel-body text-muted">
<ul class="fa-ul">
<li><i class="fa fa-clock-o fa-li"></i>06:00 am CHECK OUT</li>
<li><i class="fa fa-clock-o fa-li"></i>07:00 am EL PALACIO DEL BARBAS </li>
<li><i class="fa fa-clock-o fa-li"></i>08:00 am BREAKFAST AT EL PALACIO DEL BARBAS</li>
<li><i class="fa fa-clock-o fa-li"></i>09:00 am STARTING THE HIKING TO LOOK FOR MONKEYS</li>
<li><i class="fa fa-clock-o fa-li"></i>02:00 pm RETURN TO FILANDIA</li>
<li><i class="fa fa-clock-o fa-li"></i>02:30 pm LUNCH </li>
<li><i class="fa fa-clock-o fa-li"></i>04:30 pm WALKING AROUND FILANDIA AND CUP OF COFFEE </li>
<li><i class="fa fa-clock-o fa-li"></i>06:00 pm TRAVEL TO CAMPING MONTEROCA </li>
<li><i class="fa fa-clock-o fa-li"></i>06:45 pm CHECK IN AT MONTEROCA AND DINNER</li>
</ul>                           
</div>
</div>
</div>
<div class="panel-group">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">
<span class="text-primary">Day 5</span> 
</h3>
</div>
<div class="panel-body text-muted">
<ul class="fa-ul">
<li><i class="fa fa-clock-o fa-li"></i>ENJOY THE DAY WITH THE DIFFERENT ACTIVITIES IN MONTEROCA, BREAKFAST,LUNCH AND DINNER INCLUDED</li>
</ul>                           
</div>
</div>
</div>
<div class="panel-group">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">
<span class="text-primary">Day 6</span> 
</h3>
</div>
<div class="panel-body text-muted">
<ul class="fa-ul">
<li><i class="fa fa-clock-o fa-li"></i>ENJOY THE MORNING AT MONTEROCA. BREAKFAST AND LUNCH INCLUDED. CHECK OUT AT 1
</li>
<li><i class="fa fa-clock-o fa-li"></i>02:00 pm TRAVELING TO CALIMA LAKE</li>
<li><i class="fa fa-clock-o fa-li"></i>05:30 pm CHECK IN AT CALIMA LAKE HOTEL</li>
</ul>                           
</div>
</div>
</div>
<div class="panel-group">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">
<span class="text-primary">Day 7</span> 
</h3>
</div>
<div class="panel-body text-muted">
<ul class="fa-ul">
<li><i class="fa fa-clock-o fa-li"></i>ENJOY THE DAY WITH THE DIFFERENT ACTIVITIES AT CALIMA LAKE, BREAKFAST,LUNCH AND DINNER INCLUDED</li>
</ul>                           
</div>
</div>
</div>
<div class="panel-group">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">
<span class="text-primary">Day 8</span> 
</h3>
</div>
<div class="panel-body text-muted">
<ul class="fa-ul">
<li><i class="fa fa-clock-o fa-li"></i>ENJOY THE MORNING AT CALIMA LAKE. BREAKFAST AND LUNCH INCLUDED. CHECK OUT AT 1</li>
<li><i class="fa fa-clock-o fa-li"></i>02:00 pm  RETURN ACCOMMODATIONS TO ARMENIA</li>
<li><i class="fa fa-clock-o fa-li"></i>05:30 pm  CHECK IN AT THE HOTEL</li>
<li><i class="fa fa-clock-o fa-li"></i>07:00 pm DINNER AT THE ACCOMMODATIONS</li>
</ul>                           
</div>
</div>
</div>
<div class="panel-group">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">
<span class="text-primary">Day 9</span> 
</h3>
</div>
<div class="panel-body text-muted">
<ul class="fa-ul">
<li><i class="fa fa-clock-o fa-li"></i>PICK UP AT THE HOTEL TO AIRPORT</li>
<li><i class="fa fa-clock-o fa-li"></i>FAREWELL  (TRADITIONAL SOUVENIR)</li>
</ul>                           
</div>
</div>
</div>
',
				'type'              => 0, //package,activity
				'city_id'           => 1
			] );
			
			//22
			Product::create( [
				'id'                => 22,
				'tittle'            => 'Plan A Menos Exigencia Física',
				'slug_url'          => str_slug( 'Plan A Menos Exigencia Física', '-' ),
				'days'              => '10 Días',
				'price_adults'      => 100,
				'price_children'    => 100,
				'discount'          => 10, //porcentaje
				'meta_description'  => 'Plan A Menos Exigencia Física',
				'keywords'          => 'Plan A Menos Exigencia Física',
				'status'            => 1,
				'local'             => 'es',
				'include'           => 'Transporte doméstico desde su arribo en el aeropuerto Armenia hasta su salida en Armenia (hotel- todos los sitios del plan-hotel),Guía bilingüe  (español - inglés),Desayunos,2 comidas por día,Bebidas,Aperitivos,Recuerdo,Todas las entradas',
				'description'       => 'Este es el paquete vacacional todo incluído a Colombia perfecto para gente que desea conocer una de las más interesantes culturas latinas, su historia, visitar sus cultivos de café y así degustar el mejor café colombiano, suaves caminatas rodeado de hermosos paisajes, flora y fauna, patrimonio cultural, transporte tradicional de los caficultores, recoger café, vestirse con la ropa tradicional de los recolectores. Niños y adultos se divertirán y aprenderán mucho. La diferencia idiomática no será una barrera, pues estará siempre acompañado de un interprete bilingüe.',
				'short_description' => 'Este es el paquete vacacional todo incluído a Colombia perfecto para gente que desea conocer una de las más interesantes culturas latinas, su historia, visitar sus cultivos de café y así degustar el mejor café colombiano, suaves caminatas rodeado de hermosos paisajes, flora y fauna, patrimonio cultural, transporte tradicional de los caficultores, recoger café, vestirse con la ropa tradicional de los recolectores. Niños y adultos se divertirán y aprenderán mucho. La diferencia idiomática no será una barrera, pues estará siempre acompañado de un interprete bilingüe.',
				'itinerary'         => '
<div class="panel-group">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">
<span class="text-primary">Día 1</span> 
</h3>
</div>
<div class="panel-body text-muted">
<ul class="fa-ul">
<li><i class="fa fa-check fa-li"></i>BIENVENIDA EN EL AEROPUERTO CON JUGOS NATURALES Y GALLETAS</li>
<li><i class="fa fa-check fa-li"></i>TRANSPORTE AL ALOJAMIENTO</li>
<li><i class="fa fa-check fa-li"></i>CHECK IN EN EL HOTEL</li>
<li><i class="fa fa-check fa-li"></i>CENA / TRAGO EN EL HOTEL Y DESCANSO TODA LA NOCHE</li>
</ul>                           
</div>
</div>
</div>
<div class="panel-group">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">
<span class="text-primary">Día 2</span> 
</h3>
</div>
<div class="panel-body text-muted">
<ul class="fa-ul">
<li><i class="fa fa-clock-o fa-li"></i>08:00 am DESAYUNO EN EL HOTEL</li>
<li><i class="fa fa-clock-o fa-li"></i>09:00 am CITY TOUR </li>
<li><i class="fa fa-clock-o fa-li"></i>01:00 pm ALMUERZO </li>
<li><i class="fa fa-clock-o fa-li"></i>03:00 pm CATA DE CAFÉ </li>
<li><i class="fa fa-clock-o fa-li"></i>07:00 pm CENA</li>
</ul>                           
</div>
</div>
</div>
<div class="panel-group">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">
<span class="text-primary">Día 3</span> 
</h3>
</div>
<div class="panel-body text-muted">
<ul class="fa-ul">
<li><i class="fa fa-clock-o fa-li"></i>08:00 am DESAYUNO EN EL HOTEL 
</li>
<li><i class="fa fa-clock-o fa-li"></i>09:00 am PARQUE DEL CAFE (ALMUERZO INCLUÍDO)</li>
<li><i class="fa fa-clock-o fa-li"></i>06:00 pm REGRESO AL HOTEL </li>
<li><i class="fa fa-clock-o fa-li"></i>07:00 pm CENA EN EL HOTEL</li>
</ul>                           
</div>
</div>
</div>
<div class="panel-group">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">
<span class="text-primary">Día 4</span> 
</h3>
</div>
<div class="panel-body text-muted">
<ul class="fa-ul">
<li><i class="fa fa-clock-o fa-li"></i>08:00 am DESAYUNO EN EL HOTEL</li>
<li><i class="fa fa-clock-o fa-li"></i>09:00 am LA TIERRA PROMETIDA (ALMUERZO INCLUÍDO)</li>
<li><i class="fa fa-clock-o fa-li"></i>06:00 pm REGRESO AL HOTEL </li>
<li><i class="fa fa-clock-o fa-li"></i>07:00 pm CENA EN EL HOTEL</li>
</ul>                           
</div>
</div>
</div>
<div class="panel-group">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">
<span class="text-primary">Día 5</span> 
</h3>
</div>
<div class="panel-body text-muted">
<ul class="fa-ul">
<li><i class="fa fa-clock-o fa-li"></i>08:00 am DESAYUNO EN EL HOTEL</li>
<li><i class="fa fa-clock-o fa-li"></i>10:00 am TOUR BUENAVISTA</li>
<li><i class="fa fa-clock-o fa-li"></i>01:00 pm ALMUERZO</li>
<li><i class="fa fa-clock-o fa-li"></i>03:00 pm TOUR PIJAO</li>
<li><i class="fa fa-clock-o fa-li"></i>06:00 pm REGRESO AL HOTEL </li>
<li><i class="fa fa-clock-o fa-li"></i>07:00 pm CENA EN EL HOTEL</li>
</ul>                           
</div>
</div>
</div>
<div class="panel-group">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">
<span class="text-primary">Día 6</span> 
</h3>
</div>
<div class="panel-body text-muted">
<ul class="fa-ul">
<li><i class="fa fa-clock-o fa-li"></i>07:00 am DESAYUNO EN EL HOTEL </li>
<li><i class="fa fa-clock-o fa-li"></i>08:00 am JARDIN BOTÁNICO</li>
<li><i class="fa fa-clock-o fa-li"></i>02:00 pm ALMUERZO</li>
<li><i class="fa fa-clock-o fa-li"></i>04:00 pm PARQUE DE LA VIDA  </li>
<li><i class="fa fa-clock-o fa-li"></i>06:00 pm REGRESO AL HOTEL </li>
<li><i class="fa fa-clock-o fa-li"></i>07:00 pm CENA EN EL HOTEL</li>
</ul>                           
</div>
</div>
</div>
<div class="panel-group">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">
<span class="text-primary">Día 7</span> 
</h3>
</div>
<div class="panel-body text-muted">
<ul class="fa-ul">
<li><i class="fa fa-clock-o fa-li"></i>08:00 am DESAYUNO EN EL HOTEL </li>
<li><i class="fa fa-clock-o fa-li"></i>09:00 am SALENTO, VALLE DEL COCORA</li>
<li><i class="fa fa-clock-o fa-li"></i>02:00 pm ALMUERZO </li>
<li><i class="fa fa-clock-o fa-li"></i>06:00 pm REGRESO AL HOTEL </li>
<li><i class="fa fa-clock-o fa-li"></i>07:00 pm CENA EN EL HOTEL</li>
</ul>                           
</div>
</div>
</div>
<div class="panel-group">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">
<span class="text-primary">Día 8</span> 
</h3>
</div>
<div class="panel-body text-muted">
<ul class="fa-ul">
<li><i class="fa fa-clock-o fa-li"></i>08:00 am DESAYUNO EN EL HOTEL</li>
<li><i class="fa fa-clock-o fa-li"></i>09:00 am RECUCA ALMUERZO INCLUIDO</li>
<li><i class="fa fa-clock-o fa-li"></i>06:00 pm BARCELONA  (PRUEBA FORCHA, KUMIS, SIROPE, PANDEBONOS Y COMIDA TRADICIONAL) </li>
<li><i class="fa fa-clock-o fa-li"></i>08:00 pm REGRESO AL HOTEL</li>
</ul>                           
</div>
</div>
</div>
<div class="panel-group">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">
<span class="text-primary">Día 9</span> 
</h3>
</div>
<div class="panel-body text-muted">
<ul class="fa-ul">
<li><i class="fa fa-clock-o fa-li"></i>08:00 am DESAYUNO EN EL HOTEL</li>
<li><i class="fa fa-clock-o fa-li"></i>10:00 am MUSEO QUIMBAYA Y FILANDIA</li>
<li><i class="fa fa-clock-o fa-li"></i>01:00 pm ALMUERZO EN FILANDIA</li>
<li><i class="fa fa-clock-o fa-li"></i>03:00 pm TOUR EN FILANDIA Y MIRADOR DE FILANDIA</li>
<li><i class="fa fa-clock-o fa-li"></i>06:00 pm CENA IN FILANDIA</li>
</ul>                           
</div>
</div>
</div>
<div class="panel-group">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">
<span class="text-primary">Día 10</span> 
</h3>
</div>
<div class="panel-body text-muted">
<ul class="fa-ul">
<li><i class="fa fa-clock-o fa-li"></i>SALIR DEL HOTEL AL AEROPUERTO</li>
<li><i class="fa fa-clock-o fa-li"></i>DESAYUNO DE DESPEDIDA (SOUVENIR TRADICIONAL)</li>
</ul>                           
</div>
</div>
</div>
',
				'type'              => 0, //package,activity
				'city_id'           => 1
			] );
			//23
			Product::create( [
				'id'                => 23,
				'tittle'            => 'Plan B Más actividad Física',
				'slug_url'          => str_slug( 'Plan B Más actividad Física', '-' ),
				'days'              => '9 Días',
				'price_adults'      => 100,
				'price_children'    => 100,
				'discount'          => 10, //porcentaje
				'meta_description'  => 'Plan B Más actividad Física',
				'keywords'          => 'Plan B Más actividad Física',
				'status'            => 1,
				'local'             => 'es',
				'include'           => 'Transporte doméstico desde su arribo en el aeropuerto Armenia hasta su salida en Armenia (hotel- todos los sitios del plan-hotel),Guía bilingüe  (español - inglés),Desayunos,2 comidas por día,Bebidas,Aperitivos,Recuerdo,Todas las entradas',
				'description'       => 'Si está buscando más aventura en el Quindío, estar en contacto con la naturaleza y ver algunos de los sitios más bellos en el área cafetera además disfruta caminar, este es su  paquete vacacional todo incluido a Colombia para usted.',
				'short_description' => 'Si está buscando más aventura, estar en contacto con la naturaleza y ver algunos de los sitios más bellos en el área cafetera además disfruta caminar, este es el plan perfecto para usted',
				'itinerary'         => '
<div class="panel-group">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">
<span class="text-primary">Día 1</span> 
</h3>
</div>
<div class="panel-body text-muted">
<ul class="fa-ul">
<li><i class="fa fa-check fa-li"></i>BIENVENIDA EN EL AEROPUERTO CON JUGOS NATURALES Y GALLETAS</li>
<li><i class="fa fa-check fa-li"></i>TRANSPORTE AL ALOJAMIENTO</li>
<li><i class="fa fa-check fa-li"></i>CHECK IN EN EL HOTEL</li>
<li><i class="fa fa-check fa-li"></i>CENA / TRAGO EN EL HOTEL Y DESCANSO TODA LA NOCHE</li>
</ul>                           
</div>
</div>
</div>
<div class="panel-group">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">
<span class="text-primary">Día 2</span> 
</h3>
</div>
<div class="panel-body text-muted">
<ul class="fa-ul">
<li><i class="fa fa-clock-o fa-li"></i>08:00 am DESAYUNO EN EL HOTEL</li>
<li><i class="fa fa-clock-o fa-li"></i>09:00 am CASCADAS EN CORDOBA (ALMUERZO INCLUÍDO) </li>
<li><i class="fa fa-clock-o fa-li"></i>06:00 pm CATA DE CAFÉ Y COMIDA TRADICIONAL</li>
<li><i class="fa fa-clock-o fa-li"></i>07:00 pm REGRESO AL HOTEL</li>
</ul>                           
</div>
</div>
</div>
<div class="panel-group">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">
<span class="text-primary">Día 3</span> 
</h3>
</div>
<div class="panel-body text-muted">
<ul class="fa-ul">
<li><i class="fa fa-clock-o fa-li"></i>08:00 am DESAYUNO EN EL HOTEL</li>
<li><i class="fa fa-clock-o fa-li"></i>09:00 am PANACA  (ALMUERZO INCLUÍDO)</li>
<li><i class="fa fa-clock-o fa-li"></i>06:00 pm REGRESO AL HOTEL </li>
<li><i class="fa fa-clock-o fa-li"></i>07:00 pm CENA EN EL HOTEL</li>
</ul>                           
</div>
</div>
</div>
<div class="panel-group">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">
<span class="text-primary">Día 4</span> 
</h3>
</div>
<div class="panel-body text-muted">
<ul class="fa-ul">
<li><i class="fa fa-clock-o fa-li"></i>08:00 am DESAYUNO EN EL HOTEL</li>
<li><i class="fa fa-clock-o fa-li"></i>09:00 am BALSAJE EN EL RIVER "La Vieja" (ALMUERZO INCLUÍDO)</li>
<li><i class="fa fa-clock-o fa-li"></i>06:00 pm REGRESO AL HOTEL </li>
<li><i class="fa fa-clock-o fa-li"></i>07:00 pm CENA EN EL HOTEL</li>
<li><i class="fa fa-clock-o fa-li"></i>08:00 pm SALIR DEL HOTEL DESTINO A PEREIRA</li>
<li><i class="fa fa-clock-o fa-li"></i>09:00 pm CHECK EN EL  HOTEL EN PEREIRA</li>
</ul>                           
</div>
</div>
</div>
<div class="panel-group">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">
<span class="text-primary">Día 5</span> 
</h3>
</div>
<div class="panel-body text-muted">
<ul class="fa-ul">
<li><i class="fa fa-clock-o fa-li"></i>05:00 am SALIR DEL HOTEL PARA INICIAR LA AVENTURA </li>
<li><i class="fa fa-clock-o fa-li"></i>08:00 am DESAYUNO </li>
<li><i class="fa fa-clock-o fa-li"></i>09:00 am CONTINUAR EN EL VEHÍCULO </li>
<li><i class="fa fa-clock-o fa-li"></i>10:00 am INICIAR LA CAMINADA POR 2.5 HORAS</li>
<li><i class="fa fa-clock-o fa-li"></i>12:30 pm LLEGAMOS AL NEVADO SANTA ISABEL</li>
<li><i class="fa fa-clock-o fa-li"></i>01:00 pm INICIAR EL DESCENTO POR 2 HORAS, DESPUÉS EN VEHÍCULO </li>
<li><i class="fa fa-clock-o fa-li"></i>03:00 pm ALMORZAR EN UNA FINCA EN EL CAMINO</li>
<li><i class="fa fa-clock-o fa-li"></i>05:00 pm CHECK IN EN UNA FINCA </li>
<li><i class="fa fa-clock-o fa-li"></i>07:00 pm CENA EN LA FINCA</li>
</ul>                           
</div>
</div>
</div>
<div class="panel-group">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">
<span class="text-primary">Día 6</span> 
</h3>
</div>
<div class="panel-body text-muted">
<ul class="fa-ul">
<li><i class="fa fa-clock-o fa-li"></i>06:00 am INICIAR LA AVENTURA HACIA LA LAGUNA DEL OTÚN</li>
<li><i class="fa fa-clock-o fa-li"></i>08:00 am DESAYUNO EN UNA FINCA EN EL CAMINO</li>
<li><i class="fa fa-clock-o fa-li"></i>09:00 am CONTINUAR EN TRANSPORTE </li>
<li><i class="fa fa-clock-o fa-li"></i>10:00 am INICIAR LA CAMINADA POR 2.5 HORAS</li>
<li><i class="fa fa-clock-o fa-li"></i>12:00 m  LLEGAR A LA LAGUNA DEL OTÚN</li>
<li><i class="fa fa-clock-o fa-li"></i>01:00 pm INICIAR EL DESCENSO POR 2 HORAS, DESPUÉS EN VEHÍCULO </li>
<li><i class="fa fa-clock-o fa-li"></i>03:00 pm ALMUERZO EN UNA FINCA EN LA CAMINO</li>
<li><i class="fa fa-clock-o fa-li"></i>04:00 pm INICIAR EL VIAJE A SANTA ROSA, RISARALDA</li>
<li><i class="fa fa-clock-o fa-li"></i>06:00 pm CHECK IN EN EL HOTEL (AGUAS TERMALES)</li>
</ul>                           
</div>
</div>
</div>
<div class="panel-group">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">
<span class="text-primary">Día 7</span> 
</h3>
</div>
<div class="panel-body text-muted">
<ul class="fa-ul">
<li><i class="fa fa-clock-o fa-li"></i>DISFRUTA LAS MARAVILLOSAS AGUAS TERMALES Y ACTIVIDADES (DESAYUNO, ALMUERZO Y CENA INCLUIDAS)</li>
</ul>                           
</div>
</div>
</div>
<div class="panel-group">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">
<span class="text-primary">Día 8</span> 
</h3>
</div>
<div class="panel-body text-muted">
<ul class="fa-ul">
<li><i class="fa fa-clock-o fa-li"></i>DISFRUTA EL LUGAR HASTA LA 1PM (BREAKFAST)</li>
<li><i class="fa fa-clock-o fa-li"></i>01:30 pm ALMUERZO </li>
<li><i class="fa fa-clock-o fa-li"></i>03:00 pm VIAJAR A ARMENIA </li>
<li><i class="fa fa-clock-o fa-li"></i>06:00 pm CHECK IN EN EL  HOTEL EN ARMENIA</li>
<li><i class="fa fa-clock-o fa-li"></i>07:00 pm CENA EN EL HOTEL</li>
</ul>                           
</div>
</div>
</div>
<div class="panel-group">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">
<span class="text-primary">Día 9</span> 
</h3>
</div>
<div class="panel-body text-muted">
<ul class="fa-ul">
<li><i class="fa fa-clock-o fa-li"></i>DSALIR DEL HOTEL AL AEROPUERTO  
</li>
<li><i class="fa fa-clock-o fa-li"></i>DESAYUNO DE DESPEDIDA (SOUVENIR TRADICIONAL)</li>
</ul>                           
</div>
</div>
</div>
',
				'type'              => 0, //package,activity
				'city_id'           => 1
			] );
			//24
			Product::create( [
				'id'                => 24,
				'tittle'            => 'Plan C',
				'slug_url'          => str_slug( 'Plan C', '-' ),
				'days'              => '9 Días',
				'price_adults'      => 100,
				'price_children'    => 100,
				'discount'          => 10, //porcentaje
				'meta_description'  => 'Plan C',
				'keywords'          => 'Plan C',
				'status'            => 1,
				'local'             => 'es',
				'include'           => 'Transporte doméstico desde su arribo en el aeropuerto Armenia hasta su salida en Armenia (hotel- todos los sitios del plan-hotel),Guía bilingüe  (español - inglés),Desayunos,2 comidas por día,Bebidas,Aperitivos,Recuerdo,Todas las entradas',
				'description'       => 'Este plan te permitirá vivir unas excelentes vacaciones familiares acompañado de un guía  bilingüe, gracias a su minucioso diseño usted podrá   tener más contacto con paisajes montañosos, disfrutar el mejor café pero también acampar en maravillosos y exóticos lugares, además de difrutar deportes acuáticos alrededor de una de los más hermosos lagos en Colombia y no perderas la oportunidad de ver monos aulladores viviendo su vida natural, con este paquete vacacional todo incluido.',
				'short_description' => 'Este plan te permitirá vivir unas excelentes vacaciones familiares acompañado de un guía  bilingüe, gracias a su minucioso diseño usted podrá   tener más contacto con paisajes montañosos, disfrutar el mejor café pero también acampar en maravillosos y exóticos lugares, además de difrutar deportes acuáticos alrededor de una de los más hermosos lagos en Colombia y no perderas la oportunidad de ver monos aulladores viviendo su vida natural, con este paquete vacacional todo incluido.',
				'itinerary'         => '
<div class="panel-group">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">
<span class="text-primary">Día 1</span> 
</h3>
</div>
<div class="panel-body text-muted">
<ul class="fa-ul">
<li><i class="fa fa-check fa-li"></i>BIENVENIDA EN EL AEROPUERTO CON JUGOS NATURALES Y GALLETAS</li>
<li><i class="fa fa-check fa-li"></i>TTRANSPORTE AL ALOJAMIENTO</li>
<li><i class="fa fa-check fa-li"></i>CHECK IN EN EL HOTEL</li>
<li><i class="fa fa-check fa-li"></i>CENA / TRAGO EN EL HOTEL Y DESCANSO TODA LA NOCHE</li>
</ul>                           
</div>
</div>
</div>
<div class="panel-group">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">
<span class="text-primary">Día 2</span> 
</h3>
</div>
<div class="panel-body text-muted">
<ul class="fa-ul">
<li><i class="fa fa-clock-o fa-li"></i>08:00 am DESAYUNO EN EL HOTEL</li>
<li><i class="fa fa-clock-o fa-li"></i>09:00 am JEEP PANORÁMICO ALREDEDOR DE PUEBLOS </li>
<li><i class="fa fa-clock-o fa-li"></i>01:00 pm ALMUERZO </li>
<li><i class="fa fa-clock-o fa-li"></i>03:00 pm JEEP PANORÁMICO ALREDEDOR DE PUEBLOS </li>
<li><i class="fa fa-clock-o fa-li"></i>07:00 pm CENA EN EL CAMINO </li>
<li><i class="fa fa-clock-o fa-li"></i>08:00 pm REGRESO AL HOTEL</li>
</ul>                           
</div>
</div>
</div>
<div class="panel-group">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">
<span class="text-primary">Día 3</span> 
</h3>
</div>
<div class="panel-body text-muted">
<ul class="fa-ul">
<li><i class="fa fa-clock-o fa-li"></i>08:00 am DESAYUNO EN EL HOTEL</li>
<li><i class="fa fa-clock-o fa-li"></i>09:00 am CAMINATA ECOLOGICA EN CALARCÁ </li>
<li><i class="fa fa-clock-o fa-li"></i>01:00 pm PICNIC, ALMUERZO EN HOJA DE PLATANO</li>
<li><i class="fa fa-clock-o fa-li"></i>04:00 pm REGRESO AL HOTEL</li>
<li><i class="fa fa-clock-o fa-li"></i>07:00 pm CENA EN EL HOTEL</li>
</ul>                           
</div>
</div>
</div>
<div class="panel-group">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">
<span class="text-primary">Día 4</span> 
</h3>
</div>
<div class="panel-body text-muted">
<ul class="fa-ul">
<li><i class="fa fa-clock-o fa-li"></i>06:00 am CHECK OUT</li>
<li><i class="fa fa-clock-o fa-li"></i>07:00 am EL PALACIO DEL BARBAS </li>
<li><i class="fa fa-clock-o fa-li"></i>08:00 am DESAYUNO EN EL PALACIO DEL BARBAS</li>
<li><i class="fa fa-clock-o fa-li"></i>09:00 am INICIA LA TRAVESÍA A BUSCAR LOS MONOS AULLADORES </li>
<li><i class="fa fa-clock-o fa-li"></i>02:00 pm RETURN TO FILANDIA</li>
<li><i class="fa fa-clock-o fa-li"></i>02:30 pm ALMUERZO </li>
<li><i class="fa fa-clock-o fa-li"></i>04:30 pm CAMINAR ALREDEDOR DE FILANDIA Y TOMAR UN CAFÉ</li>
<li><i class="fa fa-clock-o fa-li"></i>06:45 pm CHECK IN EN MONTEROCA AND DINNER</li>
</ul>                           
</div>
</div>
</div>
<div class="panel-group">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">
<span class="text-primary">Día 5</span> 
</h3>
</div>
<div class="panel-body text-muted">
<ul class="fa-ul">
<li><i class="fa fa-clock-o fa-li"></i>DISFRUTA EL DÍA CON LA DIFERENTES ACTIVIDADES EN MONTEROCA, DESAYUNO, ALMUERZO Y COMIDA INCLUIDAS</li>
</ul>                           
</div>
</div>
</div>
<div class="panel-group">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">
<span class="text-primary">Día 6</span> 
</h3>
</div>
<div class="panel-body text-muted">
<ul class="fa-ul">
<li><i class="fa fa-clock-o fa-li"></i>DIFRUTA DE LA MAÑANA EN MONTEROCA.  DESAYUNO Y ALMUERZO INCLUIDO.  CHECK OUT A LA 1PM</li>
<li><i class="fa fa-clock-o fa-li"></i>02:00 pm VIAJAR AL LAGO CALIMA</li>
<li><i class="fa fa-clock-o fa-li"></i>05:30 pm CHECK IN EN EL HOTEL EN EL LAGO CALIMA</li>
</ul>                           
</div>
</div>
</div>
<div class="panel-group">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">
<span class="text-primary">Día 7</span> 
</h3>
</div>
<div class="panel-body text-muted">
<ul class="fa-ul">
<li><i class="fa fa-clock-o fa-li"></i>DISFRUTA EL DÍA CON LA DIFERENTES ACTIVIDADES EN EL LAGO CALIMA, DESAYUNO, ALMUERZO Y COMIDA INCLUIDOS </li>
</ul>                           
</div>
</div>
</div>
<div class="panel-group">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">
<span class="text-primary">Día 8</span> 
</h3>
</div>
<div class="panel-body text-muted">
<ul class="fa-ul">
<li><i class="fa fa-clock-o fa-li"></i>DISFRUTA LA MAÑANA EN EL LAGO CALIMA.  DESAYUNO Y ALMUEZO INCLUIDOS.  CHECK OUT A LA 1 PM</li>
<li><i class="fa fa-clock-o fa-li"></i>02:00 pm REGRESO AL HOTEL EN ARMENIA </li>
<li><i class="fa fa-clock-o fa-li"></i>05:30 pm CHECK IN EN EL HOTEL</li>
<li><i class="fa fa-clock-o fa-li"></i>07:00 pm COMIDA EN EL HOTEL</li>
</ul>                           
</div>
</div>
</div>
<div class="panel-group">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">
<span class="text-primary">Día 9</span> 
</h3>
</div>
<div class="panel-body text-muted">
<ul class="fa-ul">
<li><i class="fa fa-clock-o fa-li"></i>SALIR AL AEROPUERTO </li>
<li><i class="fa fa-clock-o fa-li"></i>DESAYUNO DE DESPEDIDA (SOUVENIR TRADICIONAL)</li>
</ul>                           
</div>
</div>
</div>
',
				'type'              => 0, //package,activity
				'city_id'           => 1
			] );
			
			
			//========== Inicio de los Hoteles ==============//
			
			//la floresta
			Product::create( [
				'id'                => 25,
				'tittle'            => 'La Floresta',
				'slug_url'          => str_slug( 'La Floresta es', '-' ),
				'price_children'    => 18,
				'meta_description'  => 'Hotel La Floresta',
				'keywords'          => 'Hotel La Floresta',
				'local'             => 'es',
				'description'       => 'Al viajar a Armenia -  Colombia podrá disfrutar de la Floresta Finca Hotel explorando la exótica naturaleza del Quindío con un sendero ecológico; nacimientos de agua, diversidad de flora y fauna.',
				'short_description' => 'Al viajar a Armenia -  Colombia podrá disfrutar de la Floresta Finca Hotel explorando la exótica naturaleza del Quindío con un sendero ecológico; nacimientos de agua, diversidad de flora y fauna.',
				'type'              => 2, //package,activity
				'city_id'           => 1,
				'address'           => 'Kilómetro 3 Vía al Aeropuerto El Edén, Vereda Santana'
			] );
			
			//la floresta español 26
			Product::create( [
				'id'                => 26,
				'tittle'            => 'La Floresta',
				'slug_url'          => str_slug( 'La Floresta', '-' ),
				'price_children'    => 18,
				'meta_description'  => 'Hotel La Floresta',
				'keywords'          => 'Hotel La Floresta',
				'local'             => 'en',
				'description'       => 'When you travel to Armenia - Colombia you will enjoy the exotic nature of Quindío through a nature path aside winding streams and diverse fauna and flora At La Floresta Farm Hotel.',
				'short_description' => 'When you travel to Armenia - Colombia you will enjoy the exotic nature of Quindío through a nature path aside winding streams and diverse fauna and flora At La Floresta Farm Hotel.',
				'type'              => 2, //package,activity
				'city_id'           => 1,
				'address'           => 'Three km from the airport in village of.  Vereda Santana'
			] );
			
			//Isa Victory Hotel Boutique
			Product::create( [
				'id'                => 27,
				'tittle'            => 'Isa Victory Hotel Boutique',
				'slug_url'          => str_slug( 'Isa Victory Hotel Boutique', '-' ),
				'price_children'    => 15,
				'meta_description'  => 'Isa Victory Hotel Boutique',
				'keywords'          => 'Isa Victory Hotel Boutique',
				'local'             => 'es',
				'description'       => 'Isa Victory, único hotel boutique en Armenia que Impacta, Sorprende y Atrae, está ubicado en uno de los más exclusivos sectores de la ciudad.  En la tranquilidad y elegancia de Isa Victory Hotel Boutique podrá descubrir nuevas formas de confort y atención personalizada.',
				'short_description' => 'Isa Victory, único hotel boutique en Armenia que Impacta, Sorprende y Atrae, está ubicado en uno de los más exclusivos sectores de la ciudad.  En la tranquilidad y elegancia de Isa Victory Hotel Boutique podrá descubrir nuevas formas de confort y atención personalizada.',
				'type'              => 2, //package,activity
				'city_id'           => 1,
				'address'           => 'Avenida Bolívar 21 Norte 47'
			] );
			
			//Isa Victory Hotel Boutique
			Product::create( [
				'id'                => 28,
				'tittle'            => 'Isa Victory Boutique Hotel',
				'slug_url'          => str_slug( 'Isa Victory Boutique Hotel', '-' ),
				'price_children'    => 15,
				'meta_description'  => 'Isa Victory Boutique Hotel',
				'keywords'          => 'Isa Victory Boutique Hotel',
				'local'             => 'en',
				'description'       => 'Isa Victory is the only ‘boutique hotel’ in the area and located in one of the more exclusive parts of Armenia.  A distinctive combination of tranquility and elegance, at the Isa Victory you will discover the comforts of home as well as excellent customer service.',
				'short_description' => 'Isa Victory is the only ‘boutique hotel’ in the area and located in one of the more exclusive parts of Armenia.  A distinctive combination of tranquility and elegance, at the Isa Victory you will discover the comforts of home as well as excellent customer service.',
				'type'              => 2, //package,activity
				'city_id'           => 1,
				'address'           => 'Avenida Bolívar 21 Norte 47'
			] );
			
			//Armenia Hotel
			Product::create( [
				'id'                => 29,
				'tittle'            => 'Armenia Hotel',
				'slug_url'          => str_slug( 'Armenia Hotel es', '-' ),
				'price_children'    => 25,
				'meta_description'  => 'Armenia Hotel',
				'keywords'          => 'Armenia Hotel',
				'local'             => 'es',
				'description'       => 'El Armenia Hotel está ubicado en una exclusiva y estratégica zona de Armenia.  Su moderna arquitectura se combina con el auténtico mobiliario diseñado en guadua y las piezas precolombinas de la Cultura Quimbaya que decoran sus espacios.',
				'short_description' => 'El Armenia Hotel está ubicado en una exclusiva y estratégica zona de Armenia.  Su moderna arquitectura se combina con el auténtico mobiliario diseñado en guadua y las piezas precolombinas de la Cultura Quimbaya que decoran sus espacios.',
				'type'              => 2, //package,activity
				'city_id'           => 1,
				'address'           => 'Av. Bolivar Calle 8 Norte – Esquina. Armenia'
			] );
			
			//Armenia Hotel
			Product::create( [
				'id'                => 67,
				'tittle'            => 'Armenia Hotel',
				'slug_url'          => str_slug( 'Armenia Hotel', '-' ),
				'price_children'    => 25,
				'meta_description'  => 'Armenia Hotel',
				'keywords'          => 'Armenia Hotel',
				'local'             => 'en',
				'description'       => 'The Armenia Hotel is strategically located in one of the more exclusive areas of Armenia.  Its modern architecture contrasts with furnishings made of guadua (bamboo) and Precolumbian relics of Quimbaya culture.',
				'short_description' => 'The Armenia Hotel is strategically located in one of the more exclusive areas of Armenia.  Its modern architecture contrasts with furnishings made of guadua (bamboo) and Precolumbian relics of Quimbaya culture.',
				'type'              => 2, //package,activity
				'city_id'           => 1,
				'address'           => 'Av. Bolivar Calle 8 Norte – Esquina. Armenia'
			] );
			
			//Hotel Palma Verde
			Product::create( [
				'id'                => 68,
				'tittle'            => 'Hotel Palma Verde',
				'slug_url'          => str_slug( 'Hotel Palma Verde', '-' ),
				'price_children'    => 40,
				'meta_description'  => 'Hotel Palma Verde',
				'keywords'          => 'Hotel Palma Verde',
				'local'             => 'en',
				'description'       => 'The Palma Verde is an excellent option for an unforgettable stay with the comforts of home, quietude and bliss all thanks to its remarkable service and facility design .',
				'short_description' => 'The Palma Verde is an excellent option for an unforgettable stay with the comforts of home, quietude and bliss all thanks to its remarkable service and facility design .',
				'type'              => 2, //package,activity
				'city_id'           => 1,
				'address'           => 'On the roundabout of Club Campestre golf, one km from the airport of Armenia Quindío'
			] );
			
			//Hotel Palma Verde
			Product::create( [
				'id'                => 69,
				'tittle'            => 'Hotel Palma Verde',
				'slug_url'          => str_slug( 'Hotel Palma Verde es', '-' ),
				'price_children'    => 40,
				'meta_description'  => 'Hotel Palma Verde',
				'keywords'          => 'Hotel Palma Verde',
				'local'             => 'es',
				'description'       => 'El Hotel Campestre Palma Verde es una excelente opción de confort, tranquilidad y diversión, dado que  cuenta con una excelente infraestructura, servicio y facilidades que hacen de la estadía de nuestros clientes una experiencia inolvidable.',
				'short_description' => 'El Hotel Campestre Palma Verde es una excelente opción de confort, tranquilidad y diversión, dado que  cuenta con una excelente infraestructura, servicio y facilidades que hacen de la estadía de nuestros clientes una experiencia inolvidable.',
				'type'              => 2, //package,activity
				'city_id'           => 1,
				'address'           => 'Glorieta Club Campestre Via Aeropuerto de Armenia - Quindío'
			] );
			
			//========== Fin de los Hoteles ==============//
			
			
			//========== Inicio de servicios adicionales ==============//
			
			//Tourist Guide - 30
			Product::create( [
				'id'          => 30,
				'tittle'      => 'Tourist Guide',
				'slug_url'    => str_slug( 'Tourist Guide', '-' ),
				'status'      => 1,
				'local'       => 'en',
				'description' => '',
				'type'        => 4, //package,activity
			] );
			
			//Inland Transport - 31
			Product::create( [
				'id'          => 31,
				'tittle'      => 'Inland Transport',
				'slug_url'    => str_slug( 'Inland Transport', '-' ),
				'status'      => 1,
				'local'       => 'en',
				'description' => '',
				'type'        => 4, //package,activity
			] );
			
			//Spanish Classes - 32
			Product::create( [
				'id'          => 32,
				'tittle'      => 'Spanish Classes',
				'slug_url'    => str_slug( 'Spanish Classes', '-' ),
				'status'      => 1,
				'local'       => 'en',
				'description' => '',
				'type'        => 4, //package,activity
			] );
			
			//Childcare services - 33
			Product::create( [
				'id'          => 33,
				'tittle'      => 'Childcare services',
				'slug_url'    => str_slug( 'Childcare services', '-' ),
				'status'      => 1,
				'local'       => 'en',
				'description' => '',
				'type'        => 4, //package,activity
			] );
			
			//Dancing classes; latin Rhythms - 34
			Product::create( [
				'id'          => 34,
				'tittle'      => 'Dancing classes; latin Rhythms',
				'slug_url'    => str_slug( 'Dancing classes latin Rhythms', '-' ),
				'status'      => 1,
				'local'       => 'en',
				'description' => '',
				'type'        => 4, //package,activity
			] );
			
			//Nursing - 35
			Product::create( [
				'id'          => 35,
				'tittle'      => 'Nursing or special medical attention',
				'slug_url'    => str_slug( 'Nursing or special medical attention', '-' ),
				'status'      => 1,
				'local'       => 'en',
				'description' => '',
				'type'        => 4, //package,activity
			] );
			
			//Money exchange - 36
			Product::create( [
				'id'          => 36,
				'tittle'      => 'Money exchange',
				'slug_url'    => str_slug( 'Money exchange', '-' ),
				'status'      => 1,
				'local'       => 'en',
				'description' => '',
				'type'        => 4, //package,activity
			] );
			
			//Cell phone or SIM card and data - 37
			Product::create( [
				'id'          => 37,
				'tittle'      => 'Cell phone or SIM card and data',
				'slug_url'    => str_slug( 'Cell phone or SIM card and data ', '-' ),
				'status'      => 1,
				'local'       => 'en',
				'description' => '',
				'type'        => 4, //package,activity
			] );
			
			//Rental car reservations - 38
			Product::create( [
				'id'          => 38,
				'tittle'      => 'Rental car reservations',
				'slug_url'    => str_slug( 'Rental car reservations', '-' ),
				'status'      => 1,
				'local'       => 'en',
				'description' => '',
				'type'        => 4, //package,activity
			] );
			
			//Complete Laundry services - 39
			Product::create( [
				'id'          => 39,
				'tittle'      => 'Complete Laundry services',
				'slug_url'    => str_slug( 'Complete Laundry services', '-' ),
				'status'      => 1,
				'local'       => 'en',
				'description' => '',
				'type'        => 4, //package,activity
			] );
			
			//Culinary (Colombian cuisine) - 54
			Product::create( [
				'id'          => 54,
				'tittle'      => 'Culinary (Colombian cuisine)',
				'slug_url'    => str_slug( 'Culinary (Colombian cuisine)', '-' ),
				'status'      => 1,
				'local'       => 'en',
				'description' => '',
				'type'        => 4, //package,activity
			] );
			
			//SPA & Beauty reservation - 55
			Product::create( [
				'id'          => 55,
				'tittle'      => 'SPA & Beauty reservation',
				'slug_url'    => str_slug( 'SPA & Beauty reservation', '-' ),
				'status'      => 1,
				'local'       => 'en',
				'description' => '',
				'type'        => 4, //package,activity
			] );
			
			//Accommodation reservations - 56
			Product::create( [
				'id'          => 56,
				'tittle'      => 'Accommodation reservations (City Hotels, Apartments, Side-trip accommodations)',
				'slug_url'    => str_slug( 'Accommodation reservations (City Hotels, Apartments, Side-trip accommodations)',
					'-' ),
				'status'      => 1,
				'local'       => 'en',
				'description' => '',
				'type'        => 4, //package,activity
			] );
			
			//Grocery service
			Product::create( [
				'id'          => 57,
				'tittle'      => 'Grocery service',
				'slug_url'    => str_slug( 'Grocery service', '-' ),
				'status'      => 1,
				'local'       => 'en',
				'description' => '',
				'type'        => 4, //package,activity
			] );
			
			//Travelers insurance
			Product::create( [
				'id'          => 58,
				'tittle'      => 'Travelers insurance (liability, comprehensive, health, life)',
				'slug_url'    => str_slug( 'Travelers insurance (liability, comprehensive, health, life)', '-' ),
				'status'      => 1,
				'local'       => 'en',
				'description' => '',
				'type'        => 4, //package,activity
			] );
			
			//Investment (residential, commercial)
			Product::create( [
				'id'          => 59,
				'tittle'      => 'Investment (residential, commercial)',
				'slug_url'    => str_slug( 'Investment (residential, commercial)', '-' ),
				'status'      => 1,
				'local'       => 'en',
				'description' => '',
				'type'        => 4, //package,activity
			] );
			
			//No luggage option
			Product::create( [
				'id'          => 60,
				'tittle'      => 'No luggage option (buy clothes/toiletries here)',
				'slug_url'    => str_slug( 'No luggage option (buy clothes/toiletries here)', '-' ),
				'status'      => 1,
				'local'       => 'en',
				'description' => '',
				'type'        => 4, //package,activity
			] );
			
			//Mercar shopping for fruits/vegetables
			Product::create( [
				'id'          => 61,
				'tittle'      => 'Mercar shopping for fruits/vegetables',
				'slug_url'    => str_slug( 'Mercar shopping for fruits vegetables', '-' ),
				'status'      => 1,
				'local'       => 'en',
				'description' => '',
				'type'        => 4, //package,activity
			] );
			
			//Guía Turístico - 62
			Product::create( [
				'id'          => 62,
				'tittle'      => 'Guía Turístico',
				'slug_url'    => str_slug( 'Guía Turístico', '-' ),
				'status'      => 1,
				'local'       => 'es',
				'description' => '',
				'type'        => 4, //package,activity
			] );
			
			//Transporte Interno - 63
			Product::create( [
				'id'          => 63,
				'tittle'      => 'Transporte Interno',
				'slug_url'    => str_slug( 'Transporte Interno', '-' ),
				'status'      => 1,
				'local'       => 'es',
				'description' => '',
				'type'        => 4, //package,activity
			] );
			
			//Intensive Spanish - 64
			Product::create( [
				'id'          => 64,
				'tittle'      => 'Clases de Español',
				'slug_url'    => str_slug( 'Clases de Español', '-' ),
				'status'      => 1,
				'local'       => 'es',
				'description' => '',
				'type'        => 4, //package,activity
			] );
			
			//Childcare services - 65
			Product::create( [
				'id'          => 65,
				'tittle'      => 'Ciudado de niños',
				'slug_url'    => str_slug( 'Ciudado de niños', '-' ),
				'status'      => 1,
				'local'       => 'es',
				'description' => '',
				'type'        => 4, //package,activity
			] );
			
			//Clases de baile; Ritmos Latinos - 66
			Product::create( [
				'id'          => 66,
				'tittle'      => 'Clases de baile; Ritmos Latinos',
				'slug_url'    => str_slug( 'Clases de baile Ritmos Latinos', '-' ),
				'status'      => 1,
				'local'       => 'es',
				'description' => '',
				'type'        => 4, //package,activity
			] );
			
			//Enfermería o atención médica especial - 70
			Product::create( [
				'id'          => 70,
				'tittle'      => 'Enfermería o atención médica especial',
				'slug_url'    => str_slug( 'Enfermería o atención médica especial', '-' ),
				'status'      => 1,
				'local'       => 'es',
				'description' => '',
				'type'        => 4, //package,activity
			] );
			
			//Cambio de divisas - 71
			Product::create( [
				'id'          => 71,
				'tittle'      => 'Cambio de divisas',
				'slug_url'    => str_slug( 'Cambio de divisas', '-' ),
				'status'      => 1,
				'local'       => 'es',
				'description' => '',
				'type'        => 4, //package,activity
			] );
			
			//Celulares, tarjetas SIM y datos - 72
			Product::create( [
				'id'          => 72,
				'tittle'      => 'Celulares, tarjetas SIM y datos',
				'slug_url'    => str_slug( 'Celulares, tarjetas SIM y datos', '-' ),
				'status'      => 1,
				'local'       => 'es',
				'description' => '',
				'type'        => 4, //package,activity
			] );
			
			//Reservaciones renta de vehiculos - 73
			Product::create( [
				'id'          => 73,
				'tittle'      => 'Reservaciones renta de vehiculos',
				'slug_url'    => str_slug( 'Reservaciones renta de vehiculos', '-' ),
				'status'      => 1,
				'local'       => 'es',
				'description' => '',
				'type'        => 4, //package,activity
			] );
			
			//Servicio de lavandería - 74
			Product::create( [
				'id'          => 74,
				'tittle'      => 'Servicio de lavandería',
				'slug_url'    => str_slug( 'Servicio de lavandería', '-' ),
				'status'      => 1,
				'local'       => 'es',
				'description' => '',
				'type'        => 4, //package,activity
			] );
			
			//Clase de culinaria (Comida Colombiana) - 75
			Product::create( [
				'id'          => 75,
				'tittle'      => 'Clase de culinaria (Comida Colombiana)',
				'slug_url'    => str_slug( 'Clase de culinaria (Comida Colombiana)', '-' ),
				'status'      => 1,
				'local'       => 'es',
				'description' => '',
				'type'        => 4, //package,activity
			] );
			
			//Reservaciones de SPA y Belleza - 76
			Product::create( [
				'id'          => 76,
				'tittle'      => 'Reservaciones de SPA y Belleza',
				'slug_url'    => str_slug( 'Reservaciones de SPA y Belleza', '-' ),
				'status'      => 1,
				'local'       => 'es',
				'description' => '',
				'type'        => 4, //package,activity
			] );
			
			//Reservaciones para Hospedaje - 77
			Product::create( [
				'id'          => 77,
				'tittle'      => 'Reservaciones para Hospedaje',
				'slug_url'    => str_slug( 'Reservaciones para Hospedaje', '-' ),
				'status'      => 1,
				'local'       => 'es',
				'description' => '',
				'type'        => 4, //package,activity
			] );
			
			//Servicio a domicilio - 78
			Product::create( [
				'id'          => 78,
				'tittle'      => 'Servicio a domicilio',
				'slug_url'    => str_slug( 'Servicio a domicilio', '-' ),
				'status'      => 1,
				'local'       => 'es',
				'description' => '',
				'type'        => 4, //package,activity
			] );
			
			//Seguro de Viajeros - 79
			Product::create( [
				'id'          => 79,
				'tittle'      => 'Seguro de Viajeros',
				'slug_url'    => str_slug( 'Seguro de Viajeros', '-' ),
				'status'      => 1,
				'local'       => 'es',
				'description' => '',
				'type'        => 4, //package,activity
			] );
			
			//Inversión de Bienes Raices - 80
			Product::create( [
				'id'          => 80,
				'tittle'      => 'Inversión de Bienes Raices',
				'slug_url'    => str_slug( 'Inversión de Bienes Raices', '-' ),
				'status'      => 1,
				'local'       => 'es',
				'description' => '',
				'type'        => 4, //package,activity
			] );
			
			//Opción de No equipaje - 81
			Product::create( [
				'id'          => 81,
				'tittle'      => 'Opción de No equipaje (Compra de ropa y articulos de aseo)',
				'slug_url'    => str_slug( 'Opción de No equipaje', '-' ),
				'status'      => 1,
				'local'       => 'es',
				'description' => '',
				'type'        => 4, //package,activity
			] );
			
			//Compra de frutas y vegetales - 82
			Product::create( [
				'id'          => 82,
				'tittle'      => 'Compra de frutas y vegetales',
				'slug_url'    => str_slug( 'Compra de frutas y vegetales', '-' ),
				'status'      => 1,
				'local'       => 'es',
				'description' => '',
				'type'        => 4, //package,activity
			] );
			
			//========== Fin de servicios adicionales ==============//
			
			//========== Inicio 2 de las actividades ==============//
			
			Product::create( [
				'id'                => 40,
				'tittle'            => 'Filandia',
				'description'       => 'FILANDIA is another town with remarkable natural, scenic, and architectural wealth. Its friendly inhabitants and its cozy charm make this well-preserved village built on the summit of a low mountain one of the favorite tourist destinations in the department of Quindío. Unlike other more overcrowded destinations, Filandia is characterized by its cool fresh air, blessed tranquility, warm and engaging populace and historical authenticity. At times it seems to have been ‘arrested in time’ with its occasional horse drawn carts, roadside cattle grazing, sometimes rowdy saloons, and fastidious basket weaving artisans. On its outskirts the natural arboreal preserve, waterfalls, and fauna/ flora at Bremen Forest top off a most attractive village.',
				'short_description' => 'Its cozy charm make this well-preserved village built on the summit of a low mountain one of the favorite tourist destinations in the department of Quindío. Unlike other more overcrowded destinations, Filandia is characterized by its cool fresh air, blessed tranquility, warm and engaging populace and historical authenticity',
				'slug_url'          => str_slug( 'Filandia', '-' ),
				'days'              => '6 hours',
				'price_adults'      => '125',
				'price_children'    => '62',
				'local'             => 'en',
				'type'              => 1, //activity
				'discount'          => 0, //porcentaje
				'city_id'           => 1,
				'meta_description'  => 'Filandia',
				'keywords'          => 'Filandia',
				'include'           => '',        // price include
				'suggestion'        => 'Comfortable shoes, Camera, Cap or hut',
			] );
			
			Product::create( [
				'id'                => 41,
				'tittle'            => 'Filandia',
				'description'       => 'FILANDIA es otro pueblo con notable riqueza natural y arquitectónica. Sus habitantes amistosos y su encanto acogedor hacen de este pueblo construido en la cumbre de una montaña baja, uno de los destinos turísticos favoritos en el departamento de Quindío. A diferencia de otros destinos más concurridos, Filandia se caracteriza por su aire fresco, tranquilidad, atractiva población y autenticidad histórica. A veces parece haber sido "detenida en el tiempo" con sus ocasionales carrozas tiradas por caballos, el pastoreo de ganado, salones de reunión a veces ruidosos y los artesanos que tejen los cestos característicos de la región. En las afueras, la reserva arbórea natural, las cascadas, y la fauna / flora del Bosque de Bremen que hacen de este, un pueblo más atractivo.',
				'short_description' => 'Su encanto acogedor hacen de este pueblo construido en la cumbre de una montaña baja, uno de los destinos turísticos favoritos en el departamento de Quindío,  Filandia se caracteriza por su aire fresco, tranquilidad, atractiva población y autenticidad histórica.',
				'slug_url'          => str_slug( 'Filandia es', '-' ),
				'days'              => '6 horas',
				'price_adults'      => '125',
				'price_children'    => '62',
				'local'             => 'es',
				'type'              => 1, //activity
				'discount'          => 0, //porcentaje
				'city_id'           => 1,
				'meta_description'  => 'Filandia',
				'keywords'          => 'Filandia',
				'include'           => '',        // price include
				'suggestion'        => 'Cámara, Zapatos cómodos, Gorra o sombrero',
			] );
			
			Product::create( [
				'id'                => 42,
				'tittle'            => 'Cordoba',
				'description'       => 'CORDOBA Fifteen minutes drive to the south over rather steep terrain and narrow road is a distinctly more modest town, pinned to the slope of the foothills is Cordoba (no attempt was ever made to create a level spot in the entire village). Like Pijao, Cordoba was once a guerilla stronghold, and is now simply noted for its quietude and bliss. Several excellent cafes, and serve up high quality beverage from home grown coffee fields. It is from this town that a jeep can carry you up to the Rio Verde waterfalls. <br> BARCELONA/RIO VERDE Barcelona and Rio Verde are twin towns, both small but renowned collectively as a gastronomic destination of Quindío. These modest villages are the best locations to become familiar with the large variety of “platos típicos” or traditional foods of the region. Lining the banks of the rapidly flowing “Rio Verde” river (and therefore without the stunning high point vistas of the other towns), are at least 15 small restaurants and taverns. Here you can challenge your palate and discover an endless number of flavors and most of the foods and combinations that comprise Colombian cuisine. Here also is featured a most delicious alcoholic beverage called “kumis”. Before we tell you what it is, you must try it first (fermented milk). Most agreeable.',
				'short_description' => 'It was once a guerilla stronghold, and is now simply noted for its quietude and bliss… and  a renowned collectively as a gastronomic destination of Quindío',
				'slug_url'          => str_slug( 'Cordoba', '-' ),
				'days'              => '6 hours',
				'price_adults'      => '125',
				'price_children'    => '62',
				'local'             => 'en',
				'type'              => 1, //activity
				'discount'          => 0, //porcentaje
				'city_id'           => 1,
				'meta_description'  => 'Cordoba',
				'keywords'          => 'Cordoba',
				'include'           => '',        // price include
				'suggestion'        => 'Comfortable shoes, Camera, Cap or hut',
			] );
			
			Product::create( [
				'id'                => 43,
				'tittle'            => 'Cordoba',
				'description'       => 'CORDOBA: Quince minutos en coche por un camino estrecho y empinado se encuentra Córdoba, un pueblo claramente más modesto y discreto, ubicado sobre la ladera hacia el sur del departamento. Al igual que Pijao, Córdoba fue una vez una fortaleza guerrillera, y ahora es simplemente conocida por su quietud y tranquilidad. En la plaza es posible disfrutar varios cafés y bebidas excelentes de alta calidad de los cultivos de café locales. Este lugar es el punto de partida  para un jeep que puede llevarte hasta las cascadas de Rio Verde. <br>BARCELONA Y RÍO VERDE son pueblos gemelos, pequeños pero reconocidas colectivamente como destino gastronómico del Quindío. Estos modestos poblados son los mejores lugares para conocer la gran variedad de platos típicos o comidas tradicionales de la región. Bordeando las orillas del río “Río Verde”, que fluye rápidamente (y por lo tanto sin las impresionantes vistas que ofrecen los puntos altos de los otros pueblos), hay al menos 15 pequeños restaurantes y tabernas. Aquí puedes desafiar tu paladar y descubrir una infinidad de sabores, al igual que muchos de los alimentos y combinaciones que componen la inigualable cocina colombiana. Aquí también puedes probar una bebida alcohólica deliciosa llamada "kumis". Antes de que te digamos qué es, debes probarlo primero (leche fermentada).',
				'short_description' => 'Fue una vez una fortaleza guerrillera, y ahora es simplemente conocida por su quietud y tranquilidad ...y un destino gastronómico del Quindío. ',
				'slug_url'          => str_slug( 'Cordoba es', '-' ),
				'days'              => '6 horas',
				'price_adults'      => '125',
				'price_children'    => '62',
				'local'             => 'es',
				'type'              => 1, //activity
				'discount'          => 0, //porcentaje
				'city_id'           => 1,
				'meta_description'  => 'Cordoba',
				'keywords'          => 'Cordoba',
				'include'           => '',        // price include
				'suggestion'        => 'Cámara, Zapatos cómodos, Gorra o sombrero',
			] );
			
			
			Product::create( [
				'id'                => 44,
				'tittle'            => 'Recuca',
				'description'       => 'You can experience a wonderful Latin America vacations and the Coffee Culture in all its glory at RECUCA in the midst of thriving coffee and banana plantations. Recreate the role of the coffee growers past and present by actively participating in the cultivation work. The coffee beans are harvested and processed by hand with the garments currently used by the countrymen of the region. Experts will teach you to how to choose and pick properly ripened beans (granos) and husk, dry, roast and toast the grain, much as coffee ancestors have for hundreds of years (some things just cannot and should not change). Finally, ahhh, to taste the final product. Learn how to discriminate between the various bean qualities, aromas and of course flavors.',
				'short_description' => 'You can experience the Coffee Culture in all its glory at RECUCA in the midst of thriving coffee and banana plantations. Recreate the role of the coffee growers past and present by actively participating in the cultivation work',
				'itinerary'         => 'Breakfast,Park travel,Lunch,Atraction,Drink coffee,Dinner,',
				'slug_url'          => str_slug( 'recuca', '-' ),
				'days'              => '8 Hours',
				'price_adults'      => '125',
				'price_children'    => '62',
				'local'             => 'en',
				'type'              => 1,
				'discount'          => 0, //porcentaje
				'city_id'           => 1,
				'meta_description'  => 'Recuca',
				'keywords'          => 'Recuca',
				'include'           => 'Ticket, Coffee tasting, Drinks and snacks ',        // price include
				'suggestion'        => 'Comfortable shoes, No sandals, Cap or hat, Sunblock, Drink, Camera, Sunblock ',
			] );
			
			Product::create( [
				'id'                => 45,
				'tittle'            => 'Recuca',
				'description'       => 'Podrás disfrutar de unas maravillosas vacaciones en Latinoamerica y experimentar la cultura cafetera en todo su esplendor en RECUCA en medio de los robustos cultivos de café y banano. Personificar a los tradicionales recolectores de café participando activamente en su trabajo. visitando plantaciones de café y  degustando este delicioso producto.  Los granos de café son cultivados y procesados a mano con la indumentaria que usan los campesinos de la región. Aprenderás de expertos a elegir y recoger apropiadamente los granos maduros, pelarlos, lavarlos, secarlos, tostarlos y seleccionarlos como los ancestros cafeteros lo han hecho por cientos de años (algunas cosas no pueden cambiar y no deberían cambiar). Degustarás el producto final aprendiendo a identificar las diversas calidades de grano, aromas y por su puesto sabores.',
				'short_description' => 'Podrás experimentar la cultura cafetera en todo su esplendor en RECUCA, además   Personificarás a los tradicionales recolectores de café participando activamente en su trabajo.',
				'slug_url'          => str_slug( 'recuca es', '-' ),
				'days'              => '8 horas',
				'price_adults'      => '125',
				'price_children'    => '62',
				'local'             => 'es',
				'type'              => 1,
				'discount'          => 0, //porcentaje
				'city_id'           => 1,
				'meta_description'  => 'Recuca',
				'keywords'          => 'Recuca',
				'include'           => 'Pasaporte, Cata de café, Bebidas y snacks ',        // price include
				'suggestion'        => 'Zapatos cómodos, No usar sandalias, Gorra o sombrero, Bebida, Cámara fotográfica, Bloqueador solar',
			] );
			
			
			
			
			Product::create( [
				'id'                => 46,
				'tittle'            => 'Botanical Garden',
				'description'       => 'THE BOTANICAL GARDEN OF QUINDÍO has dozens ecologically sensitive trails designed for people of all ages so everyone can enjoy its attractions. Here the sounds and colors of nature are freely expressed and catch the senses of even the less discerning visitors. It is a natural, meticulously preserved sub-Andean forest of about 40 acres, especially miraculous considering that a significant part of the natural vegetation of the region was eliminated for the development of coffee, banana, plantain, papaya, guava, avocado and other cash crops. The Botanical Garden contains over 800 species of native flora, a butterfly zoo (mariposario), an insect zoo, collections and exhibitions of rare plants, geological and ethnobotanical museums and discreet bird observatory.',
				'short_description' => 'Here the sounds and colors of nature are freely expressed and catch the senses of even the less discerning visitors.     This beautiful garden  has dozens ecologically sensitive trails designed for people of all ages so everyone can enjoy its attractions',
				'slug_url'          => str_slug( 'Botanical Garden', '-' ),
				'days'              => '6 hours',
				'price_adults'      => '125',
				'price_children'    => '62',
				'local'             => 'en',
				'type'              => 1, //activity
				'discount'          => 0, //porcentaje
				'city_id'           => 1,
				'meta_description'  => 'Botanical Garden',
				'keywords'          => 'Botanical Garden',
				'include'           => 'Entry, Local guide, Drinks & snacks',        // price include
				'suggestion'        => 'Comfortable shoes, No sandals, Cap or hat, Sunblock, Drink, Camera, Sunblock',
			] );
			
			Product::create( [
				'id'                => 47,
				'tittle'            => 'Jardín Botánico',
				'description'       => 'EL JARDIN BOTANICO DEL QUINDÍO tiene docenas de senderos diseñados para personas de todas las edades por lo que todos pueden disfrutar de sus atracciones. Aquí el sonido y el color de la naturaleza son libremente expresados y capturan los sentidos de los visitantes menos perspicaces. Es un bosque subAndino de 40 hectáreas milagrosamente preservado, considerando que una significante parte de la vegetación natural de la región fue eliminada por el desarrollo del café, banano, plátano, guayaba, aguacate y otros cultivos. El Jardín Botánico posee más de 800 especies nativas de flora, un mariposario, un insectarium, colección y exhibición de plantas exóticas, museos geológicos, etnobotánicos y un discreto observatorio de aves.',
				'short_description' => ' Aquí el sonido y el color de la naturaleza son libremente expresados y capturan los sentidos de los visitantes menos perspicaces. Este hermoso jardín tiene docenas de senderos diseñados para personas de todas las edades por lo que todos pueden disfrutar de sus atracciones',
				'slug_url'          => str_slug( 'Jardín Botánico', '-' ),
				'days'              => '6 horas',
				'price_adults'      => '125',
				'price_children'    => '62',
				'local'             => 'es',
				'type'              => 1, //activity
				'discount'          => 0, //porcentaje
				'city_id'           => 1,
				'meta_description'  => 'Jardín Botánico',
				'keywords'          => 'Jardín Botánico',
				'include'           => '',        // price include
				'suggestion'        => 'Zapatos cómodos, No usar sandalias, Gorra o sombrero, Bebida, Cámara fotográfica, Bloqueador solar',
			] );
			
			Product::create( [
				'id'                => 48,
				'tittle'            => 'Peñas Blancas Eco-Park',
				'description'       => 'PEÑAS BLANCAS ECO-PARK Eco-Park Peñas Blancas is perched high on the mountain range in Calarcá, to the east of Armenia, and clearly visible from Quindío´s capital and some others of its towns. This place has an exceptional and natural attractive and it is an exotic destination in Latin America, its land has the Peñas Blancas hill, a Cacique Calarcá history icon, a leader of Pijao who fought against the Spanish conquest. If you are interested in walking in the forest and knowing a place surrounded by biodiversity, the Peñas Blancas Eco-park is an excellent choice, with 5,5 kilometers of ecological nature path, with 17.000 trees until Peñas Blancas hill, the eco-park offers you an unique scenery to be with yourself and nature during your stay. Wheather you want to know about the region, Peñas Blancas hill is a cornerstone of indigenous history of the region because it was the home, the battle and death place of Cacique Calarcá, together with the towns of Pijao and Quimbaya, which resisted the conquest and left with his death, the Treasure of Cacique Calarcá legend Adittionally you will find vegetarian food, camping zone, rural accommodation, playground for children and adults; everything from respect for the environment and the effort to keep a place away of noise and hurry of the city, emphasizing on Yoga practice and relaxation as a natural alternative against stress',
				'short_description' => 'This place has an exceptional and natural attractive, its land has the Peñas Blancas hill, a Cacique Calarcá history icon, a leader of Pijao who fought against the Spanish conquest.',
				'slug_url'          => str_slug( 'Peñas Blancas Eco-Park', '-' ),
				'days'              => '6 hours',
				'price_adults'      => '125',
				'price_children'    => '62',
				'local'             => 'en',
				'type'              => 1, //activity
				'discount'          => 0, //porcentaje
				'city_id'           => 1,
				'meta_description'  => 'Peñas Blancas Eco-Park',
				'keywords'          => 'Peñas Blancas Eco-Park',
				'include'           => 'Entry, Local guide, Drinks & snacks',        // price include
				'suggestion'        => 'comfortable shoes, Color clothes, Long pants, Don´t smoke or alcohol eihter drugs, No knives',
			] );
			
			Product::create( [
				'id'                => 49,
				'tittle'            => 'Eco-Parque Peñas Blancas',
				'description'       => 'El Ecoparque Peñas Blancas se alza en lo alto de la cordillera, en Calarcá, al este de Armenia y es claramente visible desde la capital del Quindío y muchos de sus municipios; este sitio es sin duda un destino exótico de Latinoamerica, gracias a su atractivo natural incomparable al tener en su predio el Cerro de Peñas Blancas, ícono de la historia del Cacique Calarcá, líder Pijao que se reveló ante la conquista Española.                    Si su interés está en caminar por el bosque y conocer un sitio rico en biodiversidad, el Eco-parque Peñas Blancas es una excelente opción; con 5,5 Kilómetros de sendero que permite recorrer un bosque reforestado, con 17.000 árboles, hasta el cerro de Peñas Blancas, el Ecoparque le ofrece un escenario único para establecer contacto consigo mismo y la naturaleza que lo rodeará durante su estadía. Si desea aprender sobre la región: el cerro de Peñas Blancas es la piedra angular de la historia indígena de la zona, siendo el sitio de asentamiento, batalla y muerte del Cacique Calarcá junto con los pueblos Pijao y Quimbaya, quienes se resistieron a la conquista y dejaron, con su muerte, el secreto del tesoro del cacique como una leyenda digna de ser escuchada. Adicionalmente, podrá encontrarse con alimentación vegetariana, una amplia zona de camping, alojamiento rural y una pequeña zona de juegos para niños y adultos; todo, desde el respeto por el entorno y el esfuerzo de mantener un sitio alejado del ruido y el afán de la ciudad, enfatizando en la práctica de Yoga y relajación, como alternativa natural para combatir el estrés.',
				'short_description' => 'Este sitio, tiene un atractivo natural incomparable al tener en su predio el Cerro de Peñas Blancas, ícono de la historia del Cacique Calarcá, líder Pijao que se reveló ante la conquista Española.',
				'slug_url'          => str_slug( 'Eco-Parque Peñas Blancas', '-' ),
				'days'              => '6 horas',
				'price_adults'      => '125',
				'price_children'    => '62',
				'local'             => 'es',
				'type'              => 1, //activity
				'discount'          => 0, //porcentaje
				'city_id'           => 1,
				'meta_description'  => 'Eco-Parque Peñas Blancas',
				'keywords'          => 'Eco-Parque Peñas Blancas',
				'include'           => '',        // price include
				'suggestion'        => 'Zapato cerrado, Ropa a color larga y cómoda, No fumar, Evitar el licor y drogas alucinogenas, No llevar machetes cuchillos o navajas, No dejar basura',
			] );
			
			
			Product::create( [
				'id'                => 50,
				'tittle'            => 'Spring Water San Vicente',
				'description'       => 'SPRING WATER Immersed in the middle of 472 acres of humid forest, waterfalls with pure and clear water, medicinal plants and springs water that flow from the heart of the earth, you will find the San Vicente Spring Water Reserve. These geothermal hot springs are a hidden gem – well worth the two hour drive among the mountain peaks from Armenia. The waters, which require mixing with chilly springs to bring the ambient temperature to that of a jacuzzi, emerge from the extensive underground activity that lurks miles below the surface. Here you can enjoy six different settings of man-made and totally natural pools (bring sandals for sure), a zip line over the valley floor, faux-primitive but comfortable lodging, excellent restaurant and several hiking trails to nearby waterfalls and streams and more than 160 species of birds in the reserve making this place an adventure in coffee region of Colombia',
				'short_description' => 'Immersed in the middle of 472 acres of humid forest, waterfalls with pure and clear waters, medicinal plants and springs waters that flow from the heart of the earth.  These geothermal hot springs are a hidden gem ',
				'slug_url'          => str_slug( 'Spring Water San Vicente', '-' ),
				'days'              => '2 Days',
				'price_adults'      => '125',
				'price_children'    => '62',
				'local'             => 'en',
				'type'              => 1, //activity
				'discount'          => 0, //porcentaje
				'city_id'           => 2,
				'meta_description'  => 'Spring Water San Vicente',
				'keywords'          => 'Spring Water San Vicente',
				'include'           => 'Entry, Local guide, Drinks & snacks',        // price include
				'suggestion'        => 'Comfortable shoes, Color clothes, Long pants, Don´t smoke or alcohol eihter drugs, No knives',
			] );
			
			Product::create( [
				'id'                => 51,
				'tittle'            => 'Aguas Termales San Vicente',
				'description'       => 'Inmerso en medio de 472 hectáreas de bosque húmedo de niebla, cascadas con aguas puras y claras, plantas medicinales y aguas termales que fluyen desde el corazón de la tierra, se encuentra la Reserva Termal San Vicente. Estas geotérmicas aguas termales son una joya escondida. Dos horas manejando entre los picos de las montañas desde Armenia. Las aguas, las cuales requieren mezcla con manantiales fríos para brindar la temperatura ambiente de un manantial natural, emergen de la extensa actividad subterránea que se esconde millas por debajo de la superficie.                                                         Aquí puedes disfrutar seis diferentes piscinas hechas por el hombre y otras piscinas totalmente naturales (y por supuesto trae sandalias), una tirolesa entre las montañas, alojamiento rústico pero cómodo, excelente restaurante de gastronomía termal y varios senderos hacia cascadas cercanas y arroyos con más de 160 especies diferentes de pájaros en la reserva que hacen de este fantástico lugar toda una aventura en la región cafetera Colombiana.          ',
				'short_description' => 'Inmerso en medio de 472 hectáreas de bosque húmedo de niebla, cascadas con aguas puras y claras, plantas medicinales y aguas termales que fluyen desde el corazón de la tierra.  Estas geotérmicas aguas termales son una joya escondida',
				'slug_url'          => str_slug( 'Aguas Termales San Vicente', '-' ),
				'days'              => '2 Días',
				'price_adults'      => '125',
				'price_children'    => '62',
				'local'             => 'es',
				'type'              => 1, //activity
				'discount'          => 0, //porcentaje
				'city_id'           => 2,
				'meta_description'  => 'Aguas Termales San Vicente',
				'keywords'          => 'Aguas Termales San Vicente',
				'include'           => '',        // price include
				'suggestion'        => 'Zapato cerrado, Ropa a color larga y cómoda, No fumar, Evitar el licor y drogas alucinogenas, No llevar machetes cuchillos o navajas, No dejar basura',
			] );
			
			Product::create( [
				'id'                => 52,
				'tittle'            => 'Calima lake',
				'description'       => 'Calima Lake is one of the largest reservoirs in Colombia and an exotic destination in Latin America , has 8 miles long and 1 mile wide. The lake is part of a hydroelectric project which generates energy for the region of Darien. The opening was in 1966. In recent years it has become a tourist attraction due to the clean mountain waters, the natural of its landscapes, and with several hotels, restaurants and watersport recreational facilities. The area offers the most favorable winds of all the Americas and reportedly third world-wide of all freshwater resorts, and supports sailing, windsurfing, kitesurfing and waterskiing.',
				'short_description' => 'It is a tourist attraction due to the clean mountain waters, the natural of its landscapes, and with several hotels, restaurants and watersport recreational facilities and supports sailing, windsurfing, kitesurfing and waterskiing.',
				'slug_url'          => str_slug( 'Calima lake', '-' ),
				'days'              => '2 Days',
				'price_adults'      => '125',
				'price_children'    => '62',
				'local'             => 'en',
				'type'              => 1, //activity
				'discount'          => 0, //porcentaje
				'city_id'           => 4,
				'meta_description'  => 'Calima lake',
				'keywords'          => 'Calima lake',
				'include'           => 'Entry, Local guide, Drinks & snacks',        // price include
				'suggestion'        => 'comfortable shoes, Color clothes, Long pants, Don´t smoke or alcohol eihter drugs, No knives, ',
			] );
			
			Product::create( [
				'id'                => 53,
				'tittle'            => 'Lago Calima',
				'description'       => 'El Lago Calima es uno de los embalses más grandes de Colombia y a ello debe su reconocimiento como un destino exótico en Latinoamerica, la dimensión del embalse es de 13 kilómetros de largo por 1,5 kilómetros de ancho. El lago como parte de una hidroeléctrica genera energía a la región del Darién.                                                                           Su inauguración fue en 1966. En años recientes se ha convertido en un importante atractivo turístico gracias a sus aguas cristalinas de montaña, la naturalidad de sus paisajes, y con diferentes hoteles, restaurantes e instalaciones para deportes acuáticos. El área ofrece los vientos más favorables de las américas y se dice que es el tercer lago del mundo que ofrece condiciones muy favorables para el aprendizaje y la práctica de deportes como sailing, windsurfing, kitesurfing and waterskiing and more.',
				'short_description' => 'Es un importante atractivo turístico gracias a sus aguas cristalinas de montaña, la naturalidad de sus paisajes, y con diferentes hoteles, restaurantes e instalaciones para deportes acuáticos tales como sailing, windsurfing, kitesurfing and waterskiing.',
				'slug_url'          => str_slug( 'Lago Calima', '-' ),
				'days'              => '2 Días',
				'price_adults'      => '125',
				'price_children'    => '62',
				'local'             => 'es',
				'type'              => 1, //activity
				'discount'          => 0, //porcentaje
				'city_id'           => 4,
				'meta_description'  => 'Lago Calima',
				'keywords'          => 'Lago Calima',
				'include'           => '',        // price include
				'suggestion'        => 'Zapato cerrado, Ropa a color larga y cómoda, No fumar, Evitar el licor y drogas alucinogenas, No llevar machetes cuchillos o navajas, No dejar basura',
			] );
			
			
			Product::create( [
				'id'                => 83,
				'tittle'            => 'Parapente',
				'description'       => 'El parapentismo te permitirá vivir  una única  experiencia de volar y ver la panorámica del deslumbrante paisaje Quindiano, puede ser algo absolutamente inolvidable. Para las personas que disfrutan la adrenalina, los vuelos inductivos al parapente es la manera más segura, cómoda y divertida de pasear por las nubes. AnÍmate y ven a disfrutar de esta actividad extrema. ',
				'short_description' => 'El parapentismo te permitirá vivir  una única  experiencia de volar y ver la panorámica del deslumbrante paisaje Quindiano, puede ser algo absolutamente inolvidable.',
				'slug_url'          => str_slug( 'Parapente', '-' ),
				'days'              => '1 hora',
				'price_adults'      => '125',
				'price_children'    => '62',
				'local'             => 'es',
				'type'              => 1,
				//activity
				'discount'          => 0,
				//porcentaje
				'city_id'           => 1,
				'meta_description'  => 'Parapente',
				'keywords'          => 'Parapente',
				'include'           => 'Seguro de vida y accidentes, Video de la actividad en parapente  duración 4 minutos, 10 fotografías de la actividad, Transporte',
				// price include
				'suggestion'        => 'Calzado deportivo En climas fríos y cálidos, Chaquetas livianas, Bloqueador solar, Gafas y gorra, Personas entre los 15-120 kilos de peso y con  discapacidades pueden volar',
			] );
			
			Product::create( [
				'id'                => 84,
				'tittle'            => 'Paragliding',
				'description'       => 'The paragliding will allow you to live a unique experience of flying and seeing the awesome landscape of Quindío, it could be something absolutely unforgettable.                                                       For people who enjoy adrenaline, the paragliding inductuve fligths are the safer, comfortable and nice way to travel closer to the sky.   Let´s come to live this extreme activity',
				'short_description' => 'The paragliding will allow you to live a unique experience of flying and seeing the awesome landscape of Quindío',
				'slug_url'          => str_slug( 'Paragliding', '-' ),
				'days'              => '1 hour',
				'price_adults'      => '125',
				'price_children'    => '62',
				'local'             => 'en',
				'type'              => 1,
				//activity
				'discount'          => 0,
				//porcentaje
				'city_id'           => 1,
				'meta_description'  => 'Paragliding',
				'keywords'          => 'Paragliding',
				'include'           => 'Seguro de vida y accidentes, Video de la actividad en parapente  duración 4 minutos, 10 fotografías de la actividad, Transporte',
				// price include
				'suggestion'        => 'Calzado deportivo En climas fríos y cálidos, Chaquetas livianas, Bloqueador solar, Gafas y gorra, Personas entre los 15-120 kilos de peso y con  discapacidades pueden volar',
			] );
			
			Product::create( [
				'id'                => 85,
				'tittle'            => 'Balsaje',
				'description'       => 'El balsaje es un tour a lo largo del agradable Río la vieja en una balsa, construida de troncos de balsa cosechada localmente.  Antes y durante esta aventura pacífica y flotante serás sumergido entre la diversidad de flora y fauna de esta fértil región.    Adicionalmente escucharas los sonidos y el olor de los más ricos perfumes que expele la naturaleza, disfrutarás de un delicioso y tradicional almuerzo típico envuelto en una hoja verde de plátano servido con jugos naturales frescos.',
				'short_description' => 'El balsaje es un tour a lo largo del agradable Río la vieja en una balsa, construida de troncos de balsa cosechada localmente.',
				'slug_url'          => str_slug( 'Balsaje es', '-' ),
				'days'              => '6 horas',
				'price_adults'      => '125',
				'price_children'    => '62',
				'local'             => 'es',
				'type'              => 1, //activity
				'discount'          => 0, //porcentaje
				'city_id'           => 1,
				'meta_description'  => 'Balsaje',
				'keywords'          => 'Balsaje',
				'include'           => 'Chalecos salvavidas durante el recorrido, Almuerzo tipo fiambre  acompañado de  gaseosa postobon y tinto',
				'suggestion'        => 'Ropa comoda, Traje de baño, Llevar otra muda de ropa, Gorra y bloqueador solar, Repelente, Zapatos cómodos que se puedan mojar, Documento de identidad "',
			] );
			
			Product::create( [
				'id'                => 86,
				'tittle'            => 'Balsaje',
				'description'       => 'The Balsaje is a tour of the gentle “La Vieja”  (“Old Lady”) River by raft, constructed of locally harvested logs of lashed balsa. Before and during this peaceful floating adventure you will be introduced to the various fauna and flora of this particularly fertile region. In addition to hearing the sounds and smelling the rich scents of nature, you will enjoy a delicious traditional lunch wrapped in verdent banana leaves and served with fresh squeezed fruit juices.',
				'short_description' => 'The Balsaje is a tour of the gentle “La Vieja”  (“Old Lady”) River by raft, constructed of locally harvested logs of lashed balsa',
				'slug_url'          => str_slug( 'Balsaje', '-' ),
				'days'              => '6 hours',
				'price_adults'      => '125',
				'price_children'    => '62',
				'local'             => 'en',
				'type'              => 1, //activity
				'discount'          => 0, //porcentaje
				'city_id'           => 1,
				'meta_description'  => 'Balsaje The Balsaje is a tour of the gentle “La Vieja” ',
				'keywords'          => 'Balsaje',
				'include'           => 'Lifejacket, Typical lunch and coffee',
				'suggestion'        => 'Comfortable clothes, Change clothes, Swimming suit, Cap, Sunblock, Repelent, Shoes to water',
			] );
			
			Product::create( [
				'id'                => 87,
				'tittle'            => 'Ciclo rutas',
				'description'       => 'Toda una aventura en el Quindío disfrutarás gracias a las rutas diseñadas por los hermosos senderos de Salento - Quindío, lugar que se identifica por ser  un destino exótico en latinoamerica.  Estas exclusivas rutas te permitirán vivir una experiencia inolvidable, gracias al goce de un deporte extremo que te brinda la posibilidad de disfrutar de la invaluable naturaleza Quindiana, su aire puro y tranquilidad inigualable. Tenemos una ruta que incluye una hora de pesca.',
				'short_description' => 'Toda una aventura en el Quindío disfrutarás gracias a las rutas diseñadas por los hermosos senderos de Salento - Quindío, lugar que se identifica por ser  un destino exótico en latinoamerica.  Estas exclusivas rutas te permitirán vivir una experiencia inolvidable, gracias al goce de un deporte extremo que te brinda la posibilidad de disfrutar de la invaluable naturaleza Quindiana, su aire puro y tranquilidad inigualable. Tenemos una ruta que incluye una hora de pesca.',
				'slug_url'          => str_slug( 'Ciclo rutas', '-' ),
				'days'              => '4 horas',
				'price_adults'      => '125',
				'price_children'    => '62',
				'local'             => 'es',
				'type'              => 1, //activity
				'discount'          => 0, //porcentaje
				'city_id'           => 1,
				'meta_description'  => 'Ciclo rutas',
				'keywords'          => 'Ciclo rutas',
				'include'           => 'Full equipo, Transporte, Guía, Refrigerio - agua - frutas - galletas, Seguros, Tour de pesca de trucha incluye caña de pescar  ',
				'suggestion'        => 'Ropa comoda, Bloqueador ',
			] );
			
			Product::create( [
				'id'                => 88,
				'tittle'            => 'Mountain bike',
				'description'       => 'This is a real adventure in Quindío!.  Designed routes through beautiful ways of Salento Quindío this town is identified as an exotic  destination in Latin America.  The routes  will give you the possibility to practice an extreme sport enjoying of colombian nature, its pure air and uncomparable tranquility. We have a route which includes an hour of fishing',
				'short_description' => 'This is a real adventure in Quindío!.  Designed routes through beautiful ways of Salento Quindío this town is identified as an exotic  destination in Latin America.  The routes  will give you the possibility to practice an extreme sport enjoying of colombian nature, its pure air and uncomparable tranquility. We have a route which includes an hour of fishing',
				'slug_url'          => str_slug( 'Mountain bike', '-' ),
				'days'              => '4 hours',
				'price_adults'      => '125',
				'price_children'    => '62',
				'local'             => 'en',
				'type'              => 1, //activity
				'discount'          => 0, //porcentaje
				'city_id'           => 1,
				'meta_description'  => 'Mountain bike',
				'keywords'          => 'Mountain bike',
				'include'           => 'Cycling equipment, Guide, Snacks - Fruits - Water, Fishing rod',
				'suggestion'        => 'Sun block, Comfortable clothes ',
			] );
			
			Product::create( [
				'id'                => 89,
				'tittle'            => 'Avistamiento de aves',
				'description'       => 'Colombia es reconocido mundialmente por su riqueza natural y a su vez  distinguido por ser un paìs con una gran cantidad de especies de aves (1.900 especies)  y el  Quindío cuenta con 415 especies de pájaros de las que seis son endémicas. Caminatas, binoculares,  silencio, calma  y un poco de concentración te permitirán disfrutar de la majestuosidad de las aves que cantan y aletean en nuestro territorio, sus intensos colores y su indescriptible belleza.',
				'short_description' => 'Caminatas, binoculares,  silencio, calma  y un poco de concentración te permitirán disfrutar de la majestuosidad de las aves que cantan y aletean en nuestro territorio',
				'slug_url'          => str_slug( 'Avistamiento de aves', '-' ),
				'days'              => '10 horas',
				'price_adults'      => '125',
				'price_children'    => '62',
				'local'             => 'es',
				'type'              => 1, //activity
				'discount'          => 0, //porcentaje
				'city_id'           => 1,
				'meta_description'  => 'Avistamiento de aves',
				'keywords'          => 'Avistamiento de aves',
				'include'           => '',
				'suggestion'        => 'Bloqueador solar, Zapatos de agarre, Sombrero, Gafas de sol, Cámara , Ropa y  elementos de colores sobrios',
			] );
			
			Product::create( [
				'id'                => 90,
				'tittle'            => 'Bird watching',
				'description'       => 'Colombia is known internationally because of its natural wealth and its bird diversity (1900 species) and Quindío department has 415 of them and 6 of them are endemic. Between hikings, binoculars, silence, calm and a bit of concentration you will be amazed with the majesty of birds singing and fluttering in our territory; their intense colors and undescriptible beauty',
				'short_description' => 'Between hikings, binoculars, silence, calm and a bit of concentration you will be amazed with the majesty of birds singing and fluttering ',
				'slug_url'          => str_slug( 'Bird watching', '-' ),
				'days'              => '10 horas',
				'price_adults'      => '125',
				'price_children'    => '62',
				'local'             => 'en',
				'type'              => 1, //activity
				'discount'          => 0, //porcentaje
				'city_id'           => 1,
				'meta_description'  => 'Bird watching',
				'keywords'          => 'Bird watching',
				'include'           => '',
				'suggestion'        => 'Sun block, Comfortable and no color clothes, Hiking shoes, Hat, Sunglasess',
			] );
		}
	}
