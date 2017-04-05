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
        'status',
    ];
    
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
    
    public function contacts()
    {
        return $this->belongsToMany('App\Contact','contact_booking');
    }
}
