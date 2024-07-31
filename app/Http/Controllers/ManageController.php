<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Size;
use App\Models\Color;

class ManageController extends Controller {
    public function Management() {
        return view( 'admin.manage.manage' );
    }

    public function Color() {
        $colors = Color::all();
        return view( 'admin.manage.color', compact( 'colors' ) );
    }

    public function StoreColor( Request $request ) {
        $request->validate( [
            'color' => 'required',
        ] );

        Color::create( [
            'color' => $request->color,
        ] );

        return back()->with( 'success', 'Added color successfully.' );
    }

    public function Size() {
        $sizes = Size::all();
        return view( 'admin.manage.size', compact( 'sizes' ) );
    }

    public function StoreSize( Request $request ) {
        $request->validate( [
            'size' => 'required',
        ] );

        Size::create( [
            'size' => $request->size,
        ] );

        return back()->with( 'success', 'Added size successfully.' );
    }

    public function DeleteSize( $id ) {
        Size::findOrFail( $id )->delete();
        return back()->with( 'success', 'Delete size successfully.' );
    }

    public function DeleteColor( $id ) {
        Color::findOrFail( $id )->delete();
        return back()->with( 'success', 'Delete color successfully.' );
    }
}
