<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productcategory extends Model
{
    use \Sluggable\Traits\Sluggable; 

    public static function slugFrom()
    {
        return ['name'];
    }
 
    public static function slugSaveTo()
    {
        return 'slug';
    }
 
    public static function separator()
    {
        return '-';
    }

    public function parent()
    {
    	return $this->belongsTo(productcategory::class,'parent_id');
    } 

    public function categories()
    {
        return $this->hasMany(productcategory::class, 'parent_id');
    }
   
    public function childrenCategories()
    {
        return $this->hasMany(productcategory::class,'parent_id');
    }

    public function getImageUrlAttribute()
    {
        return url('uploads/thumbnail/'.$this->thumbnail);
    }
}
