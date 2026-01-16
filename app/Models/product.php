<?php

namespace App\Models;

use App\Models\Wishlist;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable =[
        "category_id",
        "title",
        "slug",
        "price",
        "sellign_price",
        "brand",
        "sku",
        "featured_img",
        "gall_img",
        "short_details",
        "features",
        "status"
    ];
    
    function category(){
        return $this->belongsTo(Category::class);
    }

    function wishlists(){
        return $this->hasMany(Wishlist::class, 'product_id');
    }

    function review(){
        return $this->hasMany(Review::class);
    }


}

