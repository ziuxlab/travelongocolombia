<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Photo extends Model
{

    use SoftDeletes;

    protected $table = 'photos';

    protected $fillable = [
        'product_id',
        'img',
        'order',
    ];

    public function product()
    {
        return $this->belongsTo('App\Product', 'product_id');
    }

    /**
     * The package to which the photo belongs.
     * El paquete al que pertenece la foto.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    /*public function package()
    {
        return $this->belongsTo('App\Packages', 'package_id');
    }
*/

    /**
     * The activity to which the photo belongs.
     * La actividad a la que pertenece la foto.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    /*public function activity()
    {
        return $this->belongsTo('App\Activity', 'activity_id');
    }*/
}
