<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aventura extends Model
{
    protected $fillable = [
        'id', 'nombre', 'fecha', 'estado'
    ];

    public function setNombreAttribute($valor)
    {
        $this->attributes['nombre'] = strtolower($valor);
    }
    public function getNombreAttribute($valor)
    {
        return ucwords($valor);
    }

    public function setEstadoAttribute($valor)
    {
        $this->attributes['estado'] = strtolower($valor);
    }
    public function getEstadoAttribute($valor)
    {
        return ucwords($valor);
    }

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
