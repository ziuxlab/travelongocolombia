<?php
    
    namespace App;
    
    use Illuminate\Database\Eloquent\Model;
    
    class booking_detail extends Model
    {
        //
        protected $table = 'booking_details';
        
        protected $fillable = [
            'product_id', //same ID for Flights
            'type', // 1 = product , 2 = flight
            'quantity',
            'price',
            'name',
            'nights',
            'bed',
            'rooms',
            'booking_id',
        ];
        
        public function booking()
        {
            return $this->belongsTo('App\booking', 'booking_id');
        }
        
        public function product()
        {
            return $this->belongsTo('App\Product', 'product_id');
            
        }
    }
