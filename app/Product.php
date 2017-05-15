<?php
    
    namespace App;
    
    use Darryldecode\Cart\Validators\CartItemValidator;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\SoftDeletes;
    use Laravel\Scout\Searchable;
    
    class Product extends Model
    {
        //
        use SoftDeletes;
        //use Searchable;
        
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
            'include',        // price include
            'suggestion',        // sugerencias
            'type',             // '0'=>package,'1'=>activity,'2'=>hotel,
            'description',      // breve resumen de la actividad, hotel o paquete
            'short_description',      // breve resumen de la actividad, hotel o paquete
            'address',          // ubicacion de la actividad
            'city_id',        // ciudad donde se realiza la actividad o paquete
            'address',        // ciudad donde se realiza la actividad o paquete
        ];
        
        public function photos()
        {
            return $this->hasMany('App\Photo', 'product_id');
        }
        
        public function features()
        {
            return $this->belongsToMany('App\Feature', 'feature_products');
        }

        public function kindsHotel()
        {
            return $this->belongsToMany('App\kindsHotel', 'kindhotel_products')->withPivot('price', 'quantity');
        }
        
        public function city()
        {
            return $this->belongsTo(city::class);
        }
        
        public function typeName()
        {
            $type = '';
            switch ($this->type) {
                case 0:
                    $type = trans('dashboard_user.package');
                    break;
                case 1:
                    $type = trans('dashboard_user.activity');
                    break;
            }
            
            return $type;
        }
    }
