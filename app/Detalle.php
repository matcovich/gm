<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle extends Model
{
    public function cotizacion()
    {
        return $this->belongsTo(Cotizacion::class);
    }

}
