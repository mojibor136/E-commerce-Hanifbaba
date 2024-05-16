<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommonController extends Controller
{
    public function ReceiveData(Request $request){
        $buynowItem = $request->input('buynowItem');
        $cartItem = $request->input('cartItem');
        //sand buynow and cart data shipping method and recive data shipping method
        if($buynowItem){
            return redirect()->route('shipping')->with('buynowItem',$buynowItem);
        }
        else{
            return redirect()->route('shipping')->with('cartItem',$cartItem);
        }
    }
}
