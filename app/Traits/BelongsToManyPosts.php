<?php

namespace App\Traits;

use App\Models\Post;

trait BelongsToManyPosts
{
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
