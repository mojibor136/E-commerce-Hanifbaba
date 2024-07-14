<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Cart;
use App\Models\Product;

class CartController extends Controller {
    public function AddtoCart() {
        $products = Product::get()->All();
        $userId  = Auth::id();
        $carts = Cart::where( 'user_id', $userId )->get();
        return view( 'addtocart', compact( 'carts', 'products' ) );
    }

    public function StoreBuyNow( Request $request ) {
        $buynowItem = $request->input( 'buynow' );
        //sand buynow data common controller and recive data common controller
        return redirect()->route( 'receivedata', [ 'buynowItem' => $buynowItem ] );
    }

    public function StoreCart( Request $request ) {
        $request->validate( [
            'productId' => 'required',
            'productQuantity' => 'required|min:1',
        ] );

        $userId  = Auth::id();
        $cartData = [
            'user_id' => $userId,
            'product_id' => $request->productId,
            'product_img' => $request->productImg,
            'product_name' => $request->productName,
            'product_price' => $request->productPrice,
            'product_quantity' => $request->productQuantity,
        ];

        Cart::insert( $cartData );

        return back()->with( 'success', 'Products Cart Added Successfully' );
    }

    public function DeleteCart( $id ) {
        Cart::findOrFail( $id )->delete();
        return back()->with( 'success', 'Cart Deleted Successfully' );

    }
}
