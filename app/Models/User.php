<?php

namespace Iridium\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;

    protected $fillable = [
        'name', 'email',
    ];

    protected $hidden = [
        'remember_token',
    ];

    public function socialAccounts()
    {
        return $this->hasMany(SocialAccount::class);
    }
}
