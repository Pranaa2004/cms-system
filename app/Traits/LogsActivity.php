<?php

namespace App\Traits;

use App\Models\Activity;
use Illuminate\Support\Facades\Auth;

trait LogsActivity
{
    protected static function bootLogsActivity()
    {
        static::created(function ($model) {
            $model->logActivity('created');
        });

        static::updated(function ($model) {
            $model->logActivity('updated');
        });

        static::deleted(function ($model) {
            $model->logActivity('deleted');
        });
    }

    public function logActivity($event, $description = null)
    {
        Activity::create([
            'user_id' => Auth::id() ?? 1, // Fallback for seeds
            'log_name' => strtolower(class_basename($this)),
            'description' => $description ?? ucfirst($event) . ' ' . class_basename($this),
            'subject_type' => get_class($this),
            'subject_id' => $this->id,
            'event' => $event,
            'properties' => $this->getAttributes(),
        ]);
    }
}
