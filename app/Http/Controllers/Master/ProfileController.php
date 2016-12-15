<?php

namespace App\Http\Controllers\Master;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Validator;

class ProfileController extends Controller
{
    public function index()
    {
        $model = Auth::user();
        return view('master/profile/form',[
            'model'=>$model
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
                ->route('profile.index')
                ->withErrors($validator)
                ->withInput();
        }

        $user = User::findOrFail($id);

        $user->name = $request->fullname;
        $user->email = $request->email;
        $user->password = bcrypt($request['password']);
        $user->save();

        return redirect()->route('profile.index')->with('success', 'Update admin!');
    }
}
