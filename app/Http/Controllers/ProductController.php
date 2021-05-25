<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\{Product,Stock};

class ProductController extends Controller
{
    public function list(){
        $user=Auth::user();
        $items=Product::get(['product_id','product_name']);
        $params=['user'=>$user,'items'=>$items];
        return view('product.list',$params);
    }

    public function product($id,Request $request){
        $user=Auth::user();
        $product=Product::find($id);
        $stock=Stock::where('product_id',$id)->get();
        $cart=$request->session()->get('cart');
        $params=['user'=>$user,'product'=>$product,'stock'=>$stock,'cart'=>$cart];
        return view('product.product',$params);
    }
}
