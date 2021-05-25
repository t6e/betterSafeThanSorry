<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function purchase(Request $request){
        $cart=$request->session()->get('cart');
        return view('user.cart',['cart'=>$cart]);
    }

    public function history(Request $request){
        $cart=$request->session()->get('cart');
        return view('user.cart',['cart'=>$cart]);
    }
}
