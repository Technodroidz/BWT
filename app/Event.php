<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{

    use SoftDeletes;
    use \Sluggable\Traits\Sluggable;
    protected $fillable = ['name','event_description','slug','type','venue','status','from','to','image','user_type'];



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

    public function scopeUpcoming($query)
    {
        $query->where('from','>',now()); 
    }

    public function scopeAdmin($query)
    {
        $query->whereNull('user_id');
    }

    public function getImageUrlAttribute()
    {
        if($this->image)
            return url('uploads/events/'.$this->image);

        return "https://ui-avatars.com/api/?name=".$this->name."&background=5F2652&color=FFF&size=500" ;
    }

    /**
     * Get all of the registratons for the Event
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function registratons(): HasMany
    {
        return $this->hasMany(EventRegistration::class);
    }

}
