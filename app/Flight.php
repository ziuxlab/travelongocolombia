<?php
    
    namespace App;
    
    use Illuminate\Database\Eloquent\Model;
    
    class Flight extends Model
    {
        //
        protected $table = 'flights';
        
        protected $fillable = [
            'adults',
            'children',
            'infants',
            'stops',
            'img_outbound',
            'img_inbound',
            'originplace',
            'destinationplace',
            'salida_outbound',
            'llegada_outbound',
            'salida_inbound',
            'llegada_inbound',
            'total',
        ];

   
        
        protected $dates = [
            'salida_outbound',
            'llegada_outbound',
            'salida_inbound',
            'llegada_inbound',
        ];
        
        
    }
