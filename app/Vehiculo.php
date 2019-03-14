<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $fillable= [
        'patente', 'ano', 'kilo', 'combustible_id', 'cilindrada', 'modelo_id', 'marca_id', 'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function marca()
    {
        return $this->belongsTo(Marca::class);
    }
    public function modelo()
    {
        return $this->belongsTo(Modelo::class);
    }
    public function combustible()
    {
        return $this->belongsTo(Combustible::class);
    }
    public function cotizacion()
    {
        return $this->hasMany(Cotizacion::class);
    }

    public function setMarcaIdAttribute($marca)
    {
        $this->attributes['marca_id'] = Marca::find($marca)
            ? $marca
            : Marca::create(['name' => $marca])->id;
    }
    public function setModeloIdAttribute($modelo)
    {
        $this->attributes['modelo_id'] = Modelo::find($modelo)
            ? $modelo
            : Modelo::create(['name' => $modelo])->id;
    }
}
