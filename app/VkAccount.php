<?php

namespace Iridium;

use Illuminate\Database\Eloquent\Model;

class VkAccount extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
