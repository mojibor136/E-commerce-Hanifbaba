<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shipping;
use Illuminate\Support\Facades\Auth;

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
        ] );

        $userId = Auth::id();

        Shipping::create( [
            'customer_id' => $userId,
            'name' => $request->name,
            'email' => $request->email,
            'number' => $request->phone,
            'address' => $request->address,
            'city' => $request->city,
            'division' => $request->division,
        ] );

    }
}
