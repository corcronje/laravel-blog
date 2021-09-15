<?php

namespace App\Models;

use App\Traits\HasManyPosts;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory, HasManyPosts;

    protected $fillable = [
        'title',
        'slug'
    ];
}
