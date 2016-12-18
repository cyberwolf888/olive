<?php

namespace App\Http\Controllers\Member;

use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Member;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $model = $user->member;

        return view('member/profile/form',[
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
                ->route('member.profile.index')
                ->withErrors($validator)
                ->withInput();
        }

        $model = Member::with('user')->findOrFail($id);
        $user = $model->user;

        $user->name = $request->fullname;
        $user->email = $request->email;
        $user->password = bcrypt($request['password']);
        $user->save();

        $model->user_id = $user->id;
        $model->fullname = $request->fullname;
        $model->phone = $request->phone;
        $model->address = $request->address;
        $model->state = $request->state;
        $model->zip_code = $request->zip_code;
        $model->save();

        return redirect()->route('member.profile.index')->with('success', 'Update member!');
    }
}
