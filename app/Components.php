<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Components extends Model
{
    //
    protected $table = 'settings';
    
    protected $fillable = [
        'tittle',
        'body',
    ];
}
