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

    public function vk()
    {
        return $this->hasOne(VkAccount::class);
    }
}
