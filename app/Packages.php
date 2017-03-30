<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Packages extends Model
{
    //
    use SoftDeletes;
    
    protected $table = 'packages';
    
    protected $fillable = [
        'tittle',
        'slug_url',
        'days',
        'price_adults',
        'price_children',
        'discount', //porcentaje
        'meta_description',
        'keywords',
        'status',
        'local',
        'itinerary',
        'type', //package,activity
        
    ];
    
    public function photos()
    {
        return $this->hasMany('App\Photos_Package','package_id');
    }
}
