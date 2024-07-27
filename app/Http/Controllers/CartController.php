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
        $productId = $request->productId;
        $userId = Auth::id();
        $cartId = Cart::where( 'product_id', $productId )->where( 'user_id', $userId )->value( 'product_id' );
        if ( $productId == $cartId ) {
            return back()->with( 'error', 'Already addtocarta a products' );
        } else {
            // Check the product stock
            $product = Product::find( $productId );
            if ( $product->product_quantity < $request->productQuantity ) {
                return back()->with( 'error', 'Not enough stock available.' );
            }
            Cart::create( [
                'user_id' => $userId,
                'product_id' => $request->productId,
                'product_img' => $request->productImg,
                'product_name' => $request->productName,
                'product_price' => $request->productPrice,
                'product_quantity' => $request->productQuantity,
            ] );
            return back()->with( 'success', 'Successfully Addtocart Thanks..' );
        }
    }

    public function DeleteCart( $id ) {
        Cart::findOrFail( $id )->delete();
        return back()->with( 'success', 'Cart Deleted Successfully' );

    }
}
