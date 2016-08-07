<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoginToken extends Model
{
    public function getRouteKeyName()
    {
        return 'token';
    }

    public static function make($email)
    {
        $token = new static();
        $token->token = self::generate();
        $token->email = $email;
        $token->save();
        return $token;
    }

    public static function generate()
    {
        return str_random(50);
    }

    public function __toString()
    {
        return $this->token;
    }
}
