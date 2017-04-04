<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    //
    protected $table = 'payments';
    
    protected $fillable = [
        'value',
        'status',
        'stripe',
        'booking_id'
    ];
    
    public function booking()
    {
        return $this->belongsTo('App\booking', 'booking_id');
    }
    
}
