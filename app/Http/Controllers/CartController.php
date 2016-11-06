<?php

namespace App\Http\Controllers;

use App\Models\ProductDetail;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function insert($id)
    {
        $product = Product::findOrFail($id);
        $details = ProductDetail::where('product_id',$product->id)->pluck('value','label')->toArray();

    }
}
