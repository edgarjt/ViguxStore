<?php
namespace App\Helpers;

use Firebase\JWT\JWT;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Facades\Hash;

class JwtAuth {
    public $key;

    public function __construct()
    {
        $this->key = '67BeH6gG5v9A97yoSNh3';
    }

    public function signup()
    {
        return 'signup funcionando';
    }
}
