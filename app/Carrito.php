<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    protected $table = 'carrito';
    protected $primaryKey = 'car_id';

    protected $fillable = ['car_cantidad', 'car_subTotal', 'fk_user', 'fk_clave_producto'];

    //muchos a uno
    public function user() {
        return $this->belongsTo('App\User', 'fk_user');
    }
}
