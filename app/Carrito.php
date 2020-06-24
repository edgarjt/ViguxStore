<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    protected $table = 'carrito';

    //muchos a uno
    public function user() {
        return $this->belongsTo('App\User', 'fk_user');
    }
}
