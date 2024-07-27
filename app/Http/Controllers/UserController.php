<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller {
    public function AllUser() {
        $users = User::all();
        return view( 'admin.alluser', compact( 'users' ) );
    }

    public function DeleteUser( $id ) {
        User::findOrFail( $id )->delete();
        return back()->with( 'success', 'User deleted successfully.' );
    }
}
