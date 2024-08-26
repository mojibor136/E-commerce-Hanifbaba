<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Divison;
use App\Models\City;

class CityController extends Controller {
    public function index() {
        $divisions = Divison::all();
        $citys = City::all();
        return view( 'admin.manage.city', compact( 'divisions', 'citys' ) );
    }

    public function StoreCity( Request $request ) {
        $request->validate( [
            'city' => 'required',
            'divisonId' => 'required',
        ] );

        $divisonId = $request->divisonId;

        $divisonName = Divison::where( 'id', $divisonId )->value( 'divison' );

        City::create( [
            'city' => $request->city,
            'divisionId' => $divisonId,
            'divisionName' => $divisonName,
        ] );

        return back()->with( 'success', 'Added city successfully' );
    }

    public function DeleteCity( $id ) {
        City::findOrFail( $id )->delete();
        return back()->with( 'success', 'Deleted city successfully' );
    }
}
