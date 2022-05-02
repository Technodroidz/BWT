<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
   protected $fillable = ['state_id','hindi_name','english_name','description','active'];
}
