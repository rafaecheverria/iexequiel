<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aventura extends Model
{
    protected $fillable = [
        'id', 'nombre', 'fecha', 'estado'
    ];

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
