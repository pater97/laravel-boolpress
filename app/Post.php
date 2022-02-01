<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\User;
use illuminate\database\eloquent\relations\belongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Post extends Model
{
    protected $fillable = ['title','slug','image','sub_title','description','category_id'];
    
    /**
     * Get the category that owns the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get the user that owns the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    
}
