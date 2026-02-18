<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

use App\Traits\LogsActivity;

class Category extends Model
{
    use LogsActivity;
    protected $fillable =[
        'name'
    ];

    public function posts() : BelongsToMany
    {
        return $this->belongsToMany(Post::class);
    }
}
