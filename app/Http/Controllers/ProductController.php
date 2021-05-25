<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\{Product,Stock};

class ProductController extends Controller
{
    public function list(){
        $items=Product::get(['product_id','product_name']);
        return view('product.list',['items'=>$items]);
    }

    public function product($id,Request $request){
        $product=Product::find($id);
        $stock=Stock::where('product_id',$id)->get();
        $cart=$request->session()->get('cart');
        return view('product.product',['product'=>$product,'stock'=>$stock,'cart'=>$cart]);
    }
}
