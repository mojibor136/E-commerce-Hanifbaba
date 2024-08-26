<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Divison;
use Illuminate\Http\Request;
use App\Models\City;

class Controller extends BaseController {
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function TestData() {
        $divisions = Divison::all();
        return view( 'test.test', compact( 'divisions' ) );
    }

    public function Data( Request $request ) {
        $datas = City::where( 'divisionId', $request->division )->get();
        return view( 'test.data', compact( 'datas' ) );
    }
}
