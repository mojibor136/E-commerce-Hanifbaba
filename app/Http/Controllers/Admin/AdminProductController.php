<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;

class AdminProductController extends Controller
{
    public function AddProdouct(){
        $categories = Category::get()->all();
        $subcategories = SubCategory::get()->all();
        return view('admin.addproduct',compact('categories','subcategories'));
    }

    public function AllProduct(){
        return view('admin.allproduct');
    }

    public function StoreProduct(Request $request){
        dd($request->All());
    }
}
