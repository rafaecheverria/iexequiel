<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Carbon;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "users";
    protected $fillable = [
    'id', 'rut', 'nombres','apellidos', 'password', 'email', 'telefono', 'peso', 'nacionalidad', 'nacimiento', 'questions_id', 'estado'
    ];
   
    protected $appends = ['years'];

    
    public function aventuras()
    {
        return $this->belongsToMany('App\Aventura');
    }
     public function question()
    {
        return $this->hasOne('App\Question');
    }
    public function setNombresAttribute($valor)
    {
        $this->attributes['nombres'] = strtolower($valor);
    }
    public function getNombresAttribute($valor)
    {
        return ucwords($valor);
    }
    public function setApellidosAttribute($valor)
    {
        $this->attributes['apellidos'] = strtolower($valor);
    }
    public function getApellidosAttribute($valor)
    {
        return ucwords($valor);
    }

    public function getYearsAttribute()
    {
        return Carbon::parse($this->nacimiento)->age;
    }

    protected $hidden = [
        'password', 'remember_token',
    ];
}
