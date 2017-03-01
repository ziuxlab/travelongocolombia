<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    //
    
    protected $table = 'settings';
    
    protected $fillable = [
        'css',
        'scripts_header',
        'scripts_footer',
        'tittle',
        'meta_description',
        'keywords',
        'status',
        'email',
        'phone',
        'address',
        'facebook',
        'twitter',
        'google',
        'youtube',
        'instagram',
        'pinterest',
    ];
}
