<?php

namespace App\Http\Controllers\Master;

use App\User;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $model = DB::table('users')
            ->select('users.*')
            ->join('role_user','users.id', '=', 'role_user.user_id')
            ->where('role_user.role_id',1)
            ->get();

        return view('master/admin/manage',[
            'model'=>$model
        ]);

    }

    public function create()
    {
        $model = new User();
        return view('master/admin/form',[
            'model'=>$model,
            'update'=>0
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fullname' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('admin.create')
                ->withErrors($validator)
                ->withInput();
        }

        $user = new User();
        $user->name = $request->fullname;
        $user->email = $request->email;
        $user->password = bcrypt($request['password']);
        $user->status = $request->status == 'on' ? 1 : 0;
        $user->save();

        $user->attachRole(1);

        return redirect()->route('admin.manage')->with('success', 'Add new admin!');
    }

    public function edit($id)
    {
        $model = User::findOrFail($id);

        return view('master/admin/form',[
            'model'=>$model,
            'update'=>1
        ]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'fullname' => 'required|max:255',
            'password' => 'required|min:6|confirmed'
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('admin.update')
                ->withErrors($validator)
                ->withInput();
        }

        $user = User::findOrFail($id);

        $user->name = $request->fullname;
        $user->email = $request->email;
        $user->password = bcrypt($request['password']);
        $user->status = $request->status == 'on' ? 1 : 0;
        $user->save();

        return redirect()->route('admin.manage')->with('success', 'Update admin!');
    }
}
