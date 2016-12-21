<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Subscribe;
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
        //dd($request->all());
        $model = new Subscribe();
        $model->phone = $request->no_hp;
        $model->save();
        //return redirect('subscribe')->with('success', 'Thanks for subscribe!');
        return view('frontend/subscribe');
    }

    public function sale()
    {
        $product = Product::where('available',1)
            ->where('isSale',1)
            ->orderBy('id', 'desc')
            ->paginate(12);

        return view('frontend/sale',[
            'product'=>$product
        ]);
    }

    public function newitem()
    {
        $product = Product::where('available',1)
            ->where('isSale',1)
            ->orderBy('id', 'desc')
            ->limit(10)
            ->paginate(10);

        return view('frontend/newitem',[
            'product'=>$product
        ]);
    }

    public function contact(Request $request)
    {
        if($request->name != null){
            $to = env('OWNER_MAIL');
            $subject = $request->subject;
            $from = $request->email;

            $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            $headers .= 'From: '.$from."\r\n".
                'Reply-To: '.$from."\r\n" .
                'X-Mailer: PHP/' . phpversion();

            $message = '<html><body>';
            $message .= '<p style="color:#000000;font-size:18px;">'.$request->message.'</p>';
            $message .= '</body></html>';

            //mail($to, $subject, $message, $headers);
            redirect(url('contact'))->with('success', 'Message has been sent!');
        }
        return view('frontend/contact');
    }

    public function search(Request $request)
    {
        $product = Product::where('available',1)
            ->where('name', 'like', '%'.$request->keyword.'%')
            ->orderBy('id', 'desc')
            ->paginate(12);
        //dd($request->keyword);
        return view('frontend/search',[
            'product'=>$product
        ]);
    }

}
