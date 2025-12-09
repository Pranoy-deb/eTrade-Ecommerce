<?php

namespace App\Models;

use App\Models\Wishlist;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    protected $guarded = ['id'];

    function wishlists(){
        return $this->hasMany(Wishlist::class, 'customer_id');
    }
}
