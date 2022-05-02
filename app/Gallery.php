<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'gallery';

    public $timestamps = false;

    protected $fillable = ['user_id','image'];
    
    public function getImageUrlAttribute(){  
        if($this->image)     
            return url('uploads/gallery/'.$this->image);
        return $this->image;
    }
}
