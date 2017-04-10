<?php
    
    namespace App;
    
    use Illuminate\Database\Eloquent\Model;
    
    class city extends Model
    {
        //
        protected $fillable = [
            'city',
        ];
    
        public function products()
        {
            return $this->hasMany(Product::class);
        }
    }
