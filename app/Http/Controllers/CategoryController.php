<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index($id)
    {
        $model = Category::findOrFail($id);
        $product = Product::where('category_id',$model->id)
            ->where('available',1)
            ->orderBy('id', 'desc')
            ->paginate(12);
        return view('frontend/category',[
            'model'=>$model,
            'product'=>$product
        ]);
    }
}
