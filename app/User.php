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

     public function question()
    {
        return $this->hasOne('App\Question');
    }

    /*public function getEdad(){
        return $this->nacimiento->diffInYears(now());
        return Carbon::parse($this->nacimiento)->age; // 1990-10-25
    }*/

    public function getYearsAttribute()
    {
        return Carbon::parse($this->nacimiento)->age;
    }

    protected $hidden = [
        'password', 'remember_token',
    ];
}
