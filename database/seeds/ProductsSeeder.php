<?php
    
    use App\Product;
    use Illuminate\Database\Seeder;
    
    class ProductsSeeder extends Seeder
    {
        
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            
            //========== Inicio de las actividades ==============//
            
            Product::create([
                'id'               => 1,
                'tittle'           => 'The Coffee Park',
                'description'      => 'THE  COFFEE  PARK  (El  Parque  del  Café),  as  its  name  suggests,  is  a  theme park  with  fairly  obvious  theme.  It  is  in  part  a  condensed  tour  of  Quindío’s renowned coffee crops, replete with the detailed history and production process of Colombia’s most famous goods. El Parque pays tribute to the labors of coffee growers through the centuries. The larger area of the park (56 acres) is devoted to  over  20  amusement  rides,  ensconced  within  4000  species  of  plants  and trees. Entertainment includes two very dramatic roller coasters as well as tamer water rides and cultural shows. With an average temperature of 21 degrees C, the Coffee Park is comfortable recreating year round, day and evening (bring a sweater), the perfect blend of ancestral tradition with modernity and innovation',
                'itinerary'        => 'Breakfast,Park travel,Lunch,Atraction,Drink coffee,Dinner,',
                'slug_url'         => 'coffe-park',
                'days'             => '8 hours',
                'price_adults'     => '100',
                'price_children'   => '50',
                'local'            => 'en',
                'type'             => 1,
                'discount'         => 10, //porcentaje
                'city_id'          => 1,
                'meta_description' => 'The Coffee Park',
                'keywords'         => 'The Coffee Park',
            ]);
            
            Product::create([
                'id'               => 2,
                'tittle'           => 'Parque del café',
                'description'      => 'El parque de café como su nombre lo indica es un tour  del  renombrado  cultivo  de  café,  lleno  de  historia  y  del  proceso  de producción del commodity más famoso de Colombia. El Parque rinde tributo a la labor  de los  caficultores  a  través  de  siglos.  El  área  más  grande  del  Parque (56  hectáreas)  alberga  más  de  20  atracciones  mecánicas,  instaladas  entre 4000  especies  de  plantas  y  árboles.  El  entretenimiento  incluye,  entre  otras, montaña  rusa,  montaña  acuática  y  shows  culturales.  Con  una  temperatura  de 21º,  el  Parque  del  Café  recrea  todo  el  año,  de  día  y  de  noche  (trae  una chaqueta), la  mezcla  perfecta de la  tradición  ancestral  con la modernidad y la innovación.',
                'itinerary'        => 'Breakfast,Park travel,Lunch,Atraction,Drink coffee,Dinner,',
                'slug_url'         => 'Parque del café',
                'days'             => '8 horas',
                'price_adults'     => '100',
                'price_children'   => '50',
                'local'            => 'es',
                'type'             => 1,
                'discount'         => 10, //porcentaje
                'city_id'          => 1,
                'meta_description' => 'Parque del café',
                'keywords'         => 'Parque del café',
            ]);
            
            Product::create([
                'id'               => 3,
                'tittle'           => 'Panaca',
                'description'      => 'PANACA is the first purely zoo-agricultural theme park in the world, the biggest in Latin America and offers a unique experience of interaction with the regional agrarian countryside. Here you will find the most amazing shows, educational theme stations and the biggest collection of domestic zoology in the world. You will enjoy an unforgettable experience of the relations between animals and nature - a whole day of fun and excitement interacting with more than 4,500 animal species in a journey of 2.8 kilometers with side activities such as an ecological tour, farmyard milking practices, horseback riding, Tibetan bridges and canopy flying',
                'itinerary'        => 'Breakfast,Park travel,Lunch,Atraction,Drink coffee,Dinner,',
                'slug_url'         => 'panaca',
                'price_adults'     => '120',
                'price_children'   => '60',
                'days'             => '8 hours',
                'local'            => 'en',
                'type'             => 1,
                'discount'         => 20, //porcentaje
                'city_id'          => 1,
                'meta_description' => 'Panaca',
                'keywords'         => 'Panaca',
            ]);
            
            Product::create([
                'id'               => 4,
                'tittle'           => 'Panaca',
                'description'      => 'PANACA es el primer parque temático agropecuario en el mundo y el más grande en Latinoamérica que ofrece una experiencia única llena de diversión e interacción con el campo, cuenta con los Shows más sorprendentes, las más impresionantes Estaciones temáticas y la colección de zoología doméstica más grande del mundo, donde se vive una experiencia inigualable entre los animales, la naturaleza y el hombre. En este Parque, se disfruta un día entero de diversión, emoción y adrenalina, y se experimentan emociones fuertes en cada rincón interactuando con más de 4.500 animales en un recorrido de 2.8 kilómetros. Ven y vive una gran aventura, rodeada de sensacionales paisajes, naturaleza sin límite, animales asombrosos y un sinfín de actividades como caminatas ecológicas, prácticas de ordeño, cabalgatas, puentes tibetanos, canopy y más. ',
                'itinerary'        => 'Breakfast,Park travel,Lunch,Atraction,Drink coffee,Dinner,',
                'slug_url'         => 'panaca-es',
                'price_adults'     => '120',
                'price_children'   => '60',
                'days'             => '8 horas',
                'local'            => 'es',
                'type'             => 1,
                'discount'         => 20, //porcentaje
                'city_id'          => 2,
                'meta_description' => 'Panaca',
                'keywords'         => 'Panaca',
            ]);
            
            Product::create([
                'id'               => 5,
                'tittle'           => 'Recuca',
                'description'      => 'You can experience the Coffee Culture in all its glory at RECUCA in the midst of thriving coffee and banana plantations. Recreate the role of the coffee growers past and present by actively participating in the cultivation work. The coffee beans are harvested and processed by hand with the garments currently used by the countrymen of the region. Experts will teach you to how to choose and pick properly ripened beans (granos) and husk, dry, roast and toast the grain, much as coffee ancestors have for hundreds of years (some things just cannot and should not change). Finally, ahhh, to taste the final product. Learn how to discriminate between the various bean qualities, aromas and of course flavors.',
                'itinerary'        => 'Breakfast,Park travel,Lunch,Atraction,Drink coffee,Dinner,',
                'slug_url'         => 'recuca',
                'days'             => '8 Hours',
                'price_adults'     => '125',
                'price_children'   => '62',
                'local'            => 'en',
                'type'             => 1,
                'discount'         => 0, //porcentaje
                'city_id'          => 1,
                'meta_description' => 'Recuca',
                'keywords'         => 'Recuca',
            ]);
            
            
            Product::create([
                'id'               => 6,
                'tittle'           => 'Recuca',
                'description'      => 'Podrás experimentar la cultura cafetera en todo su esplendor en RECUCA en medio de los robustos cultivos de café y banano. Personificar a los tradicionales recolectores de café participando activamente en su trabajo. Los granos de café son cultivados y procesados a mano con la indumentaria que usan los campesinos de la región. Aprenderás de expertos a elegir y recoger apropiadamente los granos maduros, pelarlos, lavarlos, secarlos, tostarlos y seleccionarlos como los ancestros cafeteros lo han hecho por cientos de años (algunas cosas no pueden cambiar y no deberían cambiar). Degustarás el producto final aprendiendo a identificar las diversas calidades de grano, aromas y por su puesto sabores. ',
                'itinerary'        => 'Breakfast,Park travel,Lunch,Atraction,Drink coffee,Dinner,',
                'slug_url'         => 'recuca-es',
                'days'             => '8 horas',
                'price_adults'     => '125',
                'price_children'   => '62',
                'local'            => 'es',
                'type'             => 1,
                'discount'         => 0, //porcentaje
                'city_id'          => 2,
                'meta_description' => 'Recuca',
                'keywords'         => 'Recuca',
            ]);
            
            Product::create([
                'id'               => 7,
                'tittle'           => 'Las cascadas de Río Verde',
                'description'      => 'Las cascadas de Río Verde son una reserva natural de 80 hectáreas en Córdoba Quindío a una hora y media de Armenia, ofrece fascinantes paisajes naturales para quienes no se oponen a caminar varias millas en los Andes.  El viaje empieza con un paseo en Jeep de 30 minutos sobre caminos agrestes, ¡espera!, después, a dos kilómetros una agradable caminata en ascenso rodeado de bellísimo y robusto ganado pastando campos entremezclados con una densa jungla de ficus gigante, cedro negro, eucaliptos y helechos.  Las vistas espectaculares hacen que la fatiga muscular leve y la falta de aire no sólo sea agradable, sino inolvidable.  Tan pronto como llegues a la sede de la reserva  (que también es la casa del guía y en su tiempo fue un territorio invadido por la guerrilla), donde los turistas son recibidos con frutas locales, aguapanela caliente  (bebida de caña de azúcar) y deliciosos quesos con bocadillos producidos por los habitantes de la vereda. ',
                'itinerary'        => 'prueba tittle',
                'slug_url'         => str_slug('Las cascadas de Río Verde', '-'),
                'days'             => '5 horas',
                'price_adults'     => 100,
                'price_children'   => 100,
                'discount'         => 10, //porcentaje
                'local'            => 'es',
                'type'             => 1, //package,activity
                'city_id'          => 1,
                'meta_description' => 'Las cascadas de Río Verde',
                'keywords'         => 'Las cascadas de Río Verde',
            
            ]);
            
            Product::create([
                'id'               => 8,
                'tittle'           => 'The Río Verde Waterfalls',
                'description'      => 'The Río Verde Waterfalls is a 80 acres natural reserve located in Córdoba, about one and a half hour drive from Armenia, offering  beautiful natural landscapes for those not averse to hiking several miles in the Andes.The trip begins with rigorous 30 minutes jeep ride over rugged dirt/boulder roads, hang on!, then a two kilometer gentle uphill hike through gorgeous high altitude cattle grazing fields interspersed with dense jungle of giant ficus, black cedar, eucalyptus and fern trees.  The spectacular views make the mild muscle fatigue and shortness of breath not only pleasant but unforgettable.   One soon arrives at the main reserve site (also the expert guide\'s home and actually a former \'guerilla\' hideout more than one decade ago), where visitors are greeted with local fruit, warm panela (sugar cane extract) and delicious cheeses made by the inhabitants of the village.',
                'itinerary'        => 'waterfalls in cordoba (picnic lunch  in platano or congo leaves)',
                'slug_url'         => str_slug('The Río Verde Waterfalls'),
                'days'             => '5 hours',
                'price_adults'     => '125',
                'price_children'   => '62',
                'local'            => 'en',
                'type'             => 1, //activity
                'discount'         => 0, //porcentaje
                'city_id'          => 2,
                'meta_description' => 'The Río Verde Waterfalls',
                'keywords'         => 'The Río Verde Waterfalls',
            ]);
            
            Product::create([
                'id'               => 9,
                'tittle'           => 'Nevado de santa Isable y laguna de otun',
                'description'      => 'En este recorrido tenemos la oportunidad de conocer 2 lugares fantásticos del Parque Nacional los Nevados; la Laguna del Otún y el Nevado de Santa Isabel. Laguna del Otún: es el humedal más importante del Parque Nacional los Nevados, ubicada a una altura de 3.950 m.s.n.m. allí nace el rio Otún, fuente de agua para los habitantes de Pereira. Nevado de Santa Isabel: fue llamado por los indígenas Poleka Kasue que significa “doncella de la montaña” es uno de los últimos 6 glaciares de Colombia, tiene una altura de 4.750 m.s.n.m. ',
                'itinerary'        => 'Nevado de santa Isable y laguna de otun',
                'slug_url'         => str_slug('Nevado de santa Isable y laguna de otun'),
                'days'             => '8 horas',
                'price_adults'     => '125',
                'price_children'   => '62',
                'local'            => 'es',
                'type'             => 1, //activity
                'discount'         => 0, //porcentaje
                'city_id'          => 2,
                'meta_description' => 'Nevado de santa Isable y laguna de otun',
                'keywords'         => 'Nevado de santa Isable y laguna de otun',
            ]);
            
            Product::create([
                'id'               => 10,
                'tittle'           => 'The Otun Lagoon and Santa Isabel Nevado',
                'description'      => 'This hiking will give us the opportunity to visit two wonderful places of Nevados National Park; the Otún lagoon and Santa Isabel Nevado.The Otun Lagoon (La Laguna del Otún) is the most important wetland of Nevados National Park, it is at 3950 meters above see level, over there the Otún river mouth is, which provides water for Pereira populationSanta Isabel Nevado was called by Indigenous ""Poleka Kasue"" or ""Mountain Maiden"" in English, the nevado is one of the last six glaciers of Colombia, its height is 4750 meters above see level.',
                'itinerary'        => 'The Otun Lagoon and Santa Isabel Nevado',
                'slug_url'         => str_slug('The Otun Lagoon and Santa Isabel Nevado'),
                'days'             => '8 hours',
                'price_adults'     => '125',
                'price_children'   => '62',
                'local'            => 'en',
                'type'             => 1, //activity
                'discount'         => 0, //porcentaje
                'city_id'          => 2,
                'meta_description' => 'The Otun Lagoon and Santa Isabel Nevado',
                'keywords'         => 'The Otun Lagoon and Santa Isabel Nevado',
            ]);
            
            Product::create([
                'id'               => 11,
                'tittle'           => 'Quimbaya Museum',
                'description'      => 'The Quimbaya “Gold” Museum is relatively small, but one of the more beautiful museums in Colombia. It is a tribute to the first native inhabitants of Quindío who created an extensive indigenous art in goldsmithery and ceramics. The archaeological exhibits are accompanied by detailed written scripts that describe the results of rigorous scientific investigations. The curator’s primary mission is to integrate the rich beauty of the pre-Hispanic legacy (spanning over 10,000 years!) with an increasing knowledge, awareness and deep respect for the indigenous tribes. In addition to exhibitions of art and architecture, the museum also organizes anthropological theme tours, more specifically targeting children.',
                'slug_url'         => str_slug('Quimbaya Museum'),
                'days'             => '4 Hours',
                'price_adults'     => '125',
                'price_children'   => '62',
                'local'            => 'en',
                'type'             => 1, //activity
                'discount'         => 0, //porcentaje
                'city_id'          => 1,
                'meta_description' => 'Quimbaya Museum',
                'keywords'         => 'Quimbaya Museum',
            ]);
            
            Product::create([
                'id'               => 12,
                'tittle'           => 'Museo Quimbaya',
                'description'      => 'El museo de Oro Quimbaya es relativamente pequeño, pero es uno de los más hermosos museos de Colombia.  Es un tributo a los primeros habitantes nativos del Quindío quienes crearon un diverso e invaluable arte indígena en orfebrería y cerámica.  Las exhibiciones arqueológicas están acompañadas de un guión que describe los resultados de rigurosos investigaciones científicas.  La misión fundamental del museo es integrar la abundante belleza de la legacía prehispánica  (abarca más de 10.000 años) con un conocimiento creciente, conciencia y profundo respeto por las tribus indígenas.  Adicional a las exhibiciones de arte y arquitectura, el museo también organiza recorridos temáticos antropológicos especialmente dirigidos a niños.',
                'slug_url'         => str_slug('Museo Quimbaya'),
                'days'             => '4 Hours',
                'price_adults'     => '125',
                'price_children'   => '62',
                'local'            => 'es',
                'type'             => 1, //activity
                'discount'         => 0, //porcentaje
                'city_id'          => 1,
                'meta_description' => 'Museo Quimbaya',
                'keywords'         => 'Museo Quimbaya',
            ]);
            
            Product::create([
                'id'               => 13,
                'tittle'           => 'The Barbas´ palace',
                'description'      => 'About two kilometers(by 4WD Jeep)from the town square in Filandia you will discover the remote Barbas Palace. After donning the rubber boots provided, this spectacular 4km 3.5 hour hikeoffers its visitors a slow paced(but sometimes slightly muddy)walk through dense jungle, along rushing streams and cascading waterfalls, and its highest trees are draped with bright orange howler monkeys (be careful of getting too close – they commonly throw feces at intruders).The guide will point out fascinating plants, geologic phenomena,and interesting facts about the tribes that once inhabited the region (and insects that still do). ',
                'itinerary'        => 'natural park barbas bremen ',
                'slug_url'         => str_slug('The Barbas´ palace'),
                'days'             => '6 Hours',
                'price_adults'     => '125',
                'price_children'   => '62',
                'local'            => 'en',
                'type'             => 1, //activity
                'discount'         => 0, //porcentaje
                'city_id'          => 4,
                'meta_description' => 'The Barbas´ palace',
                'keywords'         => 'The Barbas´ palace',
            ]);
            
            Product::create([
                'id'               => 14,
                'tittle'           => 'El palacio de barbas',
                'description'      => 'Cerca de dos kilómetros (en 4WD Jeep) desde el parque de Filandia descubrirás el remoto Palacio del Barbas.  Luego de ponerse las botas plásticas proveídas, ésta especular excursión de 4km y 3.5 horas ofrece a sus visitantes un recorrido lento  (pero en ocasiones levemente enlodado)  inmerso en la densa selva, a lo largo de los riachuelos y cascadas, sus más altos árboles están cubiertos con los monos aulladores de color naranja brillante  (se cuidadoso de acercarte – ellos comúnmente lanzan heces a intrusos).  El guía te mostrará plantas fascinantes, fenómenos geológicos e interesantes hechos que alguna vez habitaron la región  (e insectos que aún lo hacen).',
                'itinerary'        => 'El palacio de barbas',
                'slug_url'         => str_slug('El palacio de barbas'),
                'days'             => '6 Horas',
                'price_adults'     => '125',
                'price_children'   => '62',
                'local'            => 'es',
                'type'             => 1, //activity
                'discount'         => 0, //porcentaje
                'city_id'          => 4,
                'meta_description' => 'El palacio de barbas',
                'keywords'         => 'El palacio de barbas',
            ]);
            
            Product::create([
                'id'               => 15,
                'tittle'           => 'The Promised land',
                'description'      => 'Just twenty minutes from Armenia, you will find this popular agroecological park. The Promised Land is an authentic Paradise on Earth. The park consists of a virgin forest full of diverse species of plants and animals, and an active archaeological site exploring ancestral indigenous inhabitants. Many of its trails were aboriginal paths, later co-opted by Spanish conquistadors. During the tour you will enjoy “The Charming Trail” which weaves through wetlands, lakes and natural pools. The Promised Land proudly exhibits the fauna and flora of the region in order to promote the preservation of the natural heritage of Quindío. Here you will experience first-hand the spectacle of wildlife in its natural state and at the same time sharing with family and friends.',
                'itinerary'        => 'The Promised land',
                'slug_url'         => str_slug('The Promised land'),
                'days'             => '4 Hours',
                'price_adults'     => '125',
                'price_children'   => '62',
                'local'            => 'en',
                'type'             => 1, //activity
                'discount'         => 0, //porcentaje
                'city_id'          => 4,
                'meta_description' => 'The Promised land',
                'keywords'         => 'The Promised land',
            ]);
            
            Product::create([
                'id'               => 16,
                'tittle'           => 'La tierra prometida',
                'description'      => 'A solo veinte minutos de Armenia, encontrarás este famoso parque agroecológico.  La Tierra Prometida es un auténtico paraíso terrenal.  El parque consiste en un bosque virgen lleno de diversidad de plantas y animales y un lugar arqueológico para explorar los ancestros indígenas.  Muchos de sus senderos fueron caminos aborígenes, más tarde recorridos por conquistadores españoles.  Durante el tour disfrutarás de “El sendero del Encanto”  el cual se haya entre humedales, lagos y piscinas naturales.  La tierra prometida orgullosamente exhibe la fauna y flora de la región para promover la preservación del patrimonio natural del Quindío.  Aquí experimentarás de primera mano el espectáculo de la vida silvestre en su estado natural y al mismo tiempo compartir con familia y amigos.',
                'itinerary'        => 'The Promised land',
                'slug_url'         => str_slug('La tierra prometida'),
                'days'             => '4 Horas',
                'price_adults'     => '125',
                'price_children'   => '62',
                'local'            => 'es',
                'type'             => 1, //activity
                'discount'         => 0, //porcentaje
                'city_id'          => 4,
                'meta_description' => 'La tierra prometida',
                'keywords'         => 'La tierra prometida',
            ]);
            
            Product::create([
                'id'               => 17,
                'tittle'           => 'Towns',
                'description'      => '"Buenavista: Located within the mountain range stretching along the east of Armenia, and from which you can appreciate the most beautiful panoramas and sunsets, is BuenaVista. This picturesque village is surrounded by verdent coffee plantations, and invites you to enjoy the majesty of the landscapes below while sipping a rich iced coffee. This historical Quindiano town is home to San Alberto’s, an international award winning grower of its famous strain of bold but smooth Arabica bean.                                                                                                        FILANDIA is another town with remarkable natural, scenic, and architectural wealth. Its friendly inhabitants and its cozy charm make this well-preserved village built on the summit of a low mountain one of the favorite tourist destinations in the department of Quindío. Unlike other more overcrowded destinations, Filandia is characterized by its cool fresh air, blessed tranquility, warm and engaging populace and historical authenticity  PIJAO:  Over the crest of the range, nestled low among three or four mountain peaks, you can also discover Pijao, another beautiful little higher altitude town (and former regional guerilla stronghold in ages past). Rather ironically, it is the quietest (dare we say sleepiest) village of the entire Quindío department, but ranks nationally among the highest in quality of ‘stress free’ Colombian living. There is one café, owned by a local coffee grower, next to the church on the square that serves up the best granizado  (frozen coffee) in the Quindío department. And if you are lucky, toward dusk, thousands of large squawking white birds (Gaviotas) take flight for a couple minutes and then roost in a huge tree clearly visible in the distance.                                                           CORDOBA        Fifteen minutes drive to the south over rather steep terrain and narrow road is a distinctly more modest town, pinned to the slope of the foothills is Cordoba (no attempt was ever made to create a level spot in the entire village). Like Pijao, Cordoba was once a guerilla stronghold, and is now simply noted for its quietude and bliss. Several excellent cafes, and serve up high quality beverage from home grown coffee fields. It is from this town that a jeep can carry you up to the Rio Verde waterfalls.                                                                                                         BARCELONA    Barcelona and Rio Verde are twin towns, both small but renowned collectively as a gastronomic destination of Quindío. These modest villages are the best locations to become familiar with the large variety of “platos tIpicos” or traditional foods of the region.                                                                                                                                                             SALENTO, COCORA VALLEY, CRAFTSMAN VILLAGE: The twisting mountain road leading to Salento reveals dramatic green valleys, lush jungle-layered peaks and banana and plantain covered foothills. After maybe five miles drive Salento is reached, a slightly larger town, with beautiful (often largely pedestrian) streets, frequently traversed by traditional coffee growers dressed in their standard garb (sombrero, light pants, colorful shawls and mustachioed visage) strolling to the main square for a cerveza fría, tomales, and traditional entertainment.',
                'itinerary'        => 'Towns',
                'slug_url'         => str_slug('Towns'),
                'days'             => '8 hours',
                'price_adults'     => '125',
                'price_children'   => '62',
                'local'            => 'en',
                'type'             => 1, //activity
                'discount'         => 0, //porcentaje
                'city_id'          => 3,
                'meta_description' => 'Towns',
                'keywords'         => 'Towns',
            ]);
            
            Product::create([
                'id'               => 18,
                'tittle'           => 'Pueblos',
                'description'      => 'Buenavista:  Situado en la cordillera que se extiende a lo largo del lado este de Armenia desde donde se aprecian los más bellos panoramas y puestas de sol, se encuentra Buenavista. Este pintoresco pueblo está rodeado de verdes plantaciones de café e invita a disfrutar de la majestuosidad de los paisajes que se divisan en la parte baja mientras tomas un rico café helado. Este pueblo histórico del Quindío es el hogar del Café San Alberto, ganador de premios internacionales por su famoso grano Arabica y su suave sabor.                                                                                                                                                                                                  FILANDIA:es otro pueblo con notable riqueza natural y arquitectónica. Sus habitantes amistosos y su encanto acogedor hacen de este pueblo construido en la cumbre de una montaña baja, uno de los destinos turísticos favoritos en el departamento de Quindío. A diferencia de otros destinos más concurridos, Filandia se caracteriza por su aire fresco, tranquilidad, atractiva población y autenticidad histórica. A veces parece haber sido "detenida en el tiempo" con sus ocasionales carrozas tiradas por caballos, el pastoreo de ganado, salones de reunión a veces ruidosos y los artesanos que tejen los cestos característicos de la región. En las afueras, la reserva arbórea natural, las cascadas, y la fauna / flora del Bosque de Bremen que hacen de este, un pueblo más atractivo.                                                                                                               PIJAO: A lo largo de la cima de la cordillera, enclavada entre las tres o cuatro cumbres de las montañas, se encuentra Pijao, otro hermoso y pequeño pueblo de altura (y antigua fortaleza guerrillera en épocas pasadas). Irónicamente, es la aldea más silenciosa de todo el departamento del Quindío, pero se ubica a nivel nacional entre las más altas en calidad de vida, libre de estrés en Colombia.                                                                                                               BUENAVISTA: son pueblos gemelos, pequeños pero reconocidas colectivamente como destino gastronómico del Quindío. Estos modestos poblados son los mejores lugares para conocer la gran variedad de platos típicos o comidas tradicionales de la región. Bordeando las orillas del río “Río Verde”, que fluye rápidamente (y por lo tanto sin las impresionantes vistas que ofrecen los puntos altos de los otros pueblos), hay al menos 15 pequeños restaurantes y tabernas.                                                                                                         CORDOBA: Quince minutos en coche por un camino estrecho y empinado se encuentra Córdoba, un pueblo claramente más modesto y discreto, ubicado sobre la ladera hacia el sur del departamento. Al igual que Pijao, Córdoba fue una vez una fortaleza guerrillera, y ahora es simplemente conocida por su quietud y tranquilidad. En la plaza es posible disfrutar varios cafés y bebidas excelentes de alta calidad de los cultivos de café locales. Este lugar es el punto de partida  para un jeep que puede llevarte hasta las cascadas de Rio Verde.                                                                                                                                                     SALENTO: El camino serpenteante en medio de la montaña que conduce a Salento revela los dramáticos valles verdes, los exuberantes picos de las montañas y colinas cubiertas por plantaciones de plátano y banano. Después de unos ocho kilómetros se llega en vehículo a Salento, un pueblo un poco más grande, con calles hermosas, frecuentadas por los cafeteros tradicionales vestidos con su atuendo típico (sombrero, pantalones ligeros, chales de colores y bigote) que llegan a la plaza del pueblo para tomar una cerveza fría y conversar con sus amigos.',
                'itinerary'        => 'Pueblos',
                'slug_url'         => str_slug('Pueblos'),
                'days'             => '8 horas',
                'price_adults'     => '125',
                'price_children'   => '62',
                'local'            => 'es',
                'type'             => 1, //activity
                'discount'         => 0, //porcentaje
                'city_id'          => 3,
                'meta_description' => 'Pueblos',
                'keywords'         => 'Pueblos',
            ]);
            
            
            //========== Fin de las actividades ==============//
            
            
            //========== Inicio de Paquetes ==============//
            
            
            Product::create([
                'id'               => 19,
                'tittle'           => 'Plan a less Physically Taxing',
                'slug_url'         => str_slug('Plan a less Physically Taxing', '-'),
                'days'             => '9 Days',
                'price_adults'     => 100,
                'price_children'   => 100,
                'discount'         => 10, //porcentaje
                'meta_description' => 'Plan a less Physically Taxing',
                'keywords'         => 'Plan a less Physically Taxing',
                'status'           => 1,
                'local'            => 'en',
                'description'      => 'Each package includes a bilingual (English-Spanish) touristc informer, and transportation from Hotel to each place and going back, transport from and to the airport, snacks, drinks, souvenir ',
                'itinerary'        => '
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
<li><i class="fa fa-clock-o fa-li"></i>8am BREAKFAST AT ACCOMMODATION</li>
<li><i class="fa fa-clock-o fa-li"></i>9am TOUR OF ARMENIA, MERCAR</li>
<li><i class="fa fa-clock-o fa-li"></i>1pm CAFÉ QUINDIO</li>
<li><i class="fa fa-clock-o fa-li"></i>3pm TOP OF MOCAWA</li>
<li><i class="fa fa-clock-o fa-li"></i>7pm PICK UP FOR DINNER AT GERANIOS</li>
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
<li><i class="fa fa-clock-o fa-li"></i>8am BREAKFAST AT ACCOMMODATION</li>
<li><i class="fa fa-clock-o fa-li"></i>9am PARQUE DEL CAFE (LUNCH INCLUDED)</li>
<li><i class="fa fa-clock-o fa-li"></i>6pm Return</li>
<li><i class="fa fa-clock-o fa-li"></i>7pm Dinner at acommodations</li>
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
<li><i class="fa fa-clock-o fa-li"></i>8am BREAKFAST AT ACCOMMODATION</li>
<li><i class="fa fa-clock-o fa-li"></i>9am RANCHO CALIFORNIA ENJOY SINCE EXTREME SPORTS TO NATURE WALKS OR FISHING (LUNCH INCLUDED)</li>
<li><i class="fa fa-clock-o fa-li"></i>6pm Return</li>
<li><i class="fa fa-clock-o fa-li"></i>7pm Dinner at acommodations</li>
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
<li><i class="fa fa-clock-o fa-li"></i>8am BREAKFAST AT ACCOMMODATION</li>
<li><i class="fa fa-clock-o fa-li"></i>10am TOUR BUENAVISTA -  ENJOY THE MOST BEAUTIFUL VIEWS, CRAFTS AND DELICIOUS COFFEE </li>
<li><i class="fa fa-clock-o fa-li"></i>1pm LUNCH AT CONCORDE RESTAURANT</li>
<li><i class="fa fa-clock-o fa-li"></i>3pm TOUR PIJAO -  ENJOY THE MOST BEAUTIFUL VIEWS, CRAFTS AND DELICIOUS COFFEE </li>
<li><i class="fa fa-clock-o fa-li"></i>6pm Return </li>
<li><i class="fa fa-clock-o fa-li"></i>7pm Dinner at acommodations</li>
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
<li><i class="fa fa-clock-o fa-li"></i>8am BREAKFAST AT ACCOMMODATION</li>
<li><i class="fa fa-clock-o fa-li"></i>9am BOTANICAL GARDEN</li>
<li><i class="fa fa-clock-o fa-li"></i>2pm LUNCH AT ROBLE RESTAURANT</li>
<li><i class="fa fa-clock-o fa-li"></i>4pm PARQUE DE LA VIDA</li>
<li><i class="fa fa-clock-o fa-li"></i>6pm Return </li>
<li><i class="fa fa-clock-o fa-li"></i>7pm Dinner at acommodations</li>
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
<li><i class="fa fa-clock-o fa-li"></i>8am BREAKFAST AT ACCOMMODATION</li>
<li><i class="fa fa-clock-o fa-li"></i>9am SALENTO, VALLE DEL COCORA</li>
<li><i class="fa fa-clock-o fa-li"></i>2pm LUNCH</li>
<li><i class="fa fa-clock-o fa-li"></i>6pm Return </li>
<li><i class="fa fa-clock-o fa-li"></i>7pm Dinner at acommodations</li>
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
<li><i class="fa fa-clock-o fa-li"></i>8am BREAKFAST AT ACCOMMODATION</li>
<li><i class="fa fa-clock-o fa-li"></i>9am RECUCA LUNCH INCLUDED-  </li>
<li><i class="fa fa-clock-o fa-li"></i>6pm BARCELONA  (TRY FORCHA, KUMIS, SIROPE, PANDEBONOS AND TRADITIONAL FOOD) </li>
<li><i class="fa fa-clock-o fa-li"></i>8pm Dinner at acommodations</li>
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
<li><i class="fa fa-clock-o fa-li"></i>8am BREAKFAST AT ACCOMMODATION</li>
<li><i class="fa fa-clock-o fa-li"></i>10am MUSEO QUIMBAYA, FILANDIA</li>
<li><i class="fa fa-clock-o fa-li"></i>1pm LUNCH IN FILANDIA</li>
<li><i class="fa fa-clock-o fa-li"></i>3pm TOUR IN FILANDIA AND LOOK OUT</li>
<li><i class="fa fa-clock-o fa-li"></i>6pm DINNER IN FILANDIA </li>
<li><i class="fa fa-clock-o fa-li"></i>8pm FAREWELL  (TRADITIONAL SOUVENIR) LUNCH ON THE WAY TO THE AIRPORT, PICK UP AT THE HOTEL TO AIRPORT </li>
</ul>                           
</div>
</div>
</div>
',
                'type'             => 0, //package,activity
                'city_id'          => 2
            ]);
    
            Product::create([
                'id'               => 20,
                'tittle'           => 'Plan B Most Physically',
                'slug_url'         => str_slug('Plan B Most Physicallyg', '-'),
                'days'             => '7 Days',
                'price_adults'     => 100,
                'price_children'   => 100,
                'discount'         => 10, //porcentaje
                'meta_description' => 'Plan B Most Physically',
                'keywords'         => 'Plan B Most Physically',
                'status'           => 1,
                'local'            => 'en',
                'description'      => 'Each package includes a bilingual (English-Spanish) touristc informer, and transportation from Hotel to each place and going back, transport from and to the airport, snacks, drinks, souvenir ',
                'itinerary'        => '
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
<li><i class="fa fa-clock-o fa-li"></i>8am BREAKFAST AT ACCOMMODATION</li>
<li><i class="fa fa-clock-o fa-li"></i>9am WATERFALLS IN CORDOBA (LUNCH INCLUDED) DINNER IN BALBOA</li>
<li><i class="fa fa-clock-o fa-li"></i>7pm Dinner at acommodations</li>
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
<li><i class="fa fa-clock-o fa-li"></i>8am BREAKFAST AT ACCOMMODATION</li>
<li><i class="fa fa-clock-o fa-li"></i>9am PANACA  (LUNCH INCLUDED)  ACCOMMODATION IN PEREIRA</li>
<li><i class="fa fa-clock-o fa-li"></i>6pm Return</li>
<li><i class="fa fa-clock-o fa-li"></i>7pm Dinner at acommodations</li>
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
<li><i class="fa fa-clock-o fa-li"></i>8am BREAKFAST AT ACCOMMODATION</li>
<li><i class="fa fa-clock-o fa-li"></i>9am BALSAJE ACROSS A RIVER CALLED "La Vieja"  (LUNCH INCLUDED)</li>
<li><i class="fa fa-clock-o fa-li"></i>6pm Return</li>
<li><i class="fa fa-clock-o fa-li"></i>7pm Dinner at acommodations</li>
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
<li><i class="fa fa-clock-o fa-li"></i>8am BREAKFAST AT ACCOMMODATION</li>
<li><i class="fa fa-clock-o fa-li"></i>9am MONTAIN CLIMBING  SANTA ISABEL  RISARALDA (LONG DAY - LUNCH INCLUDED)</li>
<li><i class="fa fa-clock-o fa-li"></i>6pm Return </li>
<li><i class="fa fa-clock-o fa-li"></i>7pm Dinner at acommodations</li>
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
<li><i class="fa fa-clock-o fa-li"></i>8am BREAKFAST AT ACCOMMODATION</li>
<li><i class="fa fa-clock-o fa-li"></i>9am LAGOON  OF  OTUN RISARALDA   (LUNCH INCLUDED) ACCOMMODATION IN TERMALES</li>
<li><i class="fa fa-clock-o fa-li"></i>6pm Return </li>
<li><i class="fa fa-clock-o fa-li"></i>7pm Dinner at acommodations</li>
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
<li><i class="fa fa-clock-o fa-li"></i>8am BREAKFAST AT ACCOMMODATION</li>
<li><i class="fa fa-clock-o fa-li"></i>9am HOT SPRINGS SAN VICENTE RISARALDA ACCOMMODATION</li>
<li><i class="fa fa-clock-o fa-li"></i>6pm Return </li>
<li><i class="fa fa-clock-o fa-li"></i>7pm Dinner at acommodations</li>
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
<li><i class="fa fa-clock-o fa-li"></i>8am BREAKFAST AT ACCOMMODATION</li>
<li><i class="fa fa-clock-o fa-li"></i>9am HOT SPRINGS DE SAN VICENTE RISARALDA (LUNCH INCLUDED)</li>
<li><i class="fa fa-clock-o fa-li"></i>6pm Return </li>
<li><i class="fa fa-clock-o fa-li"></i>8pm FAREWELL  (TRADITIONAL SOUVENIR) LUNCH ON THE WAY TO THE AIRPORT, PICK UP AT THE HOTEL TO AIRPORT </li>
</ul>                           
</div>
</div>
</div>
',
                'type'             => 0, //package,activity
                'city_id'          => 2
            ]);
    
            Product::create([
                'id'               => 21,
                'tittle'           => 'Plan C Outdoors Tour',
                'slug_url'         => str_slug('Plan C Outdoors Tour', '-'),
                'days'             => '7 Days',
                'price_adults'     => 100,
                'price_children'   => 100,
                'discount'         => 10, //porcentaje
                'meta_description' => 'Plan C Outdoors Tour',
                'keywords'         => 'Plan C Outdoors Tour',
                'status'           => 1,
                'local'            => 'en',
                'description'      => 'Each package includes a bilingual (English-Spanish) touristc informer, and transportation from Hotel to each place and going back, transport from and to the airport, snacks, drinks, souvenir ',
                'itinerary'        => '
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
<li><i class="fa fa-clock-o fa-li"></i>8am BREAKFAST AT ACCOMMODATION</li>
<li><i class="fa fa-clock-o fa-li"></i>9am JEEP PANORAMICO</li>
<li><i class="fa fa-clock-o fa-li"></i>7pm Dinner at acommodations</li>
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
<li><i class="fa fa-clock-o fa-li"></i>8am BREAKFAST AT ACCOMMODATION</li>
<li><i class="fa fa-clock-o fa-li"></i>9am NATURE WALK CALARCA (PICNIC LUNCH  IN PLATANO OR CONGO LEAVES)</li>
<li><i class="fa fa-clock-o fa-li"></i>6pm Return</li>
<li><i class="fa fa-clock-o fa-li"></i>7pm Dinner at acommodations</li>
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
<li><i class="fa fa-clock-o fa-li"></i>8am BREAKFAST AT ACCOMMODATION</li>
<li><i class="fa fa-clock-o fa-li"></i>9am CAMPING MONTEROCA</li>
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
<li><i class="fa fa-clock-o fa-li"></i>8am BREAKFAST AT ACCOMMODATION</li>
<li><i class="fa fa-clock-o fa-li"></i>9am CAMPING MONTEROCA</li>
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
<li><i class="fa fa-clock-o fa-li"></i>8am BREAKFAST AT ACCOMMODATION</li>
<li><i class="fa fa-clock-o fa-li"></i>9am Natural park Barbas Bremen </li>
<li><i class="fa fa-clock-o fa-li"></i>6pm Return </li>
<li><i class="fa fa-clock-o fa-li"></i>7pm Dinner at acommodations</li>
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
<li><i class="fa fa-clock-o fa-li"></i>8am BREAKFAST AT ACCOMMODATION</li>
<li><i class="fa fa-clock-o fa-li"></i>9am LAGO CALIMA </li>
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
<li><i class="fa fa-clock-o fa-li"></i>8am BREAKFAST AT ACCOMMODATION</li>
<li><i class="fa fa-clock-o fa-li"></i>9am LAGO CALIMA </li>
</ul>                           
</div>
</div>
</div>
<div class="panel-group">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">
<span class="text-primary">Day </span> 
</h3>
</div>
<div class="panel-body text-muted">
<ul class="fa-ul">
<li><i class="fa fa-clock-o fa-li"></i>FAREWELL  (TRADITIONAL SOUVENIR) LUNCH ON THE WAY TO THE AIRPORT, PICK UP AT THE HOTEL TO AIRPORT </li>
</ul>                           
</div>
</div>
</div>
',
                'type'             => 0, //package,activity
                'city_id'          => 2
            ]);
    
    
            Product::create([
                'id'               => 22,
                'tittle'           => 'Plan a less Physically Taxing',
                'slug_url'         => str_slug('Plan a less Physically Taxing es', '-'),
                'days'             => '9 Days',
                'price_adults'     => 100,
                'price_children'   => 100,
                'discount'         => 10, //porcentaje
                'meta_description' => 'Plan a less Physically Taxing',
                'keywords'         => 'Plan a less Physically Taxing',
                'status'           => 1,
                'local'            => 'es',
                'description'      => 'Each package includes a bilingual (English-Spanish) touristc informer, and transportation from Hotel to each place and going back, transport from and to the airport, snacks, drinks, souvenir ',
                'itinerary'        => '
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
<li><i class="fa fa-clock-o fa-li"></i>8am BREAKFAST AT ACCOMMODATION</li>
<li><i class="fa fa-clock-o fa-li"></i>9am TOUR OF ARMENIA, MERCAR</li>
<li><i class="fa fa-clock-o fa-li"></i>1pm CAFÉ QUINDIO</li>
<li><i class="fa fa-clock-o fa-li"></i>3pm TOP OF MOCAWA</li>
<li><i class="fa fa-clock-o fa-li"></i>7pm PICK UP FOR DINNER AT GERANIOS</li>
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
<li><i class="fa fa-clock-o fa-li"></i>8am BREAKFAST AT ACCOMMODATION</li>
<li><i class="fa fa-clock-o fa-li"></i>9am PARQUE DEL CAFE (LUNCH INCLUDED)</li>
<li><i class="fa fa-clock-o fa-li"></i>6pm Return</li>
<li><i class="fa fa-clock-o fa-li"></i>7pm Dinner at acommodations</li>
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
<li><i class="fa fa-clock-o fa-li"></i>8am BREAKFAST AT ACCOMMODATION</li>
<li><i class="fa fa-clock-o fa-li"></i>9am RANCHO CALIFORNIA ENJOY SINCE EXTREME SPORTS TO NATURE WALKS OR FISHING (LUNCH INCLUDED)</li>
<li><i class="fa fa-clock-o fa-li"></i>6pm Return</li>
<li><i class="fa fa-clock-o fa-li"></i>7pm Dinner at acommodations</li>
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
<li><i class="fa fa-clock-o fa-li"></i>8am BREAKFAST AT ACCOMMODATION</li>
<li><i class="fa fa-clock-o fa-li"></i>10am TOUR BUENAVISTA -  ENJOY THE MOST BEAUTIFUL VIEWS, CRAFTS AND DELICIOUS COFFEE </li>
<li><i class="fa fa-clock-o fa-li"></i>1pm LUNCH AT CONCORDE RESTAURANT</li>
<li><i class="fa fa-clock-o fa-li"></i>3pm TOUR PIJAO -  ENJOY THE MOST BEAUTIFUL VIEWS, CRAFTS AND DELICIOUS COFFEE </li>
<li><i class="fa fa-clock-o fa-li"></i>6pm Return </li>
<li><i class="fa fa-clock-o fa-li"></i>7pm Dinner at acommodations</li>
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
<li><i class="fa fa-clock-o fa-li"></i>8am BREAKFAST AT ACCOMMODATION</li>
<li><i class="fa fa-clock-o fa-li"></i>9am BOTANICAL GARDEN</li>
<li><i class="fa fa-clock-o fa-li"></i>2pm LUNCH AT ROBLE RESTAURANT</li>
<li><i class="fa fa-clock-o fa-li"></i>4pm PARQUE DE LA VIDA</li>
<li><i class="fa fa-clock-o fa-li"></i>6pm Return </li>
<li><i class="fa fa-clock-o fa-li"></i>7pm Dinner at acommodations</li>
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
<li><i class="fa fa-clock-o fa-li"></i>8am BREAKFAST AT ACCOMMODATION</li>
<li><i class="fa fa-clock-o fa-li"></i>9am SALENTO, VALLE DEL COCORA</li>
<li><i class="fa fa-clock-o fa-li"></i>2pm LUNCH</li>
<li><i class="fa fa-clock-o fa-li"></i>6pm Return </li>
<li><i class="fa fa-clock-o fa-li"></i>7pm Dinner at acommodations</li>
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
<li><i class="fa fa-clock-o fa-li"></i>8am BREAKFAST AT ACCOMMODATION</li>
<li><i class="fa fa-clock-o fa-li"></i>9am RECUCA LUNCH INCLUDED-  </li>
<li><i class="fa fa-clock-o fa-li"></i>6pm BARCELONA  (TRY FORCHA, KUMIS, SIROPE, PANDEBONOS AND TRADITIONAL FOOD) </li>
<li><i class="fa fa-clock-o fa-li"></i>8pm Dinner at acommodations</li>
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
<li><i class="fa fa-clock-o fa-li"></i>8am BREAKFAST AT ACCOMMODATION</li>
<li><i class="fa fa-clock-o fa-li"></i>10am MUSEO QUIMBAYA, FILANDIA</li>
<li><i class="fa fa-clock-o fa-li"></i>1pm LUNCH IN FILANDIA</li>
<li><i class="fa fa-clock-o fa-li"></i>3pm TOUR IN FILANDIA AND LOOK OUT</li>
<li><i class="fa fa-clock-o fa-li"></i>6pm DINNER IN FILANDIA </li>
<li><i class="fa fa-clock-o fa-li"></i>8pm FAREWELL  (TRADITIONAL SOUVENIR) LUNCH ON THE WAY TO THE AIRPORT, PICK UP AT THE HOTEL TO AIRPORT </li>
</ul>                           
</div>
</div>
</div>
',
                'type'             => 0, //package,activity
                'city_id'          => 2
            ]);
    
            Product::create([
                'id'               => 23,
                'tittle'           => 'Plan B Most Physically',
                'slug_url'         => str_slug('Plan B Most Physicallyg es', '-'),
                'days'             => '7 Days',
                'price_adults'     => 100,
                'price_children'   => 100,
                'discount'         => 10, //porcentaje
                'meta_description' => 'Plan B Most Physically',
                'keywords'         => 'Plan B Most Physically',
                'status'           => 1,
                'local'            => 'es',
                'description'      => 'Each package includes a bilingual (English-Spanish) touristc informer, and transportation from Hotel to each place and going back, transport from and to the airport, snacks, drinks, souvenir ',
                'itinerary'        => '
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
<li><i class="fa fa-clock-o fa-li"></i>8am BREAKFAST AT ACCOMMODATION</li>
<li><i class="fa fa-clock-o fa-li"></i>9am WATERFALLS IN CORDOBA (LUNCH INCLUDED) DINNER IN BALBOA</li>
<li><i class="fa fa-clock-o fa-li"></i>7pm Dinner at acommodations</li>
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
<li><i class="fa fa-clock-o fa-li"></i>8am BREAKFAST AT ACCOMMODATION</li>
<li><i class="fa fa-clock-o fa-li"></i>9am PANACA  (LUNCH INCLUDED)  ACCOMMODATION IN PEREIRA</li>
<li><i class="fa fa-clock-o fa-li"></i>6pm Return</li>
<li><i class="fa fa-clock-o fa-li"></i>7pm Dinner at acommodations</li>
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
<li><i class="fa fa-clock-o fa-li"></i>8am BREAKFAST AT ACCOMMODATION</li>
<li><i class="fa fa-clock-o fa-li"></i>9am BALSAJE ACROSS A RIVER CALLED "La Vieja"  (LUNCH INCLUDED)</li>
<li><i class="fa fa-clock-o fa-li"></i>6pm Return</li>
<li><i class="fa fa-clock-o fa-li"></i>7pm Dinner at acommodations</li>
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
<li><i class="fa fa-clock-o fa-li"></i>8am BREAKFAST AT ACCOMMODATION</li>
<li><i class="fa fa-clock-o fa-li"></i>9am MONTAIN CLIMBING  SANTA ISABEL  RISARALDA (LONG DAY - LUNCH INCLUDED)</li>
<li><i class="fa fa-clock-o fa-li"></i>6pm Return </li>
<li><i class="fa fa-clock-o fa-li"></i>7pm Dinner at acommodations</li>
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
<li><i class="fa fa-clock-o fa-li"></i>8am BREAKFAST AT ACCOMMODATION</li>
<li><i class="fa fa-clock-o fa-li"></i>9am LAGOON  OF  OTUN RISARALDA   (LUNCH INCLUDED) ACCOMMODATION IN TERMALES</li>
<li><i class="fa fa-clock-o fa-li"></i>6pm Return </li>
<li><i class="fa fa-clock-o fa-li"></i>7pm Dinner at acommodations</li>
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
<li><i class="fa fa-clock-o fa-li"></i>8am BREAKFAST AT ACCOMMODATION</li>
<li><i class="fa fa-clock-o fa-li"></i>9am HOT SPRINGS SAN VICENTE RISARALDA ACCOMMODATION</li>
<li><i class="fa fa-clock-o fa-li"></i>6pm Return </li>
<li><i class="fa fa-clock-o fa-li"></i>7pm Dinner at acommodations</li>
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
<li><i class="fa fa-clock-o fa-li"></i>8am BREAKFAST AT ACCOMMODATION</li>
<li><i class="fa fa-clock-o fa-li"></i>9am HOT SPRINGS DE SAN VICENTE RISARALDA (LUNCH INCLUDED)</li>
<li><i class="fa fa-clock-o fa-li"></i>6pm Return </li>
<li><i class="fa fa-clock-o fa-li"></i>8pm FAREWELL  (TRADITIONAL SOUVENIR) LUNCH ON THE WAY TO THE AIRPORT, PICK UP AT THE HOTEL TO AIRPORT </li>
</ul>                           
</div>
</div>
</div>
',
                'type'             => 0, //package,activity
                'city_id'          => 2
            ]);
    
            Product::create([
                'id'               => 24,
                'tittle'           => 'Plan C Outdoors Tour',
                'slug_url'         => str_slug('Plan C Outdoors Tour es', '-'),
                'days'             => '7 Days',
                'price_adults'     => 100,
                'price_children'   => 100,
                'discount'         => 10, //porcentaje
                'meta_description' => 'Plan C Outdoors Tour',
                'keywords'         => 'Plan C Outdoors Tour',
                'status'           => 1,
                'local'            => 'es',
                'description'      => 'Each package includes a bilingual (English-Spanish) touristc informer, and transportation from Hotel to each place and going back, transport from and to the airport, snacks, drinks, souvenir ',
                'itinerary'        => '
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
<li><i class="fa fa-clock-o fa-li"></i>8am BREAKFAST AT ACCOMMODATION</li>
<li><i class="fa fa-clock-o fa-li"></i>9am JEEP PANORAMICO</li>
<li><i class="fa fa-clock-o fa-li"></i>7pm Dinner at acommodations</li>
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
<li><i class="fa fa-clock-o fa-li"></i>8am BREAKFAST AT ACCOMMODATION</li>
<li><i class="fa fa-clock-o fa-li"></i>9am NATURE WALK CALARCA (PICNIC LUNCH  IN PLATANO OR CONGO LEAVES)</li>
<li><i class="fa fa-clock-o fa-li"></i>6pm Return</li>
<li><i class="fa fa-clock-o fa-li"></i>7pm Dinner at acommodations</li>
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
<li><i class="fa fa-clock-o fa-li"></i>8am BREAKFAST AT ACCOMMODATION</li>
<li><i class="fa fa-clock-o fa-li"></i>9am CAMPING MONTEROCA</li>
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
<li><i class="fa fa-clock-o fa-li"></i>8am BREAKFAST AT ACCOMMODATION</li>
<li><i class="fa fa-clock-o fa-li"></i>9am CAMPING MONTEROCA</li>
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
<li><i class="fa fa-clock-o fa-li"></i>8am BREAKFAST AT ACCOMMODATION</li>
<li><i class="fa fa-clock-o fa-li"></i>9am Natural park Barbas Bremen </li>
<li><i class="fa fa-clock-o fa-li"></i>6pm Return </li>
<li><i class="fa fa-clock-o fa-li"></i>7pm Dinner at acommodations</li>
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
<li><i class="fa fa-clock-o fa-li"></i>8am BREAKFAST AT ACCOMMODATION</li>
<li><i class="fa fa-clock-o fa-li"></i>9am LAGO CALIMA </li>
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
<li><i class="fa fa-clock-o fa-li"></i>8am BREAKFAST AT ACCOMMODATION</li>
<li><i class="fa fa-clock-o fa-li"></i>9am LAGO CALIMA </li>
</ul>                           
</div>
</div>
</div>
<div class="panel-group">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">
<span class="text-primary">Day </span> 
</h3>
</div>
<div class="panel-body text-muted">
<ul class="fa-ul">
<li><i class="fa fa-clock-o fa-li"></i>FAREWELL  (TRADITIONAL SOUVENIR) LUNCH ON THE WAY TO THE AIRPORT, PICK UP AT THE HOTEL TO AIRPORT </li>
</ul>                           
</div>
</div>
</div>
',
                'type'             => 0, //package,activity
                'city_id'          => 2
            ]);
            
            
            //========== Inicio de los Hoteles ==============//
            
            Product::create([
                'id'               => 25,
                'tittle'           => 'Ecohotel Spa Paraíso Verde',
                'slug_url'         => str_slug('Ecohotel Spa Paraíso Verde', '-'),
                'days'             => 1,
                'price_adults'     => 100,
                'price_children'   => 100,
                'discount'         => 10, //porcentaje
                'meta_description' => 'Ecohotel Spa Paraíso Verde',
                'keywords'         => 'Ecohotel Spa Paraíso Verde',
                'status'           => 1,
                'local'            => 'en',
                'description'      => 'El Ecohotel Spa Paraíso Verde se encuentra en Quimbaya y alberga una piscina al aire libre y un spa y centro de bienestar. Además, se ofrecen descuentos especiales en parques locales.Las habitaciones disponen de TV de pantalla plana y un baño privado con ducha y aseo. También hay una casa de 2 dormitorios completamente equipada con cocina y zona de estar.El Ecohotel Spa Paraíso Verde alberga un restaurante que sirve platos locales. También encontrará más locales de restauración en el centro de Montenegro, situado a 5 minutos en coche.Este hotel cuenta con una zona para practicar yoga y meditación, así como jardines tropicales con hamacas y zona de estar.Está a 5 minutos en coche del parque Los Arrieros y a 25 minutos en coche del aeropuerto El Edén de Armenia. A las parejas les encanta la ubicación — Le han puesto un 9 para viajes de dos personas.¡Hablamos tu idioma!',
                'itinerary'        => 'prueba tittle',
                'type'             => 2, //package,activity
                'city_id'          => 4
            ]);
            Product::create([
                'id'               => 26,
                'tittle'           => 'Decameron Las Heliconias - All Inclusive',
                'slug_url'         => str_slug('Decameron Las Heliconias All Inclusive', '-'),
                'days'             => 9,
                'price_adults'     => 100,
                'price_children'   => 100,
                'discount'         => 10, //porcentaje
                'meta_description' => 'Decameron Las Heliconias - All Inclusive',
                'keywords'         => 'Decameron Las Heliconias - All Inclusive',
                'status'           => 1,
                'local'            => 'en',
                'description'      => 'El Hotel Decameron Las Heliconias se encuentra en Quimbaya-Quindío, en una de las regiones más representativas de la región cafetalera de Colombia. Dispone de piscina exterior, restaurante y WiFi gratuita.Este hotel de todo incluido ofrece habitaciones con TV por cable, caja fuerte y ropa de cama. Incluyen baño privado con artículos de aseo y toallas. Los huéspedes también pueden hacer uso de las instalaciones y servicios del Hotel Decameron Panaca, situado a unos 15 minutos en coche del establecimiento. El servicio de traslado está incluido.El restaurante del Decameron Las Heliconias, La Hacienda, presenta la arquitectura típica de las antiguas haciendas cafetaleras de la zona y sirve un buffet de estilo internacional. Además, el establecimiento alberga 2 restaurantes a la carta, El Rincón de los Recuerdos y La Herrería. También cuenta con 3 bares y un buffet de aperitivos.El hotel tiene pistas de tenis, centro de fitness, discoteca y parque infantil. Además, hay servicio de cambio de divisa, campo de golf y varias pistas de voleibol a disposición de los huéspedes. Los domingos se celebran misas en el hotel. A las parejas les encanta la ubicación — Le han puesto un 9 para viajes de dos personas.¡Hablamos tu idioma!',
                'itinerary'        => 'Decameron Las Heliconias - All Inclusive',
                'type'             => 2, //package,activity
                'city_id'          => 4
            ]);
            Product::create([
                'id'               => 27,
                'tittle'           => 'Finca Hotel La Nueva Carmelita',
                'slug_url'         => str_slug('Finca Hotel La Nueva Carmelita', '-'),
                'days'             => 9,
                'price_adults'     => 100,
                'price_children'   => 100,
                'discount'         => 10, //porcentaje
                'meta_description' => 'Finca Hotel La Nueva Carmelita',
                'keywords'         => 'Finca Hotel La Nueva Carmelita',
                'status'           => 1,
                'local'            => 'en',
                'description'      => 'El Finca Hotel La Nueva Carmelita, situado en Quimbaya, a 5 km de Panaca, acepta mascotas y ofrece WiFi gratuita, piscina exterior y solárium. Alberga un bar.Las habitaciones tienen TV de pantalla plana.El establecimiento cuenta con salón compartido.El hotel dispone de mesas de ping pong y billar y proporciona servicio de alquiler de coches. El aeropuerto internacional de El Edén queda a 16 km. ¡Hablamos tu idioma!',
                'itinerary'        => 'Finca Hotel La Nueva Carmelita',
                'type'             => 2, //package,activity
                'city_id'          => 3
            ]);
            Product::create([
                'id'               => 28,
                'tittle'           => 'prueba tittle',
                'slug_url'         => str_slug('prueba title16', '-'),
                'days'             => 9,
                'price_adults'     => 100,
                'price_children'   => 100,
                'discount'         => 10, //porcentaje
                'meta_description' => 'prueba tittle',
                'keywords'         => 'prueba tittle',
                'status'           => 1,
                'local'            => 'es',
                'description'      => '',
                'itinerary'        => 'prueba tittle',
                'type'             => 2, //package,activity
                'city_id'          => 3
            ]);
            Product::create([
                'id'               => 29,
                'tittle'           => 'prueba tittle',
                'slug_url'         => str_slug('prueba title17', '-'),
                'days'             => 9,
                'price_adults'     => 100,
                'price_children'   => 100,
                'discount'         => 10, //porcentaje
                'meta_description' => 'prueba tittle',
                'keywords'         => 'prueba tittle',
                'status'           => 1,
                'local'            => 'es',
                'description'      => '',
                'itinerary'        => 'prueba tittle',
                'type'             => 2, //package,activity
                'city_id'          => 3
            ]);
            
            //========== Fin de los Hoteles ==============//
            
            
            //========== Inicio de servicios adicionales ==============//
            
            Product::create([
                'id'               => 30,
                'tittle'           => 'prueba tittle',
                'slug_url'         => str_slug('prueba title30', '-'),
                'days'             => 9,
                'price_adults'     => 100,
                'price_children'   => 100,
                'discount'         => 10, //porcentaje
                'meta_description' => 'prueba tittle',
                'keywords'         => 'prueba tittle',
                'status'           => 1,
                'local'            => 'es',
                'description'      => '',
                'itinerary'        => 'prueba tittle',
                'type'             => 4, //package,activity
                'city_id'          => 3
            ]);
            
            //========== Fin de servicios adicionales ==============//
            
            /*
            
            Product::create([
                'id'             => 19,
                'tittle'         => 'tour around armenia and meal at geranios restaurant',
                'description'    => 'tour around armenia and meal at geranios restaurant.',
                'itinerary'      => 'tour around armenia and meal at geranios restaurant',
                'slug_url'       => str_slug('tour around armenia and meal at geranios restaurant'),
                'days'           => 1,
                'price_adults'   => '125',
                'price_children' => '62',
                'local'          => 'en',
                'type'           => 1, //activity
                'discount'       => 0, //porcentaje
                'city_id'        => 1
            ]);
            
            Product::create([
                'id'             => 20,
                'tittle'         => 'rancho california enjoy since extrem sports to nature walks or fishing ',
                'description'    => 'rancho california enjoy since extrem sports to nature walks or fishing .',
                'itinerary'      => 'rancho california enjoy since extrem sports to nature walks or fishing ',
                'slug_url'       => str_slug('rancho california enjoy since extrem sports to nature walks or fishing '),
                'days'           => 1,
                'price_adults'   => '125',
                'price_children' => '62',
                'local'          => 'en',
                'type'           => 1, //activity
                'discount'       => 0, //porcentaje
                'city_id'        => 1
            ]);
            
            Product::create([
                'id'             => 21,
                'tittle'         => 'tour buenavista, pijao -  filandia, enjoy the most beautiful views, crafts and delicious coffee  concorde ',
                'description'    => 'tour buenavista, pijao -  filandia, enjoy the most beautiful views, crafts and delicious coffee  concorde .',
                'itinerary'      => 'tour buenavista, pijao -  filandia, enjoy the most beautiful views, crafts and delicious coffee  concorde ',
                'slug_url'       => str_slug('tour buenavista, pijao -  filandia, enjoy the most beautiful views, crafts and delicious coffee  concorde '),
                'days'           => 1,
                'price_adults'   => '125',
                'price_children' => '62',
                'local'          => 'en',
                'type'           => 1, //activity
                'discount'       => 0, //porcentaje
                'city_id'        => 1
            ]);
            
            Product::create([
                'id'             => 22,
                'tittle'         => 'botanical garden',
                'description'    => 'botanical garden.',
                'itinerary'      => 'botanical garden',
                'slug_url'       => str_slug('botanical garden'),
                'days'           => 1,
                'price_adults'   => '125',
                'price_children' => '62',
                'local'          => 'en',
                'type'           => 1, //activity
                'discount'       => 0, //porcentaje
                'city_id'        => 1
            ]);
            
            Product::create([
                'id'             => 23,
                'tittle'         => 'salento, valle del cocora  - crafts town ',
                'description'    => 'salento, valle del cocora  - crafts town .',
                'itinerary'      => 'salento, valle del cocora  - crafts town ',
                'slug_url'       => str_slug('salento, valle del cocora  - crafts town '),
                'days'           => 1,
                'price_adults'   => '125',
                'price_children' => '62',
                'local'          => 'en',
                'type'           => 1, //activity
                'discount'       => 0, //porcentaje
                'city_id'        => 1
            ]);
            
            
            Product::create([
                'id'             => 26,
                'tittle'         => ' spring water san vicente risaralda (lunch included)',
                'description'    => ' spring water san vicente risaralda (lunch included).',
                'itinerary'      => ' spring water san vicente risaralda (lunch included)',
                'slug_url'       => str_slug(' spring water san vicente risaralda (lunch included)'),
                'days'           => 1,
                'price_adults'   => '125',
                'price_children' => '62',
                'local'          => 'en',
                'type'           => 1, //activity
                'discount'       => 0, //porcentaje
                'city_id'        => 2
            ]);
            
            
            Product::create([
                'id'             => 28,
                'tittle'         => 'shopping, down town, dinner at solar restaurant',
                'description'    => 'shopping, down town, dinner at solar restaurant.',
                'itinerary'      => 'shopping, down town, dinner at solar restaurant',
                'slug_url'       => str_slug('shopping, down town, dinner at solar restaurant'),
                'days'           => 1,
                'price_adults'   => '125',
                'price_children' => '62',
                'local'          => 'en',
                'type'           => 1, //activity
                'discount'       => 0, //porcentaje
                'city_id'        => 2
            ]);
            
            
            Product::create([
                'id'             => 30,
                'tittle'         => 'balsaje across a river called "la vieja"  (lunch included)',
                'description'    => 'balsaje across a river called "la vieja"  (lunch included).',
                'itinerary'      => 'balsaje across a river called "la vieja"  (lunch included)',
                'slug_url'       => str_slug('balsaje across a river called "la vieja"  (lunch included)'),
                'days'           => 1,
                'price_adults'   => '125',
                'price_children' => '62',
                'local'          => 'en',
                'type'           => 1, //activity
                'discount'       => 0, //porcentaje
                'city_id'        => 2
            ]);
            
            Product::create([
                'id'             => 31,
                'tittle'         => 'nature walk calarca (picnic lunch  in platano or congo leaves)',
                'description'    => 'nature walk calarca (picnic lunch  in platano or congo leaves).',
                'itinerary'      => 'nature walk calarca (picnic lunch  in platano or congo leaves)',
                'slug_url'       => str_slug('nature walk calarca (picnic lunch  in platano or congo leaves)'),
                'days'           => 1,
                'price_adults'   => '125',
                'price_children' => '62',
                'local'          => 'en',
                'type'           => 1, //activity
                'discount'       => 0, //porcentaje
                'city_id'        => 4
            ]);
            
            Product::create([
                'id'             => 32,
                'tittle'         => 'paintball ',
                'description'    => 'paintball .',
                'itinerary'      => 'paintball ',
                'slug_url'       => str_slug('paintball '),
                'days'           => 1,
                'price_adults'   => '125',
                'price_children' => '62',
                'local'          => 'en',
                'type'           => 1, //activity
                'discount'       => 0, //porcentaje
                'city_id'        => 2
            ]);
            
            Product::create([
                'id'             => 33,
                'tittle'         => 'canopy ',
                'description'    => 'canopy .',
                'itinerary'      => 'canopy ',
                'slug_url'       => str_slug('canopy '),
                'days'           => 1,
                'price_adults'   => '125',
                'price_children' => '62',
                'local'          => 'en',
                'type'           => 1, //activity
                'discount'       => 0, //porcentaje
                'city_id'        => 2
            ]);
            
            Product::create([
                'id'             => 34,
                'tittle'         => 'camping monteroca',
                'description'    => 'camping monteroca.',
                'itinerary'      => 'camping monteroca',
                'slug_url'       => str_slug('camping monteroca'),
                'days'           => 1,
                'price_adults'   => '125',
                'price_children' => '62',
                'local'          => 'en',
                'type'           => 1, //activity
                'discount'       => 0, //porcentaje
                'city_id'        => 2
            ]);
            
            Product::create([
                'id'             => 35,
                'tittle'         => 'ecological park peñas blancas',
                'description'    => 'ecological park peñas blancas.',
                'itinerary'      => 'ecological park peñas blancas',
                'slug_url'       => str_slug('ecological park peñas blancas'),
                'days'           => 1,
                'price_adults'   => '125',
                'price_children' => '62',
                'local'          => 'en',
                'type'           => 1, //activity
                'discount'       => 0, //porcentaje
                'city_id'        => 2
            ]);
            
            Product::create([
                'id'             => 36,
                'tittle'         => 'calima lake',
                'description'    => 'calima lake.',
                'itinerary'      => 'calima lake',
                'slug_url'       => str_slug('calima lake'),
                'days'           => 1,
                'price_adults'   => '125',
                'price_children' => '62',
                'local'          => 'en',
                'type'           => 1, //activity
                'discount'       => 0, //porcentaje
                'city_id'        => 2
            ]);
            
            Product::create([
                'id'             => 37,
                'tittle'         => ' jeep panoramico',
                'description'    => ' jeep panoramico.',
                'itinerary'      => ' jeep panoramico',
                'slug_url'       => str_slug(' jeep panoramico'),
                'days'           => 1,
                'price_adults'   => '125',
                'price_children' => '62',
                'local'          => 'en',
                'type'           => 1, //activity
                'discount'       => 0, //porcentaje
                'city_id'        => 2
            ]);
            
            Product::create([
                'id'             => 38,
                'tittle'         => 'parque de la vida',
                'description'    => 'parque de la vida.',
                'itinerary'      => 'parque de la vida',
                'slug_url'       => str_slug('parque de la vida'),
                'days'           => 1,
                'price_adults'   => '125',
                'price_children' => '62',
                'local'          => 'en',
                'type'           => 1, //activity
                'discount'       => 0, //porcentaje
                'city_id'        => 3
            ]);
            
            Product::create([
                'id'             => 39,
                'tittle'         => 'party  (be clear it is just dancing and drinks, no drugs, we don´t know how to say that politely) ',
                'description'    => 'party  (be clear it is just dancing and drinks, no drugs, we don´t know how to say that politely) .',
                'itinerary'      => 'party  (be clear it is just dancing and drinks, no drugs, we don´t know how to say that politely) ',
                'slug_url'       => str_slug('party  (be clear it is just dancing and drinks, no drugs, we don´t know how to say that politely) '),
                'days'           => 1,
                'price_adults'   => '125',
                'price_children' => '62',
                'local'          => 'en',
                'type'           => 1, //activity
                'discount'       => 0, //porcentaje
                'city_id'        => 3
            ]);
            
            Product::create([
                'id'             => 40,
                'tittle'         => 'barcelona  (try forcha, kumis, sirope, pandebonos and traditional food) ',
                'description'    => 'barcelona  (try forcha, kumis, sirope, pandebonos and traditional food) .',
                'itinerary'      => 'barcelona  (try forcha, kumis, sirope, pandebonos and traditional food) ',
                'slug_url'       => str_slug('barcelona  (try forcha, kumis, sirope, pandebonos and traditional food) '),
                'days'           => 1,
                'price_adults'   => '125',
                'price_children' => '62',
                'local'          => 'en',
                'type'           => 1, //activity
                'discount'       => 0, //porcentaje
                'city_id'        => 3
            ]);
            Product::create([
                'id'             => 41,
                'tittle'         => 'shopping at mercar  (fruits ang vegetables),  ',
                'description'    => 'shopping at mercar  (fruits ang vegetables),  .',
                'itinerary'      => 'shopping at mercar  (fruits ang vegetables),  ',
                'slug_url'       => str_slug('shopping at mercar  (fruits ang vegetables),  '),
                'days'           => 1,
                'price_adults'   => '125',
                'price_children' => '62',
                'local'          => 'en',
                'type'           => 1, //activity
                'discount'       => 0, //porcentaje
                'city_id'        => 3
            ]);
            Product::create([
                'id'             => 42,
                'tittle'         => 'shopping malls',
                'description'    => 'shopping malls.',
                'itinerary'      => 'shopping malls',
                'slug_url'       => str_slug('shopping malls'),
                'days'           => 1,
                'price_adults'   => '125',
                'price_children' => '62',
                'local'          => 'en',
                'type'           => 1, //activity
                'discount'       => 0, //porcentaje
                'city_id'        => 3
            ]);
            
            Product::create([
                'id'             => 44,
                'tittle'         => 'genova',
                'description'    => 'genova.',
                'itinerary'      => 'genova',
                'slug_url'       => str_slug('genova'),
                'days'           => 1,
                'price_adults'   => '125',
                'price_children' => '62',
                'local'          => 'en',
                'type'           => 1, //activity
                'discount'       => 0, //porcentaje
                'city_id'        => 3
            ]);
            
            */
            
            
        }
    }
