<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Page extends Model
{
    public function posts() : BelongsToMany
    {
        return $this->belongsToMany(Post::class);
    }

    public function user() :BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
