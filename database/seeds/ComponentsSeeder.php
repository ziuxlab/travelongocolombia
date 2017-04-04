<?php
    
    use App\Components;
    
    use Illuminate\Database\Seeder;
    
    class ComponentsSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            //
            
            Components::create([
                'name'            => 'Banner Home',
                'body'            => '<div class="bg-image text-center" style="background-image:url(\'' .
                                     '//travelongocolombia.com/img/banner/banner4.jpg\')"><div class="bg-black-op content content-full overflow-hidden"><div><div class="col-sm-12"><div class="animated fadeInDown font-w700 push-150-t push-20 text-white"><h1>&quot;ONE STOP PLANNING FOR VACATION TO COLOMBIA &quot;</h1></div><div class="animated fadeIn text-white-op"><h4>Discover a rich Latin Culture with English language guidance throughout your stay.<br />Quick, simple, unforgettable.</h4></div><div class="flex-center push-20 push-50-t text-center"><a class="col-sm-3 col-lg-2 btn btn-primary push-20-r btn-minw150  text-white animated fadeInLeft" href="#">Pick a Plan </a> <a class="col-sm-3 col-lg-2 btn  btn-primary btn-minw150  animated fadeInRight" href="#"> Design your Plan </a></div></div></div></div></div>',
                'page_id'         => 1,
                'order_component' => 1,
                'local'           => 'en',
            ]);
            
            Components::create([
                'name'            => 'why book with us',
                'body'            => '<div class="bg-white"><div class="content-boxed content-mini content-mini-full overflow-hidden"><div class="row"><div class="col-lg-8 col-lg-offset-2 col-sm-12 push-20"><div class="col-sm-4 col-xs-6"><div class="content text-center"><img class="img-responsive img-rounded" src="//travelongocolombia.com/img/banner/arma-tu-plan.jpg" /></div><div class="push-10-t text-center"><div class="push-10-t remove-margin text-primary"><h4>Arma tu plan</h4></div><h6>Arma tu plan con todo incluido, vuelos, hoteles y actividades para disfrutar en familia.</h6></div></div><div class="col-sm-4 col-xs-6"><div class="content text-center"><img class="img-responsive img-rounded" src="//travelongocolombia.com/img/banner/traductor.jpg" /></div><div class="push-10-t text-center"><div class="push-10-t remove-margin text-primary"><h4>Traductor</h4></div><h6>Arma tu plan con todo incluido, vuelos, hoteles y actividades para disfrutar en familia.</h6></div></div><div class="col-sm-4 col-xs-12"><div class="content text-center"><img class="img-responsive img-rounded" src="//travelongocolombia.com/img/banner/guide.jpg" /></div><div class="push-10-t text-center"><div class="push-10-t remove-margin text-primary"><h4>Gu&iacute;a Tur&iacute;stica</h4></div><h6>Arma tu plan con todo incluido, vuelos, hoteles y actividades para disfrutar en familia.</h6></div></div></div></div></div></div>',
                'page_id'         => 1,
                'order_component' => 2,
                'local'           => 'en',
            ]);
            
            Components::create([
                'name'            => 'why colombia',
                'body'            => '<div class="border-black-op content-boxed flex"><div class="col-sm-6 content content-full text-center"><div class="block block-transparent"><div class="block-content"><h3>&iquest;Why Colombia?</h3></div><div class="block-content"><img class="img-responsive push-30-t" src="//travelongocolombia.com/img/banner/banner2.jpg" /></div><div class="block-content push-20-t text-justify"><p>Strategically located on the northern coast of the South American continent, Colombia is the perfect quick getaway from the US (3.5 hours from Ft Lauderdale) - a paradise of perfectly consistent year-round semi-tropical climate; virtually no seasons but with plenty of biodiversity and geographic contrasts nearly impossible to find elsewhere.<br /><br />The benevolence of the Colombian people and their joy and passion for life are qualities inherent to them - creative, positive, cheerful and immensely proud of their country and its rich history and culture, delicious food (the native trout is to die for), and scenic beauty. Colombians will captivate your heart by showing you what a friend looks like for perhaps the first time.<br /><br />According to the World Tourism Organization, international tourism in Colombia increased 7% in 2012, 4% in 2013, 13% in 2014 and, 16% in 2015 all year over year. The colombian President Juan Manuel Santos announced the past March that the tourism in Colombia rose 12,6% in 2016&hellip;a clear indication that the world is awakening to this rapidly modernizing, exotic destination. In 2015, 61% of international tourists to Colombia flew in from North/Central/South America, 13% from Europe and 26% from the rest of the world.<br /><br />Lastly, for those travelers with lingering safety concerns, the Nobel Peace Prize was awarded to the current Colombian President Juan Manuel Santos in 2016, in recognition of the enormously successful efforts by Colombia to secure peace and disarm the few remaining Las FARC jungle rebels in the north, and at the same time to disinhibit even more world travelers to the country so they can enjoy and learn from this rich culture. Las FARC has not been active anywhere in Quind&iacute;o in a decade.</p><div class="text-center"><a class="btn btn-minw btn-primary" href="//travelongocolombia.com/international-opinions">See More</a></div></div></div></div><div class="bg-secondary col-sm-6 remove-padding text-center"><div class="content"><div class="block block-transparent"><div class="block-content font-w600 text-white"><h3>&iquest;Why Quindio?</h3></div><div class="block-content"><img class="img-responsive push-30-t" src="//travelongocolombia.com/img/banner/banner1.png" /></div><div class="block-content block-content-full push-20-t text-justify text-white"><p>Lying in the &ldquo;Cordillera Central&rdquo;, the central highlands of Colombia, is the Quind&iacute;o department, one of the smallest &ldquo;departments&rdquo; (known as counties in the US) in Colombia, which in contrast to its small size has a nearly endless number of natural resources and attractions that motivate the thousands of Colombians and world travelers to visit each year. The region has a host of features that promise to make your vacation unforgettable, such as short distances on good roads between major points of interest, convenient travel alternatives to reach these destinations and uniqueness of each place despite their relative proximity.<br /><br />High mountains, mammoth coffee farms, the finest coffee tasting in the world, banana/pl&aacute;tano/papaya plantations, theme parks, adventure sports, ubiquitous natural springs/rivers/streams, camping, hiking to snow covered volcanoes and lush valleys of infinite greenery are just some of the attractions that Quind&iacute;o has to offer for residents and travelers alike. With such natural and cultural resources and a consolidated tourism infrastructure it is no miracle that Quind&iacute;o Colombia is a totally gratifying experience, one that your heart will want to repeat over and over again.</p></div><div class="block block-rounded"><div class="bg-primary block-content font-w600 text-white"><h3>&iquest;Why Coffee Area?</h3><div class="push-20-t text-justify"><p>&ldquo;An exceptional example of a sustainable and productive cultural landscape that is unique and representative of a tradition that is a strong symbol for coffee growing areas worldwide&hellip;&rdquo; This quotation was extracted from the official recognition given to the Coffee Cultural Landscape of Colombia in 2011 by UNESCO. This Colombian territory was subsequently included in its prestigious &ldquo;World Heritage List&rdquo;, yet more reason that you should not hesitate to vacation here with Travelongo Colombia and enjoy of one of outstanding destinations in the world.</p></div></div></div></div></div></div></div>',
                'page_id'         => 1,
                'order_component' => 3,
                'local'           => 'en',
            ]);
            
            Components::create([
                'name'            => 'Por qué Colombia',
                'body'            => '<div class="border-black-op content-boxed flex"><div class="col-sm-6 content content-full text-center"><div class="block block-transparent"><div class="block-content"><h3>&iquest;Por Qu&eacute; Colombia?</h3></div><div class="block-content"><img class="img-responsive push-30-t" src="//travelongocolombia.com/img/banner/banner2.jpg" /></div><div class="block-content push-20-t text-justify"><p>Estrat&eacute;gicamente ubicada en la costa norte de Sur Am&eacute;rica, Colombia es una perfecta y r&aacute;pida escapada desde los Estados Unidos (3.5 horas desde Ft Lauderdale) &ndash;no tiene estaciones y es rica en biodiversidad y contrastes geogr&aacute;ficos casi imposibles de encontrar en otros lugares.<br /><br />La benevolencia de los colombianos y su alegr&iacute;a y pasi&oacute;n por la vida son cualidades inherentes a ellos &ndash; creativos, positivos, alegres e inmensamente orgullosos de su pa&iacute;s y su riqueza hist&oacute;rica y cultural, deliciosa comida (la trucha nativa es maravillosa) y belleza esc&eacute;nica. Los colombianos cautivar&aacute;n su coraz&oacute;n demostr&aacute;ndole lo que es un amigo desde el primer instante.<br /><br />De acuerdo con la Organizaci&oacute;n Mundial del Turismo, el turismo internacional en Colombia increment&oacute; 7% en 2012, 4% en 2013, 13% en 2014 y 16% en 2015, cada a&ntilde;o respecto al a&ntilde;o anterior. El Presidente Juan Manuel Santos anunci&oacute; el pasado marzo que el turismo en Colombia ascendi&oacute; un 12,6% en 2016&hellip; Un claro indicador de que el mundo est&aacute; concientiz&aacute;ndose, r&aacute;pidamente, de &eacute;ste destino ex&oacute;tico. En 2015, el 61% de los turistas internacionales en Colombia volaron desde las Am&eacute;ricas, 13% desde Europa y 26% del resto del mundo.<br /><br />Por &uacute;ltimo para aquellos viajeros con constantes preocupaciones sobre seguridad, en 2016 el premio Nobel de la paz fue otorgado al Presidente colombiano Juan Manuel Santos, en reconocimiento a los enormes y exitosos esfuerzos para asegurar la paz y el desarme de los grupos rebeldes de Las Farc y al mismo tiempo desinhibir a m&aacute;s viajeros internacionales para visitar el pa&iacute;s; es as&iacute; como m&aacute;s turistas podr&aacute;n disfrutar y aprender de esta rica cultura. Las FARC no han estado activas en el Quind&iacute;o en una d&eacute;cada.</p></div></div></div><div class="bg-secondary col-sm-6 remove-padding text-center"><div class="content"><div class="block block-transparent"><div class="block-content font-w600 text-white"><h3>&iquest;Por Qu&eacute; Quindio?</h3></div><div class="block-content"><img class="img-responsive push-30-t" src="//travelongocolombia.com/img/banner/banner1.png" /></div><div class="block-content block-content-full push-20-t text-justify text-white"><p>Yaciendo en la Cordillera Central de Colombia es el departamento del Quind&iacute;o uno de los m&aacute;s peque&ntilde;os en Colombia, el cual en contraste a su tama&ntilde;o, tiene innumerables atractivos y recursos naturales que motivan a miles de colombianos y viajeros internacionales a visitarlo cada a&ntilde;o. El departamento tiene una serie de caracter&iacute;sticas que prometen hacer sus vacaciones inolvidables, con distancias cortas y buenas carreteras entre los puntos de inter&eacute;s, convenientes alternativas de viaje para lograr estos destinos y la singularidad de cada lugar a pesar de su relativa proximidad.<br /><br />Monta&ntilde;as altas, un clima semi-tropical perfectamente consistente a lo largo del a&ntilde;o, fincas cafeteras enormes, la mejor taza de caf&eacute; del mundo, cultivos de banano, pl&aacute;tano, papaya; parques tem&aacute;ticos, deportes de aventura, manantiales naturales omnipresentes r&iacute;os/arroyos; campamentos, excursiones a volcanes cubiertos de nieve y exuberantes valles de vegetaci&oacute;n infinita son solo algunos de los atractivos que el Quind&iacute;o tiene para ofrecer tanto a residentes y turistas extranjeros. Con tales recursos naturales y culturales y una consolidada infraestructura tur&iacute;stica, no es un milagro que el Quind&iacute;o Colombia es totalmente una gratificante experiencia, la que tu coraz&oacute;n querr&aacute; repetir una y otra vez.</p></div><div class="block block-rounded"><div class="bg-primary block-content font-w600 text-white"><h3>&iquest;Por Qu&eacute; el Eje Cafetero?</h3><div class="push-20-t text-justify"><p>&ldquo;Un ejemplo excepcional de un paisaje cultural productivo y sostenible el cual es &uacute;nico y representativo de una tradici&oacute;n que es un fuerte s&iacute;mbolo de &aacute;reas de cultivo de caf&eacute; alrededor del mundo&hellip;&rdquo; La declaraci&oacute;n anterior hace parte del reconocimiento oficial dado al Paisaje Cultural Cafetero de Colombia en 2011 por La UNESCO. &Eacute;ste territorio colombiano fue consecuentemente incluido en su prestigiosa &ldquo;Lista de Patrimonio Cultural&rdquo;; por &eacute;sta y otras miles de razones no deber&iacute;a dudar para elegir a Colombia como su pr&oacute;ximo destino vacacional y vivir esta maravillosa experiencia por s&iacute; mismo.</p></div></div></div></div></div></div></div>',
                'page_id'         => 2,
                'order_component' => 3,
                'local'           => 'es',
            ]);
            
            Components::create([
                'name'            => 'Banner Inicio',
                'body'            => '<div class="bg-image text-center" style="background-image:url(\'' .
                                     '//travelongocolombia.com/img/banner/banner4.jpg\')"><div class="bg-black-op content content-full overflow-hidden"><div><div class="col-sm-12"><div class="animated fadeInDown font-w700 push-150-t push-20 text-white"><h1>&quot;PLANEAMOS TUS VACACIONES A COLOMBIA TODO INCLU&Iacute;DO &quot;</h1></div><div class="animated fadeIn text-white-op"><h4>Descubre una cultura latina con informador tur&iacute;stico bilingue (espa&ntilde;ol &ndash; ingl&eacute;s) en toda tu estad&iacute;a .<br />R&aacute;pido, simple, inolvidable.</h4></div><div class="flex-center push-20 push-50-t text-center"><a class="col-sm-3 col-lg-2 btn btn-primary push-20-r btn-minw150  text-white animated fadeInLeft" href="#">Escoger un Plan </a> <a class="col-sm-3 col-lg-2 btn  btn-primary btn-minw150  animated fadeInRight" href="#"> Dise&ntilde;a tu Plan </a></div></div></div></div></div>',
                'page_id'         => 2,
                'order_component' => 1,
                'local'           => 'es',
            ]);
            
            Components::create([
                'name'            => 'Por qué viajar con nosotros',
                'body'            => '<div class="bg-white"><div class="content-boxed content-mini content-mini-full overflow-hidden"><div class="row"><div class="col-lg-8 col-lg-offset-2 col-sm-12 push-20"><div class="col-sm-4 col-xs-6"><div class="content text-center"><img class="img-responsive img-rounded" src="//travelongocolombia.com/img/banner/arma-tu-plan.jpg" /></div><div class="push-10-t text-center"><div class="push-10-t remove-margin text-primary"><h4>Arma tu plan</h4></div><h6>Arma tu plan con todo incluido, vuelos, hoteles y actividades para disfrutar en familia.</h6></div></div><div class="col-sm-4 col-xs-6"><div class="content text-center"><img class="img-responsive img-rounded" src="//travelongocolombia.com/img/banner/traductor.jpg" /></div><div class="push-10-t text-center"><div class="push-10-t remove-margin text-primary"><h4>Traductor</h4></div><h6>Arma tu plan con todo incluido, vuelos, hoteles y actividades para disfrutar en familia.</h6></div></div><div class="col-sm-4 col-xs-12"><div class="content text-center"><img class="img-responsive img-rounded" src="//travelongocolombia.com/img/banner/guide.jpg" /></div><div class="push-10-t text-center"><div class="push-10-t remove-margin text-primary"><h4>Gu&iacute;a Tur&iacute;stica</h4></div><h6>Arma tu plan con todo incluido, vuelos, hoteles y actividades para disfrutar en familia.</h6></div></div></div></div></div></div>',
                'page_id'         => 2,
                'order_component' => 2,
                'local'           => 'es',
            ]);
            
            Components::create([
                'name'            => 'introduction to why colombia',
                'body'            => '<div class="content-boxed content"><div class="col-sm-12 text-center"><h4 class="h5">In this section you will read parts of some articles, from different international newspapers and magazines, about Colombia and its Coffee Area to know more of this amazing and unforgettable destination.</h4></div></div>',
                'page_id'         => 11,
                'order_component' => 0,
                'local'           => 'en',
            ]);
            
            Components::create([
                'name'            => 'Goodbye Pariah State, Hello Garden Of Eden',
                'body'            => '<div class="content-boxed content"><div class="col-sm-12"><div class="block block-themed"><div class="block-header bg-primary-darkest"><h3 class="block-title">Goodbye Pariah State, Hello Garden Of Eden: How Colombia Became Not Just Safe To Visit, But A South American Must-See</h3></div><div class="block-content"><p>&quot;By MailOnline 28 August 2014 | UPDATED: 16:00 GMT, 2 September 2014&quot;</p><p>With 1,880 bird species and a rich biodiversity it&#39;s bliss for wildlife lovers Enjoy abundant natural beauty and arguably the best coffee in the world No longer famed for drugs and violence, awe-inspiring Colombia is calling</p><p>To talk of a safer Colombia for tourists is a tiresome clich&eacute;. Backpackers have plodded through its lush jungles, hit its sweet Caribbean beaches and partied in Bogota for over a decade.What is apparent now is that Colombians, too, have fallen for their country. Head&not; over heels. Like teenagers in the first throes of passion, discovering every beautiful quirk and stomach flip - after years of being locked into an era where the very idea of tourism in their country was anathema. Colombia has more bird species than any other country, including the striking Emerald Toucanet</p><p>There are over 3000 orchid species in Colombia, including its national flower (right), the Cattleya trianae Birding continues to be big news here. This is no surprise. There are more bird species in Colombia than anywhere else in the world &ndash; 1,880 and counting (including 87 endemics). Even to the avian-ignorant, to see a bright Green-Crested Quetzal swoop through the cloud forest with purpose and freedom is quite transcendental. The end to Colombia&rsquo;s troubles could be the unclipping of her wings &ndash; and if you&rsquo;re up for adventure, she is ready to soar.</p><p>Read more: <a href="http://www.dailymail.co.uk/travel/article-2729006/Goodbye-pariah-state-hello-Garden-Eden-How-Colombia-not-just-safe-visit-undoubted-South-American-see.html">http://www.dailymail.co.uk/travel/article-2729006/Goodbye-pariah-state-hello-Garden-Eden-How-Colombia-not-just-safe-visit-undoubted-South-American-see.html</a></p></div></div></div></div>',
                'page_id'         => 11,
                'order_component' => 1,
                'local'           => 'en',
            ]);
            
            Components::create([
                'name'            => 'Get A Global Caffeine Fix With These Coffee-Inspired Tours',
                'body'            => '<div class="content-boxed content"><div class="col-sm-12"><div class="block block-themed"><div class="block-header bg-primary-darkest"><h3 class="block-title">Get A Global Caffeine Fix With These Coffee-Inspired Tours</h3></div><div class="block-content"><p>&quot;By Frommers&quot;</p><p>The Quind&iacute;o region of Colombia -- the Zona Cafetera - is the heartland of the country&#39;s coffee growing industry &hellip;which lists a number of fincas, traditional country houses/farms that are located on working coffee plantations. Some are quite basic, while others feature swimming pools and antique furniture. Prices are quite low, starting at less than $20 per person per night and will often include breakfast, unlimited fresh coffee and a tour of the coffee plantation. The region is also home to a coffee theme park - Parque Nacional del Caf&eacute; which features a coffee process museum, coffee-based food stands and a plaza highlighting traditional Colombian architecture.</p><p><strong>Read more:</strong> <a href="http://www.frommers.com/trip-ideas/cultural-immersion/get-a-global-caffeine-fix-with-these-coffee-inspired-tours">http://www.frommers.com/trip-ideas/cultural-immersion/get-a-global-caffeine-fix-with-these-coffee-inspired-tours</a></p></div></div></div></div>',
                'page_id'         => 11,
                'order_component' => 2,
                'local'           => 'en',
            ]);
            
            Components::create([
                'name'            => 'Cafe Culture',
                'body'            => '<div class="content-boxed content"><div class="col-sm-12"><div class="block block-themed"><div class="block-header bg-primary-darkest"><h3 class="block-title">Cafe Culture</h3></div><div class="block-content"><p>&quot;By The Guardian 03 October 2006&quot;</p><p>Colombia&#39;s coffee growers have woken up to smell a new crop: tourists. Ed Ewing gets a taste of plantation life by checking into a finca.</p><p>Coffee tourism in Colombia Salento, a small town in the foothills of the Cordillera Central. This is coffee country, the centre of Colombia&#39;s tropical Zona Cafetera. It is here, between the magical altitudes of 800m and 1800m, that much of the country&#39;s annual 66m tonnes of coffee - about 10% of the world&#39;s supply - is grown.</p><p>And it is here that coffee growers, including Don Elias, first realised the potential of their farms to develop another kind of crop: tourists. Coffee finca tourism, opening up coffee farms to visitors, has been around since the early 1990s. Back then the value of coffee plummeted, and so coffee growers turned to tourists to supplement their income. Much like the Italian idea of &quot;agriturismo&quot;, travellers pay to stay on or visit the farms to experience rural life and get an idea of how food, or in this case coffee, is actually produced.</p><p>Since those early beginnings, the idea has grown to encompass three coffee-growing regions in the west of the country, Quind&iacute;o, Caldas and Risaralda. There are 700 fincas listed in the Quind&iacute;o tourist authority&#39;s annual brochure, Haciendas del Caf&eacute;, and down in the valley there is even a coffee theme park. Disney-style rides with a coffee twist - a tren del caf&eacute; (coffee train) and the cabaret-style Show del Caf&eacute; to name just two.</p><p>Most of the visitors are Colombians, escaping from the big cities of Cali, Medell&iacute;n and Bogota for a weekend. International tourism in Colombia is still mainly restricted to cruise passengers visiting Cartagena and backpackers, who can&#39;t resist the &quot;Colombia&#39;s amazing!&quot; travellers&#39; tales.</p><p>Don Gustavo takes us on a tour of his farm. First the fertiliser shed, housing the product of his 300 pigs kept elsewhere on the finca. Then he introduces us to two types of coffee, arabica and Colombian, with red or green berries. He pulls one off. &quot;Bite,&quot; he says, &quot;dulce.&quot; Sweet. It is too. Inside the fruit, for that is what it is, are two small seeds, the coffee beans. They are cream-coloured and wet.</p><p>In the harvest season, March to June and October to December, workers are paid by the gallon. They&#39;ll pick three gallons a day, about 10kg, and get 20,000 pesos (just over &pound;4) a gallon for their trouble.</p><p>The fruit is then washed, sorted by hand, soaked for 12 hours and the pulp removed by a machine that looks like a car-sized printing press to leave just the beans. After that the beans, white and shiny, are left in the sun or a greenhouse for five days to dry. Then, dried and flaking with a silver husk, they are shaken clean, packed in 60kg bags, and sent for roasting.</p><p>So you want to stay on a coffee finca? It helps to speak, or understand, at least some Spanish. There are no non-local agencies offering coffee finca tours. As Colombia is only now opening up to international tourists, most travel is independent and organised after you have already arrived in the country.</p><p>Safety and security Is Colombia safe? The Foreign Office advises against travel to certain regions in the north, notably the Cidade Perdida (Lost City), and the west. But Quind&iacute;o, Salento and the surrounding countryside are considered generally safe. Tourism is on the up in the area, and the Farc, Colombia&#39;s most notorious Marxist rebel group, were moved out of the region two years ago. Local information on the current situation is typically sound and will be given freely and honestly from your host or local travel agency.</p><p><strong>Read more:</strong> <a href="https://www.theguardian.com/travel/2006/oct/03/colombia.travelfoodanddrink.foodanddrink">https://www.theguardian.com/travel/2006/oct/03/colombia.travelfoodanddrink.foodanddrink</a></p></div></div></div></div>',
                'page_id'         => 11,
                'order_component' => 3,
                'local'           => 'en',
            ]);
            
            Components::create([
                'name'            => 'A Journey To Colombia’s Coffee Belt',
                'body'            => '<div class="content-boxed content"><div class="col-sm-12"><div class="block block-themed"><div class="block-header bg-primary-darkest"><h3 class="block-title">A Journey To Colombia&rsquo;s Coffee Belt</h3></div><div class="block-content"><p>&quot;By New York times 07 March 2017&quot;</p><p>In the northern reaches of the Andes &mdash; where the coffee bean is ascentral to life as corn is to small town Iowa &mdash; a welcoming spirit prevails.</p><p>Coffee is at the heart of Jard&iacute;n, as corn is to small town Iowa: the local economy that forms a cultural identity. When my tinto &mdash; straight black &mdash; arrived, it was easy to see why: The flavor, strong and bold, flowed directly from the beans, not a burned layer from roasting. I took another sip from my teacup-size demitasse and noticed that of all the people drinking coffee around me, a travel mug or paper cup was nowhere to be found. No one was taking their coffee to-go. Everyone was sitting, sipping, enjoying.</p><p>In the 1990s, a collapse in commodity coffee prices hit Colombia hard. Half of its coffee market value vanished, and thousands of families in coffee-growing regions were pushed into poverty. As a strategy for the future, the Colombian government began encouraging and supporting farms to grow higher quality beans that qualify for specialty coffee markets, where prices are higher and more stable.</p><p>&hellip;When we had arrived in daylight, the foliage was so thick I couldn&rsquo;t see beyond the trees. But now I realized those stars were the porch lights of fincas on the next mountain ridge, each light a home like this one.</p><p>It was a reminder that coffee here is a family affair. And if you slow down, sip, really savor, you can taste earnest endeavors and lifetimes of devotion.</p><p><strong>Read more:</strong> <a href="https://www.nytimes.com/2017/03/07/travel/colombia-coffee-country-andes-mountains.html">https://www.nytimes.com/2017/03/07/travel/colombia-coffee-country-andes-mountains.html</a></p></div></div></div></div>',
                'page_id'         => 11,
                'order_component' => 4,
                'local'           => 'en',
            ]);
            
            Components::create([
                'name'            => 'The Coffee Trail',
                'body'            => '<div class="content-boxed content"><div class="col-sm-12"><div class="block block-themed"><div class="block-header bg-primary-darkest"><h3 class="block-title">The Coffee Trail</h3></div><div class="block-content"><p>&quot;By New York Times 12 February, 2006&quot;</p><p>&hellip; this coffee-growing region tucked into the mountains of central Colombia has rarely known violence. Now, local businessmen and hacienda owners -- who for the last decade have made the region a vibrant tourism destination for Colombia&#39;s middle class -- are trying to lure visitors from abroad by touting the beauty of its rolling hills, venerable coffee farms and row after row of shimmering coffee bushes.</p><p>&hellip;In many areas of the country, a three-year government offensive has pushed rebel groups back. There are now a few safe pockets beginning to attract foreigners.</p><p>Among them is the Eje Cafetero (the &quot;coffee crossroads&quot;), made up of three diminutive states -- Quind&iacute;o, Risaralda and Caldas -- about 100 miles west of Bogot&aacute;, recognized as the source for some of the world&#39;s best coffee. In the smallest and most charming, Quind&iacute;o, beat-up World War II-era Willy Jeeps carry loads of bananas and heavy sacks of coffee to market on meandering country roads. The state&#39;s 11 towns are simultaneously charming and a little worn on the edges.</p><p>On a slow drive across Quind&iacute;o, the spectacular panorama bursts into view at unexpected turns. Plump hillsides teem with banana trees or coffee plants, many of them decades old. Slender gullies feature the cartoonish guaduales, giant bursts of bamboo topped by delicate foliage.</p><p>&quot;There are 12 tones of green, wherever you look,&quot; Maria del Roc&iacute;o Baena, the owner of one farm, tells me.</p><p>For visitors from frenzied cities like Medell&iacute;n or Cali, coffee country is an oasis of sorts, a journey back to a more tranquil and traditional Colombia, where most people lived on farms and coffee was king.</p><p>The day I arrived at this 120-year-old restored plantation, the porticos and rooms were teeming with mountain bikers. In the kitchen, I found two young foreigners, David Botzer, 29, an Israeli computer programmer, and Peter Meek, 24, a mechanical engineer from New Zealand. Colombia had been an afterthought for them, mysterious and risky. But both said they found the spectacularly rugged coffee country to be safe and the people courteous.</p><p><strong>Read more:</strong> <a href="http://www.nytimes.com/2006/02/12/travel/the-coffee-trail.html">http://www.nytimes.com/2006/02/12/travel/the-coffee-trail.html</a></p></div></div></div></div>',
                'page_id'         => 11,
                'order_component' => 5,
                'local'           => 'en',
            ]);
            
        }
    }
