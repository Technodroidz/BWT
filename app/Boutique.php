<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boutique extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'name','decription','image'
    ];

    public function getImageUrlAttribute(){
        if($this->image)     
            return url('uploads/'.$this->image);
        return $this->image;
    }
  
}
