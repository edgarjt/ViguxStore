<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    protected $table = 'direccion';
    protected $fillable =['estado', 'municipio', 'codigo_postal', 'colonia', 'calle', 'numero_exterior', 'numero_interior', 'referencia', 'fk_user'];

    public function user() {
        return $this->belongsTo('App\User', 'fk_user');
    }
}
