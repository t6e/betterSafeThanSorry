<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function list(){
        $items=DB::table('products')->get(['product_id','product_name']);
        return view('product.list',['items'=>$items]);
    }

    public function product($id){
        $product=DB::table('products')->where('product_id',$id)->first();
        $stock=DB::table('stock')->where('product_id',$id)->get();
        return view('product.product',['product'=>$product,'stock'=>$stock]);
    }
}
