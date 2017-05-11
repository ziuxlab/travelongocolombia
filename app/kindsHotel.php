<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kindsHotel extends Model
{
    //
    protected $fillable = [
        'kind_room',
        'kind_room_es',
    ];
    
    
    public function products()
    {
        return $this->belongsToMany('App\Product', 'kindhotel_products');
    }
}
