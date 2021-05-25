<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart(Request $request){
        $cart=$request->session()->get('cart');
        return view('user.cart',['cart'=>$cart]);
    }

    public function add(Request $request){
        $request->session()->push('cart',['stock_id'=>$request->stock_id,'num'=>$request->num]);
        return redirect('/product/'.$request->product_id);
    }

    public function remove($id,Request $request){
        $cart=$request->session()->get('cart');
        unset($cart[array_search($id, array_column($cart, 'stock_id'))]);
        $cart=array_filter($cart);
        $request->session()->forget('cart');
        foreach($cart as $item){
            $request->session()->push('cart',$item);
        }
        if($cart==[]){
            $cart=NULL;
        }
        return view('user.cart',['cart'=>$cart]);
    }

    public function change(Request $request){
        $cart=$request->session()->get('cart');
        $request->session()->forget('cart');
        foreach($cart as $item){
            $item["num"]=$request[$item['stock_id']];
            $request->session()->push('cart',$item);
        }
        return redirect('/cart');
    }
}
