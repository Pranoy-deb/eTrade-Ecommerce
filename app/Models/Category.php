<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'icon'
    ];

    function products(){
        return $this->hasMany(product::class,);
    }
}
