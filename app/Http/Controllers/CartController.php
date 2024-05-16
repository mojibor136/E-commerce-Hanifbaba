<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Cart;

class CartController extends Controller
{
    public function AddtoCart(){
        $userId  = Auth::id();
        $carts = Cart::where('user_id',$userId)->get();
        return view('addtocart',compact('carts'));
    }

    public function StoreBuyNow(Request $request){
        $buynowItem = $request->input('buynow');
        //sand buynow data common controller and recive data common controller
        return redirect()->route('receivedata', ['buynowItem' => $buynowItem]);
    }

    public function StoreCart(Request $request){
        $request->validate([
            'productId' => 'required',
            'productQuantity' => 'required|min:1',
        ]);

        $userId  = Auth::id();
        $cartData = [
            'user_id' => $userId,
            'product_id' => $request->productId,
            'product_img' => $request->productImg,
            'product_name' => $request->productName,
            'product_price' => $request->productPrice,
            'product_quantity' => $request->productQuantity,
            'product_size' => $request->productSize,
        ];

        Cart::insert($cartData);

        return back()->with('message','Products Cart Added Successfully');
    }
}
