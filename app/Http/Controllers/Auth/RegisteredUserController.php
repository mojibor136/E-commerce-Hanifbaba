<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
// Add this line
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use Illuminate\Support\Str;

class RegisteredUserController extends Controller {
    /**
    * Display the registration view.
    */

    public function RegisterShow(): View {
        return view( 'auth.register' );
    }

    /**
    * Handle an incoming registration request.
    *
    * @throws \Illuminate\Validation\ValidationException
    */

    public function RegisterStore( Request $request ): RedirectResponse {
        $request->validate( [
            'name' => 'required|string',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|max:11',
            'password' => 'required|string',
        ], [
            'name.required' => 'The name field is required.',
            'name.string' => 'The name must be a string.',
            'email.required' => 'The email field is required.',
            'email.string' => 'The email must be a string.',
            'email.email' => 'The email must be a valid email address.',
            'email.max' => 'The email may not be greater than 255 characters.',
            'email.unique' => 'The email has already been taken.',
            'phone.required' => 'The phone field is required.',
            'phone.max' => 'The phone may not be greater than 11 digits.',
            'password.required' => 'The password field is required.',
            'password.string' => 'The password must be a string.',
        ] );

        $user = new User( [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make( $request->password ),
        ] );

        $rememberToken = Str::random( 35 );

        $user->remember_token = $rememberToken;

        $user->save();

        Auth::login( $user );
        return redirect()->route( 'home' );
    }
}
