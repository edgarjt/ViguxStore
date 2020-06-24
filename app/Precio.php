<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Precio extends Model
{
    protected $table = 'precio';

    public function user() {
        return $this->belongsTo('App\User', 'fk_user');
    }
}
