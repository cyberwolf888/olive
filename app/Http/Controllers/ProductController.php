<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        //
    }

    public function show($id)
    {
        $model = Product::findOrFail($id);

        return view('frontend/product_detail',[
            'model'=>$model
        ]);
    }

}
