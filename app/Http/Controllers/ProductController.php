<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImg;
use App\Models\ProductSize;


class ProductController extends Controller
{
    public function Index(){
        $products = Product::get()->All();
        return view('welcome',compact('products'));
    }

    public function SingleProduct($id){
        $products = Product::findOrFail($id)->get();
        $productId = collect($products)->pluck('id')->toArray();
        $sizes = ProductSize::where('product_id',$productId)->get();
        $images = ProductImg::where('product_id',$productId)->get();
        return view('product-view',compact('products','sizes','images'));
    }

    public function GetCategoriesData(){
        $Categories = Category::orderByRaw('RAND()')->get()->all();
        return response()->json($Categories);
    }

    public function Shipping(Request $request)
    {
        $buynowItem = $request->session()->get('buynowItem');
        $cartItem = $request->session()->get('cartItem');
        return view('shipping')->with('buynowItem', $buynowItem)->with('cartItem', $cartItem);
    }    

    public function Test(){
       return view('single-poduct');
    }
}