<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomeBanner extends Model
{
    protected $fillable = ['title','description','active','thumbnail','thumbnail_copy'];

    public function getThumbnailUrlAttribute()
    {

        if($this->thumbnail)     
        return url('uploads/'.$this->thumbnail);
    return $this->thumbnail;
    
    }
  
}
