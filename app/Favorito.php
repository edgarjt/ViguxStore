<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorito extends Model
{
    protected $table = 'favoritos';
    protected $primaryKey = 'fav_id';
    protected $fillable = [
        'fk_user', 'fk_clave_producto'
    ];
    public function user() {
        return $this->belongsTo('App\User', 'fk_user');
    }
}
