<?php
    
    use App\Product;
    use Illuminate\Database\Seeder;

class Feature_Products_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Actividades =========================================.
    
        Product::find(1)->features()->attach([6,7,8,9,10,11,12,13,14]); //parque del cafe english
        Product::find(2)->features()->attach([6,7,8,9,10,11,12,13,14]); //parque del cafe eespañol
        Product::find(3)->features()->attach([7,8,10,13,15,17]);        //panaca
        Product::find(4)->features()->attach([7,8,10,13,15,17]);        //panaca
        Product::find(5)->features()->attach([7,8,10,14,15]);           //recuca
        Product::find(6)->features()->attach([7,8,10,14,15]);           //recuca
        Product::find(7)->features()->attach([7,13]);                   //waterfall in cordoba
        Product::find(8)->features()->attach([7,13]);                   //waterfall in cordoba
        Product::find(9)->features()->attach([7,13]);                   //santa isable
        Product::find(10)->features()->attach([7,13]);                  //santa isable
        Product::find(11)->features()->attach([8,9]);                   //museo quimbay
        Product::find(12)->features()->attach([8,9]);                   //museo quimbay
        Product::find(13)->features()->attach([7]);                     //natural park barbas
        Product::find(14)->features()->attach([7]);                     //natural park barbas
        Product::find(15)->features()->attach([7]);                     //tierra prometida
        Product::find(16)->features()->attach([7]);                     //land promise
        Product::find(17)->features()->attach([8]);                     //Down Town
        Product::find(18)->features()->attach([8]);                     //Down Town
        
        
        /*
        Product::find(19)->features()->attach(8);                       //tour armenia
        Product::find(20)->features()->attach([7,11,13,15,16]);         //rancho california
        Product::find(21)->features()->attach(8);                       //tour buena vista
        Product::find(22)->features()->attach([7,8,9,15]);              //botanical
        Product::find(23)->features()->attach([7,8,11,15,16]);          //salento
        Product::find(26)->features()->attach([7,13,18,19]);            //san vicente
        Product::find(28)->features()->attach([8]);                     //shoping down town
        Product::find(29)->features()->attach([7,13]);                  //lagoon otun
        Product::find(30)->features()->attach([7]);                     //balsaje
        Product::find(31)->features()->attach([7]);                     //calarca
        Product::find(32)->features()->attach([13]);                    //paint ball
        Product::find(33)->features()->attach([13]);                    //canopy
        Product::find(34)->features()->attach([7,8,9,11,13]);           //camping monterroca
        Product::find(35)->features()->attach([7,13,19]);               //peñas blancas
        Product::find(36)->features()->attach([7,11,13,20]);            //calima
        Product::find(37)->features()->attach([7]);                     //jeep
        Product::find(38)->features()->attach([7]);                     //parque de la vida
        Product::find(39)->features()->attach([20]);                    //party
        Product::find(40)->features()->attach([7,8]);                   //Barcelona
        Product::find(41)->features()->attach([8]);                     //shopping in mercar
        Product::find(42)->features()->attach([8]);                     //shopping malls
        Product::find(44)->features()->attach([7]);                     //genova
        */
    
        //==========  Paquetes ==============//
        
        Product::find(19)->features()->attach([1,2,3]);
        Product::find(20)->features()->attach([1,2,3]);
        Product::find(21)->features()->attach([1,2,3]);
        Product::find(22)->features()->attach([1,2,3]);
        Product::find(23)->features()->attach([1,2,3]);
        Product::find(24)->features()->attach([1,2,3]);
        
    
        //==========  Hoteles ==============//
    
        Product::find(25)->features()->attach([21,22,23,24,25,26,27,28,29,30,31,33]);
        Product::find(26)->features()->attach([21,22,23,24,25,26,27,28,29,30,31,34]);
        Product::find(27)->features()->attach([21,22,23,24,25,26,27,28,29,30,32,33]);
        Product::find(28)->features()->attach([21,22,23,24,25,26,27,28,29,30,32,34]);
        Product::find(29)->features()->attach([21,22,23,24,25,26,27,28,29,30,31,35]);
    
    }
}
