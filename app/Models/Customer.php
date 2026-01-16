<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class Customer extends authenticatable
{
    protected $guarded = ['id'];

    function wishlists(){
        return $this->hasMany(Wishlist::class, 'customer_id');
    }

    function review(){
        return $this->hasMany(Review::class);
    }


}
