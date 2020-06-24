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
        'name', 'ap_paterno', 'ap_materno',  'email', 'password', 'telefono', 'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //uno a muchos
    public function compra() {
        return $this->hasMany('App\Compra');
    }

    public function favorito() {
        return $this->hasMany('App\Favorito');
    }

    public function direccion() {
        return $this->hasMany('App\Direccion');
    }


}
