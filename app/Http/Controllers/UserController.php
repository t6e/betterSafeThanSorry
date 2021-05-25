<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\{Purchaser,Stock};

class UserController extends Controller
{
    protected $guarded=['created_at','updated_at'];

    public function purchase(Request $request){
        $user=Auth::user();
        $cart=$request->session()->get('cart');
        foreach($cart as $item){
            $stock=Stock::find($item['stock_id']);
            if($stock->num<$item['num']){
                return redirect('top');
            }
        }
        $r=$request->all();
        foreach($cart as $item){
            $stock=Stock::find($item['stock_id']);
            $stock->fill(['num'=>$stock->num-$item['num']])->save();
            $purchaser=new Purchaser;
            $data=['user_id'=>$user->id,'stock_id'=>$item['stock_id'],'num'=>$item['num']];
            $purchaser->fill($data)->save();
        }
        $request->session()->forget('cart');
        return redirect('history');
    }

    public function history(){
        $user=Auth::user();
        $history=Purchaser::where('user_id',$user->id)->get();
        $params=['user'=>$user,'history'=>$history];
        return view('user.history',$params);
    }
}
