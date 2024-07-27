<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\Shipping;
use App\Models\Payment;
use App\Models\Order;
use App\Models\Product;
use App\Models\OrderDetails;
use App\Models\Cart;
use App\Models\Admin as Admins;
use App\Jobs\Admin;

class CheckoutController extends Controller {
    public function SandData( Request $request ) {
        $cartItems = $request->input( 'cart' );
        $processeData = $this->processData( $cartItems );
        $cartItem = $processeData;
        return redirect()->route( 'receivedata', [ 'cartItem' => $cartItem ] );
    }
    //sand buynow data common controller and recive data common controller

    private function processData( $productItems ) {
        $processeData = array_merge( $productItems );
        return $processeData;
    }

    public function StoreShipping( Request $request ) {
        $request->validate( [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'city' => 'required',
            'division' => 'required',
            'address' => 'required',
            'total' => 'required',
        ] );

        $customerId = Auth::id();

        // shipping data craete to database
        $shipping =  Shipping::create( [
            'customer_id' => $customerId,
            'name' => $request->name,
            'email' => $request->email,
            'number' => $request->phone,
            'address' => $request->address,
            'city' => $request->city,
            'division' => $request->division,
        ] );

        // payment details create to database
        $payDate = Carbon::now()->toDateTimeString();
        $payment = Payment::create( [
            'userId' => $customerId,
            'amount' => $request->total,
            'paymentMethod' => 'CashOn',
            'senderNumber' => 0,
            'currency' => 'BDT',
            'paymentStatus' => 'success',
            'paymentDate' => $payDate,
        ] );

        // order details create to database
        $order = Order::create( [
            'customer_id' => $customerId,
            'shipping_id' => $shipping->id,
            'payment_id' => $payment->id,
            'status' => 'pending',
        ] );

        $productItems = [];

        $productData = $request->input( 'products', [] );

        foreach ( $productData as $product ) {
            $productItems[] = [
                'order_id' => $order->id,
                'product_id' => $product[ 'productId' ],
                'product_name' => $product[ 'name' ],
                'product_price' => $product[ 'price' ],
                'quantity' => $product[ 'quantity' ],
                'product_img' => $product[ 'image' ],
            ];

            // Update product quantity in stock
            $productModel = Product::find( $product[ 'productId' ] );
            if ( $productModel ) {
                $productModel->product_quantity -= $product[ 'quantity' ];
                $productModel->save();
            }
        }

        OrderDetails::insert( $productItems );
        Cart::where( 'user_id', $customerId )->delete();

        $adminEmail = Admins::first();
        $recipientEmail = $adminEmail->email;

        Admin::dispatch( $order, $shipping, $payment, $recipientEmail );

        return redirect()->route( 'home' )->with( 'success', 'Congratulations! Thank you for your order. Your order has been successfully confirmed.' );
    }
}
