<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promocion extends Model
{
    protected $table = 'promociones';

    protected $fillable = ['aumento_porcentaje', 'fk_user', 'fk_clave_producto'];

    public function user() {
        return $this->belongsTo('App\User', 'fk_user');
    }
}
