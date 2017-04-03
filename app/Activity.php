<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Activity extends Model
{

    use SoftDeletes;

    protected $table = 'activities';

    protected $fillable = [
        'tittle',
        'description',
        'duration',
        'price_adults',
        'price_children',
        'discount', // percent | porcentaje
        'slug_url',
        'meta_description',
        'keywords',
        'status',
        'local',
        'itinerary',
        'type', // package,activity | paquete, actividad
    ];


    /**
     * Representative photos of the activity.
     * Fotos representativas de la actividad.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function photos()
    {
        return $this->hasMany('App\Photo', 'activity_id');
    }

}
