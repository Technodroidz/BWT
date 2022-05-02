<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $fillable = ['order_id','seller_id','seller_name','seller_email','seller_phone',
    'name','image','price','shipping',];
}
