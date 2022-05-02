<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;

class WebUser  extends Authenticatable
{
    //


    use HasApiTokens, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

     protected $table='web_users';
    protected $fillable = [
        'name','user_type','status','email','mobile', 'password','dob','profile_image',
        'apply_busker_performance','term_and_condition','content_permission','adult_checkbox',
        'us_citizen','legal_permanent','proof_of_residence',
        'authorization_card','photo_and_video','apply_competition','apply_busker_performance'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    /**
     * Get the audition associated with the WebUser
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function audition()
    {
        return $this->hasOne(Audition::class, 'user_id')->orderBy('id','desc');
    }

    public function performances()
    {
        return $this->hasMany(Videos::class,'user_id')->withCount('likes')->whereType('performance');
    }


    /**
     * Get all of the videos for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function videos()
    {
        return $this->hasMany(Videos::class, 'user_id');
    }

    public function galleries()
    {
        return $this->hasMany(Gallery::class,'user_id');
    }

    public function communities()
    {
        return $this->hasMany(OurCommunity::class,'user_id');
    }

    public function channel()
    {
        return $this->hasOne(Channel::class,'user_id');
    }

    public function getProfileUrlAttribute()
    {
        if($this->profile_image)
            return url('storage/profile/'.$this->profile_image);

        return "https://ui-avatars.com/api/?name=".$this->name."&background=5F2652&color=FFF&size=256" ;
    }

    /**
     * Get all of the views for the WebUser
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function views(): HasMany
    {
        return $this->hasMany(VideoView::class, 'user_id');
    }

    /**
     * Get all of the likes for the WebUser
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function likes(): HasMany
    {
        return $this->hasMany(VideoLike::class, 'user_id');
    }
    /**
     * Get all of the events for the WebUser
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function events(): HasMany
    {
        return $this->hasMany(Event::class, 'user_id');
    }

    /**
     * Get all of the event_registrations for the WebUser
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function event_registrations(): HasMany
    {
        return $this->hasMany(EventRegistration::class, 'user_id');
    }

    /**
     * Get the Boutique associated with the User
     *
     */
    public function boutique()
    {
        return $this->hasOne(Boutique::class, 'user_id');
    }

    /**
     * Get all of the addresses for the WebUser
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function addresses(): HasMany
    {
        return $this->hasMany(Address::class, 'user_id');
    }

    /**
     * Get all of the orders for the WebUser
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class, 'seller_id');
    }
}
