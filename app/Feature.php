<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    //
    protected $table = 'features';
    
    protected $fillable = [
        'feature',
        'icon',
        'type', //0 = package, 1 = activity, 2 = hotel
    ];
    
    
    public function products()
    {
        return $this->belongsToMany('App\Product', 'feature_products');
    }
}
