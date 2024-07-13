<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller {
    public function Admin() {
        return view( 'admin.addcategory' );
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
