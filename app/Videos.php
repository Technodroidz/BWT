<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Videos extends Model
{
    //
    use SoftDeletes;

    protected $table='videos';

    protected $fillable = [
        'user_id','name', 'video','remark', 'category_id','status','thumbnail','prefrence','type'
    ];

    //--------------------------------------

    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }

    public function getVideoUrlAttribute(){
        if($this->video)
            return url('uploads/video/'.$this->video);
        return $this->video;
    }

    public function getThumbnailUrlAttribute(){
        if($this->thumbnail)
            return url('uploads/thumbnail/'.$this->thumbnail);
            return url('assets/img/image.png');
    }

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
     * Get all of the views for the Video
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function views(): HasMany
    {
        return $this->hasMany(VideoView::class, 'video_id');
    }

    /**
     * Get all of the likes for the Video
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function likes(): HasMany
    {
        return $this->hasMany(VideoLike::class, 'video_id');
    }

    /**
     * Get all of the comments for the Video
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class, 'video_id');
    }

}
