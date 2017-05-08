<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    //
    protected $table = 'bookings';
    
    protected $fillable = [
        'price',
        'user_id',
        'status', //['paid','declined','pending']
        'note', //['paid','declined','pending']
    ];
    
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
    
    public function contacts()
    {
        return $this->belongsToMany('App\Contact','contact_booking');
    }

     public function details()
    {
        return $this->hasMany('App\booking_detail','booking_id');
    }

     public function payments()
    {
        return $this->hasMany('App\payment','booking_id');
    }
}
