<?php
namespace App\Plugins;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;

/**
 * Created by PhpStorm.
 * User: Karen
 * Date: 11/7/2016
 * Time: 1:18 AM
 */

class Cart
{
    public static function add($id, $name, $qty, $price)
    {
        $cart = session('cart');
        if(count($cart)>0){
            $isNew = true;
            $i = 0;
            foreach ($cart as $key=>$c){
                if($c['id']==$id){
                    $isNew = false;
                    $cart[$i]['qty'] = $c['qty']+1;
                }
                $i++;
            }
            if($isNew){
                $new_item = ['id'=>$id, 'name'=>$name, 'qty'=>$qty, 'price'=>$price];
                //array_push($cart,$new_item);
                session()->push('cart', $new_item);
            }

        }else{
            $cart = array();

            $new_item = ['id'=>$id, 'name'=>$name, 'qty'=>$qty, 'price'=>$price];
            //array_push($cart,$new_item);
            session()->push('cart', $new_item);
        }
        session()->put('cart', $cart);
    }

    public static function getContent()
    {
        return session('cart');
    }

    public static function total()
    {
        $cart = session('cart');
        $total = 0;
        if(count($cart)>0){
            foreach ($cart as $key=>$c){
                $total += $c['price']*$c['qty'];
            }
            return $total;
        }else{
            return $total;
        }
    }
}