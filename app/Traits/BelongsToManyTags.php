<?php

namespace App\Traits;

use App\Models\Tag;

trait BelongsToManyTags
{
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
