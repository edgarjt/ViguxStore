<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorito extends Model
{
    protected $table = 'favoritos';

    public function user() {
        return $this->belongsTo('App\User', 'fk_user');
    }
}
