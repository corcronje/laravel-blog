<?php

namespace App\Traits;

use App\Models\Category;

trait BelongsToCategory
{
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
