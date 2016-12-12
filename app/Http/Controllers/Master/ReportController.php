<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReportController extends Controller
{

    public function index()
    {
        return view('master/report/form');
    }

    public function transaction(Request $request)
    {
        return dd($request->all());
    }


}
