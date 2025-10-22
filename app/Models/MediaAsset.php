<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MediaAsset extends Model
{
    public function pages(): HasMany
    {
        return $this->hasMany(Page::class);
    }

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }

    protected $fillable = [
        'disk',
        'path',
        'mime_type',
        'size_kb',
        'width',
        'height',
        'alt',
        'variants'
    ];
}
