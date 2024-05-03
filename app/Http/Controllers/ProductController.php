<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function Index(){
        return view('welcome');
    }

    public function ProductView(){
        return view('product-view');
    }

    public function AddtoCart(){
        return view('addtocart');
    }

    public function Shipping(){
        return view('shipping');
    }

    public function data(Request $request){
        dd($request->all());
    }
}
