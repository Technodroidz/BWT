<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usercategory extends Model
{
    protected $fillable = ['name','slug','parent_id','child_id','thumbnail','position','active'];
    public function parent()
    {
    	return $this->belongsTo(usercategory::class,'parent_id');
    } 

    public function categories()
    {
        return $this->hasMany(usercategory::class,'parent_id');
    }
    public function getThumbnailUrlAttribute()
    {
        if($this->thumbnail)     
        return url('uploads/'.$this->thumbnail);
    return $this->thumbnail;
    }
    public function childrenCategories()
    {
        return $this->hasMany(usercategory::class,'parent_id');
    }

}
