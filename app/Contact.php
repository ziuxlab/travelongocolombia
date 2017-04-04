<?php
    
    namespace App;
    
    use Illuminate\Database\Eloquent\Model;
    
    class Contact extends Model
    {
        //
        protected $table = 'contacts';
        
        protected $fillable = [
            'email',
            'name',
            'phone',
            'city',
            'country',
            'age',
            'type', //0 = adult, 1 = child, 2 = infant
            'user_id',
        ];
        
        public function user()
        {
            return $this->belongsTo('App\User', 'user_id');
        }
    
        public function bookings()
        {
            return $this->belongsToMany('App\booking', 'contact_booking');
        }
    }
