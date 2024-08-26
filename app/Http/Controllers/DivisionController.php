<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Divison;
use App\Models\City;

class DivisionController extends Controller {
    public function Division() {
        return view( 'admin.manage.division');
    }

    public function StoreDivision( Request $request ) {
        $request->validate( [
            'division' => 'required',
        ] );

        Divison::create( [
            'divison' => $request->division,
        ] );

        return back()->with( 'success', 'Added division successfully' );
    }

    public function DeleteDivision( $id ) {
        Divison::findOrFail( $id )->delete();
        City::where( 'divisionId', $id )->delete();
        return back()->with( 'success', 'Deleted division successfully' );
    }

}
