<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pages extends Model
{
    //

    use SoftDeletes;
    protected $fillable = ['page_name','page_description','slug','status'];
}
