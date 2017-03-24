<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Photos_Package extends Model
{
    //
    use SoftDeletes;
    
    protected $table = 'photosPackages';
    
    protected $fillable = [
        'package_id',
        'img',
        'order',
    
    ];
    
    public function package()
    {
        return $this->belongsTo('App\Packages','package_id');
    }
}
