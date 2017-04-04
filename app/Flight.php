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
            'destinationplace',
            'originplace',
            'outbounddate',
            'inbounddate',
        
        ];
        
        protected $dates = [
            'outbounddate',
            'inbounddate',
        ];
        
        
    }
