<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model
{
    //
    use SoftDeletes;
    
    
    protected $table = 'pages';
    
    protected $fillable = [
        'slug_url',
        'name',
        'tittle',
        'body',
        'meta_description',
        'keywords',
        'status',
        'menu',
        'menu_order'
    ];
    
}
