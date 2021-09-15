<?php

namespace App\Models;

use App\Traits\BelongsToManyUsers;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory, BelongsToManyUsers;

    protected $fillable = [
        'name',
        'permissions'
    ];

    protected $casts = [
        'permissions' => 'array'
    ];
}
