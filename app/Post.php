<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use illuminate\database\eloquent\relations\belongsTo;

class Post extends Model
{
    protected $fillable = ['title','slug','image','sub_title','description'];
    
    /**
     * Get the category that owns the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
