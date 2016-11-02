<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';

    public function product_detail()
    {
        return $this->hasMany('App\Models\ProductDetail', 'product_id');
    }

    public function product_images()
    {
        return $this->hasMany('App\Models\ProductImages', 'product_id');
    }

    public static function getImage($id)
    {
        return ProductImages::where('product_id',$id)->first();
    }
}
