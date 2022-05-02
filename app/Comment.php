<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
   protected $fillable = ['user_id','video_id','comment'];

   public function video() {
    return $this->belongsTo(Videos::class);
   }

   public function user() {
    return $this->belongsTo(WebUser::class,'user_id');
   }
}
