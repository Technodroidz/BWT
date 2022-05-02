<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name','slug','parent_id','child_id','thumbnail','position','active'];
    public function parent()
    {
    	return $this->belongsTo('App\Category','parent_id');
    } 

    public function categories()
    {
        return $this->hasMany('App\Category', 'parent_id');
    }
    
    public function getThumbnailUrlAttribute(){
        if($this->thumbnail)     
            return url('uploads/'.$this->thumbnail);
        return $this->thumbnail;
    }
    public function childrenCategories()
    {
        return $this->hasMany(Category::class,'parent_id');
    }

    public function videos()
    {
        return $this->hasMany(Videos::class,'category_id')->with('user.channel')->whereHas('user')->withCount('likes')->where('status',true);
    }
}
