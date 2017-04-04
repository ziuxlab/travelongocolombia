<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class booking_detail extends Model
{
    //
    protected $table = 'booking_details';
    
    protected $fillable = [
        'product_id', //same ID for Flights
        'type', // 0 = product , 1 = flight
        'booking_id',
    ];
    
    public function user()
    {
        return $this->belongsTo('App\booking', 'booking_id');
    }
    
    public function products()
    {
        return $this->hasMany('App\Product', 'product_id');
    }
}
