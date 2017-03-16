<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class banner extends Model
{
    //
    protected $table = 'banners';
    
    protected $fillable = [
        'tittle_en',
        'titlle_es',
        'description_en',
        'description_es',
        'img',
    ];
}
