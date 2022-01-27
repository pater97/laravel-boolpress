<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function posts(): HasMany
{
    return $this->hasMany(Post::class);
}
}
