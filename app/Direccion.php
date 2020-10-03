<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    protected $table = 'direccion';
    protected $primaryKey = 'dir_id';
    protected $fillable =['dir_estado', 'dir_municipio', 'dir_codPostal', 'dir_colonia', 'dir_calle', 'dir_numExterior', 'dir_numInterior', 'dir_referencia', 'fk_user'];

    public function user() {
        return $this->belongsTo('App\User', 'fk_user');
    }
}
