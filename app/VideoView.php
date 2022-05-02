<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class VideoView extends Model
{
    protected $fillable = [
        'user_id','video_id'
    ];

    /**
     * Get the user that owns the Videos
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(WebUser::class,'user_id');
    }

    /**
     * Get the user that owns the Videos
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function video(): BelongsTo
    {
        return $this->belongsTo(Videos::class,'video_id');
    }
}
