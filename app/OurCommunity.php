<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OurCommunity extends Model
{
    protected $table='our_community';
    public $timestamps = false;
    protected $fillable = [
        "name",
        "user_id",
        "staff_id",
        "position",
        "bio",
        "image",
        "status",
        "type"
    ];

    public function getImageUrlAttribute(){  
        if($this->image)     
            return url('uploads/'.$this->image);
        return url('uploads/avtar.jpg');
    }
}
