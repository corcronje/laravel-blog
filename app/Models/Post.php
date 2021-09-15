<?php

namespace App\Models;

use App\Traits\BelongsToCategory;
use App\Traits\BelongsToManyTags;
use App\Traits\BelongsToUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory, BelongsToCategory, BelongsToUser, BelongsToManyTags;

    protected $fillable = [
        'title',
        'slug',
        'body'
    ];

    protected $casts = [
        'published_at' => 'datetime'
    ];
}
