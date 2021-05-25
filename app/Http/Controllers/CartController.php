<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function cart(Request $request){
        $user=Auth::user();
        $cart=$request->session()->get('cart');
        $params=['user'=>$user,'cart'=>$cart];
        return view('user.cart',$params);
    }

    public function add(Request $request){
        $request->session()->push('cart',['stock_id'=>$request->stock_id,'num'=>$request->num]);
        return redirect('product/'.$request->product_id);
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
        return redirect('/cart');
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
