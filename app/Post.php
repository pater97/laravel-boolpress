<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title','slug','image','sub_title','description'];

    public function category(): BelongsTo
        {
             return $this->belongsTo(Category::class);
        }
}
