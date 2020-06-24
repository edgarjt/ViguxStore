<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    //Relacion de muchos a uno
    public function user() {
        return $this->belongsTo('App\User', 'fk_user');
    }

}
