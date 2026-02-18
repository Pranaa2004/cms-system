<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

use App\Traits\LogsActivity;

class Page extends Model
{
    use LogsActivity;
    public function posts(): BelongsToMany
    {
        return $this->belongsToMany(Post::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function media(): BelongsTo
    {
        return $this->belongsTo(MediaAsset::class, 'featured_media_id');
    }



    protected $fillable = [
        'title'
    ];
}
