<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Cotizacion extends Model
{
    protected $fillable = [
        'kilometraje','observacion','fecha','vehiculo_id',
    ];

    protected $dates = ['fecha'];

    public function vehiculo()
    {
        return $this->belongsTo(Vehiculo::class);
    }

    public function setFechaAttribute($fecha)
    {
        $this->attributes['fecha'] = $fecha ? Carbon::parse($fecha) : null;
    }

    public function detalle()
    {
        return $this->hasMany(Detalle::class);
    }
}
