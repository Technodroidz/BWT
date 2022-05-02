<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class feedback extends Model
{
    protected $fillable = [
        'first_name', 'last_name','subject','phone_no','email','message'
      
    ];
}
