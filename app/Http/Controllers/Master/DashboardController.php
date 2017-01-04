<?php

namespace App\Http\Controllers\Master;

use App\Models\Member;
use App\Models\Transaction;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $start_date = date("Y-m-d");
        $end_date = date("Y-m-d", strtotime('-1 week', strtotime($start_date)));
        $sales = Transaction::where('created_at','>=',$end_date)->sum('total');
        //dd($sales);
        $count_transaction = Transaction::where('created_at','>=',$end_date)->count('id');
        $member = Member::where('created_at','>=',date("Y-m-d", strtotime('-4 week', strtotime($start_date))))->count('id');
        $transaction = Transaction::limit(5)->orderBy('id','DESC')->get();
        return view('master/dashboard/index',[
            'sales'=>$sales,
            'member'=>$member,
            'count_transaction'=>$count_transaction,
            'transaction'=>$transaction
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
