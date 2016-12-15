<?php

namespace App\Http\Controllers\Master;

use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransactionController extends Controller
{
    public function index()
    {
        $model = Transaction::all();
        return view('master/transaction/manage',[
            'model'=>$model
        ]);
    }

    public function show($id)
    {
        $model = Transaction::findOrFail($id);
        return view('master/transaction/detail',[
            'model'=>$model
        ]);
    }

    public function approve(Request $request)
    {
        $model = Transaction::findOrFail($request->transaction_id);
        //$payment = $model->payment;
        $model->status = Transaction::VERIFIED;
        $model->resi = $request->resi;
        $model->save();
        return redirect()->back();
    }

    public function decline(Request $request)
    {
        $model = Transaction::findOrFail($request->transaction_id);
        $payment = $model->payment;
        if(is_file(base_path('storage/app/images/payment/'.$payment->image))){
            unlink(base_path('storage/app/images/payment/'.$payment->image));
        }
        $payment->delete();
        $model->status = Transaction::NEW_ORDER;
        return redirect()->back();
    }

    public function cancel(Request $request)
    {
        $model = Transaction::findOrFail($request->transaction_id);
        $model->status = Transaction::CANCEL;
        $model->save();
        return redirect()->back();
    }
}
