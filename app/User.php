<?php

namespace Iridium;

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

    public function vk()
    {
        return $this->hasOne(VkAccount::class);
    }
}
