<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['product_id', 'sort_order', 'featured_image', 'url'];
    public function product()
    {

        return $this->belongsTo('App\Product');

    }
}
