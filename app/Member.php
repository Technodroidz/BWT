<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'position','image','decription','type','social_links','status' ];

    protected $casts = [
        'social_links'=>'array'
    ];

    public function getImageUrlAttribute(){  
        if($this->image)     
            return url('uploads/'.$this->image);
        return $this->image;
    }
}
