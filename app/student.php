<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    public function getImageUrlAttribute(){
        if($this->image)     
            return url('uploads/'.$this->image);
        return $this->image;
    }
  
}
