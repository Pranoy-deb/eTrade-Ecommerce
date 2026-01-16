<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'cus_id',
        'product_id',
        'rating',
        'msg',
        'approve'
    ];

    function customer(){
        return $this->belongsTo(Customer::class,'cus_id');
    }
}
