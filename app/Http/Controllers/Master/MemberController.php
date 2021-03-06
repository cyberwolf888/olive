<?php

namespace App\Http\Controllers\Master;

use App\Models\Member;
use App\User;
use Illuminate\Http\Request;
use Validator;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MemberController extends Controller
{
    public function index()
    {
        $model = Member::with('user')->get();

        return view('master/member/manage',[
            'model'=>$model
        ]);
    }

    public function create()
    {
        $model = new Member();
        $user = new User();
        return view('master/member/form',[
            'model'=>$model,
            'user'=>$user,
            'update'=>false
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fullname' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'phone' => 'required|max:255|alpha_num|min:6',
            'state' => 'required',
            'address' => 'required|max:255',
            'zip_code' => 'required|alpha_num'
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('member.create')
                ->withErrors($validator)
                ->withInput();
        }

        $model = new Member();
        $user = new User();

        $user->name = $request->fullname;
        $user->email = $request->email;
        $user->password = bcrypt($request['password']);
        $user->status = $request->status == 'on' ? 1 : 0;
        $user->save();

        $model->user_id = $user->id;
        $model->fullname = $request->fullname;
        $model->phone = $request->phone;
        $model->address = $request->address;
        $model->state = $request->state;
        $model->zip_code = $request->zip_code;
        $model->save();

        $user->attachRole(2);

        return redirect()->route('member.manage')->with('success', 'Add new member!');


    }

    public function show($id)
    {
        $model = Member::with('user')->findOrFail($id);

        return view('master/member/detail',[
            'model'=>$model
        ]);
    }

    public function edit($id)
    {
        $model = Member::with('user')->findOrFail($id);
        $user = $model->user;

        return view('master/member/form',[
            'model'=>$model,
            'user'=>$user,
            'update'=>true
        ]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'fullname' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|min:6|confirmed',
            'phone' => 'required|max:255|alpha_num|min:6',
            'state' => 'required',
            'address' => 'required|max:255',
            'zip_code' => 'required|alpha_num'
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('member.edit')
                ->withErrors($validator)
                ->withInput();
        }

        $model = Member::with('user')->findOrFail($id);
        $user = $model->user;

        $user->name = $request->fullname;
        $user->email = $request->email;
        $user->password = bcrypt($request['password']);
        $user->status = $request->status == 'on' ? 1 : 0;
        $user->save();

        $model->user_id = $user->id;
        $model->fullname = $request->fullname;
        $model->phone = $request->phone;
        $model->address = $request->address;
        $model->state = $request->state;
        $model->zip_code = $request->zip_code;
        $model->save();

        return redirect()->route('member.manage')->with('success', 'Update member!');
    }

}
