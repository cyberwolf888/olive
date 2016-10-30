<?php

namespace App\Http\Controllers\Master;

use App\Models\Category;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = Category::all();
        return view('master/category/manage',[
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
        $model = new Category();
        return view('master/category/form',[
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
            'image' => 'required'
        ]);
        $model = new Category();
        $path = $request->file('image')->storeAs('images/category',md5($request->name).'.'.$request->image->extension());
        $model->name = $request->name;
        $model->description = $request->description;
        $model->image = $path;
        $model->save();

        return redirect()->route('category.manage')->with('success', 'Add new category!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = Category::findOrFail($id);
        return view('master/category/detail',[
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
        $model = Category::findOrFail($id);
        return view('master/category/form',[
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
            'name' => 'required|max:255',
            'description' => 'required|max:255'
        ]);
        $model = Category::findOrFail($id);
        if ($request->hasFile('image')) {
            Storage::delete($model->image);
            $path = $request->file('image')->storeAs('images/category',md5($request->name).'.'.$request->image->extension());
            $model->image = $path;
        }
        $model->name = $request->name;
        $model->description = $request->description;
        $model->save();

        return redirect()->route('category.manage')->with('success', 'Edit category!');
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
}
