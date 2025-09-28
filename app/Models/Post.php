<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    public function tags() : BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    public function categories() : BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

    public function pages() : BelongsToMany
    {
        return $this->belongsToMany(Page::class);
    }
}
