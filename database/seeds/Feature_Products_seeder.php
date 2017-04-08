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
        
        Product::find(19)->features()->attach(8);                       //tour armenia
        Product::find(1)->features()->attach([6,7,8,9,10,11,12,13,14]); //parque del cafe english
        Product::find(20)->features()->attach([7,11,13,15,16]);         //rancho california
        Product::find(21)->features()->attach(8);                       //tour buena vista
        Product::find(22)->features()->attach([7,8,9,15]);              //botanical
        Product::find(23)->features()->attach([7,8,11,15,16]);          //salento
        Product::find(3)->features()->attach([7,8,10,14,15]);           //recuca
        Product::find(24)->features()->attach([8,9]);                   //museo quimbay
        Product::find(25)->features()->attach([7,13]);                  //waterfall in cordoba
        Product::find(2)->features()->attach([7,8,10,13,15,17]);        //panaca
        Product::find(26)->features()->attach([7,13,18,19]);            //san vicente
        Product::find(27)->features()->attach([7,13]);                  //santa isable
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
        Product::find(43)->features()->attach([8]);                     //Down Town
        Product::find(44)->features()->attach([7]);                     //genova
        Product::find(45)->features()->attach([7]);                     //natural park barbas
        
        // Paquetes =========================================.
        
        Product::find(4)->features()->attach([1,2,3]);
    
    }
}
