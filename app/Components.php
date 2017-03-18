<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Components extends Model
{
    //
    protected $table = 'components';
    
    protected $fillable = [
        'name',
        'body',
        'page_id',
        'order_component',
        'local',
        'status',
    ];
    
    public function page()
    {
        return $this->belongsTo('App\Page','page_id');
    }
    
}
