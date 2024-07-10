<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
       public function SandData(Request $request)
       {
           $cartItems = $request->input('cart');
           $processeData = $this->processData($cartItems);
           $cartItem = $processeData;
           return redirect()->route('receivedata', ['cartItem' => $cartItem]);
       }
        //sand buynow data common controller and recive data common controller

        private function processData($productItems)
        {
            $processeData = array_merge($productItems);
            return $processeData;
        }

        public function StoreShipping(Request $request){
            dd($request->all());
        }
}
