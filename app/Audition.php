<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Audition extends Model
{
    public $timestamps = false;

    public function getImageUrlAttribute(){
        if($this->photo)
            return url('auddition_media_upload/'.$this->photo);
        return $this->photo;
    }

    public function getVideoUrlAttribute(){
        if($this->video)
            return url('auddition_media_upload/'.$this->video);
        return $this->video;
    }
}
