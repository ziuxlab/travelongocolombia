<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class banner extends Model
{
    //
    protected $table = 'banners';
    
    protected $fillable = [
        'tittle',
        'description',
        'img',
        'locale',
    ];
}
