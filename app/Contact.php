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
            'city',
            'country',
            'age',
            'type',
            'user_id',
        ];
        
        public function user()
        {
            return $this->belongsTo('App\User', 'user_id');
        }
    }
