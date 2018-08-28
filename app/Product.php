<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['title', 'description', 'price'];

    public function categories()
    {

        return $this->belongsToMany('App\Category', 'category_product', 'product_id', 'category_id');

    }
    public function images()
    {
        return $this->hasMany('App\Image');
    }
}
