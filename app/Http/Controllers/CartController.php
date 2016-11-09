<?php

namespace App\Http\Controllers;

use App\Models\ProductDetail;
use App\Models\Product;
use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{
    public function index()
    {
        //Cart::instance('cart')->destroy();
        //session()->forget('cart');
        //dd(Cart::instance('cart')->content());
        /*foreach(Cart::instance('cart')->content() as $row) {
            echo 'You have ' . $row->qty . ' items of ' . $row->model->name . ' with description: "' . $row->model->description . '" in your cart.';
        }*/

        return view('frontend/cart');
    }

    public function insert(Request $request)
    {
        $product = Product::findOrFail($request->product_id);
        $details = ProductDetail::where('product_id',$product->id)->pluck('value','label')->toArray();
        Cart::instance('cart')->add($product->id, $product->name, $request->qty, $product->price, $details)->associate('App\Models\Product');
        return response()->json([
            'name' => 'Abigail',
            'state' => 'CA'
        ]);
    }

    public function update(Request $request)
    {
        Cart::instance('cart')->update($request->rowId, $request->qty);
    }

    public function delete(Request $request)
    {
        $rowId = $request->rowId;
        Cart::instance('cart')->remove($rowId);
    }

    public function clear()
    {
        Cart::instance('cart')->destroy();
        //return redirect()->route('cart.index');
    }

    public function checkout()
    {
        return view('frontend/checkout');
    }
}
