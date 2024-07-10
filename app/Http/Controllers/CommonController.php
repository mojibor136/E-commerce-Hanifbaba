<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommonController extends Controller
{
    public function ReceiveData(Request $request){
        $buynowItem = $request->input('buynowItem');
        $cartItem = $request->input('cartItem');
        
        if ($buynowItem) {
            return redirect()->route('shipping', ['buynowItem' => $buynowItem]);
        } else {
            return redirect()->route('shipping', ['cartItem' => $cartItem]);
        }        
    }
}
