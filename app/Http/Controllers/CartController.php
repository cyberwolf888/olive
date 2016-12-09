<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Payment;
use App\Models\ProductDetail;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Illuminate\Http\Request;
use Cart;
use Image;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        //Cart::instance('cart')->destroy();
        //session()->forget('cart');
        //dd(Cart::instance('cart')->content());
        /*foreach(Cart::instance('cart')->content() as $row) {
            echo 'You have ' . $row->qty . ' items of ' . $row->model->name . ' with description: "' . $row->model->description . '" in your cart.';
        }*/

        return view('frontend/cart');
    }

    public function insert(Request $request)
    {
        $product = Product::findOrFail($request->product_id);
        $details = ProductDetail::where('product_id',$product->id)->pluck('value','label')->toArray();
        Cart::instance('cart')->add($product->id, $product->name, $request->qty, $product->price, $details)->associate('App\Models\Product');
        return response()->json([
            'name' => 'Abigail',
            'state' => 'CA'
        ]);
    }

    public function update(Request $request)
    {
        Cart::instance('cart')->update($request->rowId, $request->qty);
    }

    public function delete(Request $request)
    {
        $rowId = $request->rowId;
        Cart::instance('cart')->remove($rowId);
    }

    public function clear()
    {
        Cart::instance('cart')->destroy();
        //return redirect()->route('cart.index');
    }

    public function checkout()
    {
        if(Auth::check()){
            if(!Auth::user()->hasRole('member')){
                return redirect()->route('login');
            }

            $model = Auth::user();

            return view('frontend/checkout',[
                'model'=>$model
            ]);
        }else{
            return redirect()->route('login');
        }

    }
    public function processCheckout(Request $request)
    {
        $model = new Transaction();
        $cart = Cart::instance('cart');
        $member = Auth::user()->member;
        $model->member_id = $member->id;
        $model->fullname = $request->fullname;
        $model->phone = $request->phone;
        $model->address = $request->address;
        $model->zip_code = $request->zip_code;
        $model->state = $request->state;
        $model->total = $cart->total(0,'','');
        $model->status = Transaction::NEW_ORDER;
        $model->save();

        foreach ($cart->content() as $row)
        {
            $detail = new TransactionDetail();
            $detail->transaction_id = $model->id;
            $detail->product_id = $row->id;
            $detail->qty = $row->qty;
            $detail->price = $row->price;
            $detail->total = $row->qty*$row->price;
            $detail->save();
        }

        //TODO kirim email ada pesanan baru
        //


        return redirect()->route('cart.invoice',base64_encode($model->id));
    }

    public function invoice($id)
    {

        //return base64_encode($id);
        //return base64_decode('MQ==');
        $id = base64_decode($id);
        $transaction = Transaction::findOrFail($id);
        $detail = TransactionDetail::where('transaction_id', $transaction->id)->get();
        return view('frontend/invoice',[
            'transaction'=>$transaction,
            'detail'=>$detail
        ]);
    }

    public function payment()
    {
        if(Auth::check()){
            if(!Auth::user()->hasRole('member')){
                return redirect()->route('login');
            }
            $user = Auth::user();
            $member = $user->member;

            $transaction = Transaction::where('status', Transaction::NEW_ORDER)->get();
            $invoice = [];
            foreach ($transaction as $row){
                $invoice[$row->id] = 'Invoice #'.$row->id.' | Rp. '.number_format($row->total,0,',','.');
            }

            return view('frontend/payment',[
                'invoice'=>$invoice
            ]);
        }else{
            return redirect()->route('login');
        }
    }

    public function prosesPayment(Request $request)
    {
        $this->validate($request, [
            'proof' => 'required|image'
        ]);
        $payment = new Payment();
        $transaction = Transaction::find($request->invoice);

        $path = 'storage/app/images/payment/';
        $file = Image::make($request->file('proof'))->resize(800, 800)->encode('jpg', 80)->save($path.md5(str_random(12)).'.jpg');
        $payment->transaction_id = $transaction->id;
        $payment->image = $file->basename;
        $payment->status = Payment::NOT_VERIFIED;
        $payment->save();

        $transaction->status = Transaction::PROCESS;
        $transaction->save();

        return redirect()->route('cart.payment')->with('success','Proof of payment has been submit, please wait for admin to verified your payment.');
    }
}
