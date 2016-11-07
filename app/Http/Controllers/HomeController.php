<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        session(['token'=>md5(microtime())]);
        return view('frontend/home');
    }

    public function subscribe(Request $request)
    {
        dd($request->all());
    }

}
