<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
        'name', 'email',
    ];

    protected $hidden = [
        'remember_token',
    ];

    public static function generateInviteToken()
    {
        return str_random(50);
    }
}
