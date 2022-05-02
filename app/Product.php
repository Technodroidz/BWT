<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use \Sluggable\Traits\Sluggable; 

    public static function slugFrom()
    {
        return ['product_name']; // or return ['first_name', 'last_name'];
    }
 
    public static function slugSaveTo()
    {
        return 'product_slug'; // or return ['user_slug'];
    }
 
    public static function separator()
    {
        return '-'; // or return '_';
    }

    public function getImageUrlAttribute()
    {
        return url('uploads/'.$this->image);
    }

    /**
     * Get the seller that owns the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function seller()
    {
        return $this->belongsTo(WebUser::class, 'seller_id');
    }
    
}
