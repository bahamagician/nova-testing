<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function categories()
    {

        return $this->belongsToMany(Category::class);

    }
    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
