<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Channel extends Model
{
    use \Sluggable\Traits\Sluggable;
    protected $table = 'channel';

    public $timestamps = false;

    protected $fillable = [
        'user_id','name','slug','request_status','status',
        'sa','sb','sc','sd','se','sf','sg','sh','si','sj','sk','sl','sm',
    ];


    public static function slugFrom()
    {
        return ['name']; // or return ['first_name', 'last_name'];
    }

    public static function slugSaveTo()
    {
        return 'slug'; // or return ['user_slug'];
    }

    public static function separator()
    {
        return '-'; // or return '_';
    }

    public function getStatusTextAttribute()
    {
        return $this->request_status==2?'Active':'Pending';
    }

    public function getUrlAttribute()
    {
        return url('channels/'.$this->slug);
    }

    /**
     * Get the user that owns the Channel
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(WebUser::class, 'user_id');
    }

    /**
     * Get all of the followers for the Channel
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function followers(): HasMany
    {
        return $this->hasMany(Follower::class, 'user_id', 'user_id');
    }
}
