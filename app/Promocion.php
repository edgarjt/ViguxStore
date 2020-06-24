<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promocion extends Model
{
    protected $table = 'promociones';

    public function user() {
        return $this->belongsTo('App\User', 'fk_user');
    }
}
