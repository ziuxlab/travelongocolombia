<?php
    
    namespace App;
    
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\SoftDeletes;
    
    class Product extends Model
    {
        //
        use SoftDeletes;
        
        protected $table = 'products';
        
        protected $fillable = [
            'tittle',
            'slug_url',
            'days',
            'price_adults',
            'price_children',
            'discount',         // porcentaje
            'meta_description',
            'keywords',
            'status',           // 0 => deshabilitado, 1 => habilitado
            'local',            // 'en' or 'es'
            'itinerary',        // Descripcion del hotel actividad o paquete
            'type',             // '0'=>package,'1'=>activity,'2'=>hotel,
            'description',      // breve resumen de la actividad, hotel o paquete
            'address',          // ubicacion de la actividad
        ];
        
        public function photos()
        {
            return $this->hasMany('App\Photo', 'product_id');
        }
    }