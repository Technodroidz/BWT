<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdmissionClass extends Model
{
    protected $fillable = ['hindi_name','english_name','description','active'];
}
