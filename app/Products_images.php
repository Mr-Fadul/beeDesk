<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products_images extends Model
{
    protected $table = 'products_images';
    public $timestamps = false;

    public function product(){
        return $this->belongsTo(Products::class,'product','id');
    }
}
