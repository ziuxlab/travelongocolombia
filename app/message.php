<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class message extends Model
{
    //
    protected $fillable = [
        'name',
        'email',
        'phone',
        'country',
        'message',
    ];
}
