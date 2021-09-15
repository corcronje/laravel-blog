<?php

namespace App\Traits;

use App\Models\Role;

trait BelongsToManyRoles
{
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
