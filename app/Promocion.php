<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promocion extends Model
{
    protected $table = 'promociones';
    protected $primaryKey = 'pro_id';
    protected $fillable = ['pro_porcentaje', 'fk_user', 'fk_clave_producto'];

    public function user() {
        return $this->belongsTo('App\User', 'fk_user');
    }
}
