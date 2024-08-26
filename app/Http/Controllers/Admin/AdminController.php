<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\Product;

class AdminController extends Controller {
    public function Admin() {
        $orderCount = Order::count();
        $productCount = Product::count();
        $orders = Order::with( [ 'shipping', 'payment.user' ] )
        ->orderBy( 'created_at', 'desc' )
        ->paginate( 10 );
        return view( 'admin.admin', compact( 'orderCount', 'orders', 'productCount' ) );
    }

    public function AdminLogin() {
        if ( Auth::guard( 'admin' )->check() ) {
            return redirect()->route( 'admin' );
        }
        return view( 'admin.auth.login' );
    }

    public function AdminStoreLogin( Request $request ) {
        $request->validate( [
            'email' => 'required|email',
            'password' => 'required',
        ] );

        if ( Auth::guard( 'admin' )->attempt( $request->only( 'email', 'password' ) ) ) {
            return redirect()->route( 'admin' );

        }

        return back()->with( 'error', 'Invalid email or password.' );
    }

}
