<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','mobile','otp','role_id','thumbnail','user_type','dob','gender','total_coin_amount', 'password','active','basic_details','ip_address','class_id','state_id','city_id','social_media_link','deafult_language'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        return $this->belongsTo('App\Role');
    }
    public function state()
    {
        return $this->belongsTo('App\State');
    }

    /**
     * Get the channel associated with the User
     *
     */
    public function channel()
    {
        return $this->hasOne(Channel::class, 'user_id');
    }

    public function getThumbnailUrlAttribute(){
        if($this->thumbnail)
            return url('/storage/app/public/avatar/'.$this->thumbnail);

        return "https://ui-avatars.com/api/?name=".$this->name."&background=5F2652&color=FFF" ;
    }
}
