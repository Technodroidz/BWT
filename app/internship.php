<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class internship extends Model
{


  protected $fillable = [
    'user_id', 'education','education_discipline','state','city','zip','address','phone','status',
    'dob','street_performer','talent','achievement','experience','best','worse','expectation','creative_energy','entertainment','7a'
    ,'7b','7c','7d','country','best_street_performer','why_include','about_traveling','handle_issue','goal','experience_details',
    'availability','first_name','mid_name','last_name','src','video'

];

  public function getImageUrlAttribute(){
      if($this->image)     
          return url('uploads/'.$this->image);
      return $this->image;
  }

}
