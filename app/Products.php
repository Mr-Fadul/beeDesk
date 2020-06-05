<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';

    public function images(){
        return $this->hasMany(Products_images::class,'product','id');
    }
}
