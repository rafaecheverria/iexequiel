<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'rut', 'nombres','apellidos', 'password', 'email', 'telefono', 'peso', 'nacionalidad', 'nacimiento', 'questions_id'
    ];

    protected $table = "users";

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

     public function question()
    {
        return $this->hasOne('App\Question');
    }


    protected $hidden = [
        'password', 'remember_token',
    ];
}
