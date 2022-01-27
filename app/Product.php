<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','thumb','price','genre'];
    protected $table = "products";
}
