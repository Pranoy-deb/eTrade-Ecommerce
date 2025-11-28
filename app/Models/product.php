<?php

namespace App\Models;

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


}

