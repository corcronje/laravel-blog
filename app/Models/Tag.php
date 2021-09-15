<?php

namespace App\Models;

use App\Traits\BelongsToManyPosts;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory, BelongsToManyPosts;

    protected $fillable = [
        'title',
        'slug'
    ];
}
