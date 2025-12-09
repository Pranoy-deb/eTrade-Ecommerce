<?php

namespace App\Models;

use App\Models\product;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    protected $guarded = ['id'];

    function product(){
        return $this->belongsTo(product::class, 'product_id');
    }

    function customer(){
        return $this->belongsTo(Customer::class, 'customer_id');
    }
}
