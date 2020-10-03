<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    protected $table = 'compras';
    protected $primaryKey = 'com_id';
    protected $fillable = ['com_cantidad', 'com_subTotal', 'fk_user', 'fk_clave_producto'];
    //Relacion de muchos a uno
    public function user() {
        return $this->belongsTo('App\User', 'fk_user');
    }

}
