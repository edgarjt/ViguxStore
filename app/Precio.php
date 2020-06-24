<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Precio extends Model
{
    protected $table = 'precio';

    protected $fillable = ['aumento_porcentaje', 'fk_user', 'fk_clave_producto'];

    public function user() {
        return $this->belongsTo('App\User', 'fk_user');
    }
}
