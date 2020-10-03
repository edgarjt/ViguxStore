<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Precio extends Model
{
    protected $table = 'precio';
    protected $primaryKey = 'pre_id';
    protected $fillable = ['pre_porcentaje', 'fk_user', 'fk_clave_producto'];

    public function user() {
        return $this->belongsTo('App\User', 'fk_user');
    }
}
