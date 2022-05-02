<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sponsor extends Model
{



    protected $fillable = [
        'user_id', 'business_name','phone','state','city','zip','address','image','status','country',
        'title','position','type_of_business','sponsor_type','achievement','experience','area_of_interest','component',
        'like_concept','experience_details','first_name','mid_name','last_name','src','video','type','business_type'
    ];

    public function getImageUrlAttribute(){
        if($this->image)     
            return url('uploads/'.$this->image);
        return $this->image;
    }
}
