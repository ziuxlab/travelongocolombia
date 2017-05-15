<?php

use Illuminate\Database\Seeder;
use App\Product;

class Kindrooms_hotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Product::find(25)->kindsHotel()->attach([1=>['price'=>79],2=>['price'=>43],3=>['price'=>34]]); //la floresta
        Product::find(26)->kindsHotel()->attach([1=>['price'=>79],2=>['price'=>43],3=>['price'=>34]]); //la floresta
        Product::find(27)->kindsHotel()->attach([1=>['price'=>86],2=>['price'=>53],3=>['price'=>42]]); //Isa Victory Hotel Boutique
        Product::find(28)->kindsHotel()->attach([1=>['price'=>86],2=>['price'=>53],3=>['price'=>42]]); //Isa Victory Hotel Boutique
        Product::find(29)->kindsHotel()->attach([1=>['price'=>92],2=>['price'=>57],3=>['price'=>57]]); //Armenia Hotel
        Product::find(67)->kindsHotel()->attach([1=>['price'=>92],2=>['price'=>57],3=>['price'=>57]]); //Armenia Hotel
        Product::find(68)->kindsHotel()->attach([1=>['price'=>76],2=>['price'=>51],3=>['price'=>41]]); //Hotel Palma Verde
        Product::find(69)->kindsHotel()->attach([1=>['price'=>76],2=>['price'=>51],3=>['price'=>41]]); //Hotel Palma Verde

    }
}
