<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Language;

class Teacher extends Model
{
    protected $fillable = ['name','email','mobile','language_id','state_id','thumbnail','full_address','status'];

    public function language()
    {
    	return $this->belongsTo('App\Language');
    }

    public function getThumbnailAttribute()
    {
    	if (!empty($this->attributes['thumbnail'])) { 
            return url('/storage/app/public/teacher/'.$this->attributes['thumbnail']);
        }
        return $this->attributes['thumbnail'] ;
    }

    public function languages()
    {
        return $this->belongsToMany("App\Language");
    }public function categories()
    {
        return $this->belongsToMany("App\Category");
    }

    public function teacher_category()
    {
        return $this->belongsToMany(Product::class, 'category_teacher','teacher_id','category_id');
    }
    public function teacher_language()
    {
        return $this->belongsToMany(Language::class, 'language_teacher','teacher_id','language_id');
    }
}
