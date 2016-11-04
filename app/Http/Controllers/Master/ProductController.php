<?php

namespace App\Http\Controllers\Master;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductDetail;
use App\Models\ProductImages;
use Illuminate\Http\Request;

use Image;
use File;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = Product::all();
        return view('master/product/manage',[
           'model'=>$model
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Product();
        return view('master/product/form',[
            'model'=>$model,
            'update'=>false
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:category|max:255',
            'description' => 'required|max:255',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'discount' => 'required|numeric',
            'available' => 'required',
        ]);

        $model = new Product();
        $model->category_id = $request->category_id;
        $model->name = $request->name;
        $model->price = $request->price;
        $model->description = $request->description;
        $model->stock = $request->stock;
        $model->discount = $request->discount;
        $model->isSale = $request->isSale;
        $model->available = $request->available;
        $model->save();

        $count = count($request->label);
        for ($i=0; $i<$count; $i++){
            $detail = new ProductDetail();
            $detail->product_id = $model->id;
            $detail->label = $request->label[$i];
            $detail->value = $request->value[$i];
            $detail->save();
        }
        return redirect()->route('product.gallery.manage',$model->id)->with('success', 'Add new product!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = Product::findOrFail($id);

        return view('master/product/detail',[
            'model'=>$model
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Product::with('product_detail')->find($id);
        return view('master/product/form',[
            'model'=>$model,
            'update'=>true
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|unique:category|max:255',
            'description' => 'required|max:255',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'discount' => 'required|numeric',
            'available' => 'required',
        ]);
        $model = Product::findOrfail($id);
        $model->category_id = $request->category_id;
        $model->name = $request->name;
        $model->price = $request->price;
        $model->description = $request->description;
        $model->stock = $request->stock;
        $model->discount = $request->discount;
        $model->isSale = $request->isSale;
        $model->available = $request->available;
        $model->save();

        ProductDetail::where('product_id', $model->id)->delete();
        $count = count($request->label);
        for ($i=0; $i<$count; $i++){
            $detail = new ProductDetail();
            $detail->product_id = $model->id;
            $detail->label = $request->label[$i];
            $detail->value = $request->value[$i];
            $detail->save();
        }
        return redirect()->route('product.manage')->with('success', 'Update product!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function manage_gallery($id)
    {
        $product = Product::findORfail($id);
        $model = ProductImages::where('product_id',$id)->get();

        return view('master/product/manage_gallery',[
            'id' => $id,
            'model'=>$model
        ]);

    }

    public function create_gallery($id)
    {
        $model = new ProductImages();

        return view('master/product/form_images',[
            'id'=>$id,
            'model'=>$model
        ]);
    }

    public function store_gallery(Request $request, $id)
    {
        $this->validate($request, [
            'image' => 'required|image'
        ]);
        $model = new ProductImages();
        //$path = $request->file('image')->storeAs('images/product/'.$id.'/',md5(str_random(12)).'.'.$request->image->extension());
        $path = 'storage/app/images/product/'.$id.'/';
        if(!File::exists($path)) {
            File::makeDirectory($path.$id, $mode = 0777, true, true);
        }
        $file = Image::make($request->file('image'))->resize(470, 607)->encode('jpg', 80)->save($path.md5(str_random(12)).'.jpg');
        $model->product_id = $id;
        $model->image = 'images/product/'.$id.'/'.$file->basename;
        $model->save();
        return redirect()->route('product.gallery.manage',$id)->with('success', 'New Image!');
    }

    public function destroy_gallery($id)
    {
        $model = ProductImages::findOrFail($id);
        $product_id = $model->product_id;
        Storage::delete($model->image);
        $model->delete();
        return redirect()->route('product.gallery.manage',$product_id);
    }
}
