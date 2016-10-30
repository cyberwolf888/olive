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
}
