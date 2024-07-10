<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImg;
use App\Models\ProductSize;

class ProductController extends Controller {
    public function Index() {
        $products = Product::get()->All();
        $categories = Category::get()->all();
        return view( 'welcome', compact( 'products', 'categories' ) );
    }

    public function SingleProduct( $id ) {
        $products = Product::findOrFail( $id )->get();
        $productId = collect( $products )->pluck( 'id' )->toArray();
        $sizes = ProductSize::where( 'product_id', $productId )->get();
        $images = ProductImg::where( 'product_id', $productId )->get();
        return view( 'product-view', compact( 'products', 'sizes', 'images' ) );
    }

    public function GetCategoriesData() {
        $Categories = Category::orderByRaw( 'RAND()' )->get()->all();
        return response()->json( $Categories );
    }

    public function shipping( Request $request ) {
        $buynowItem = $request->query( 'buynowItem' );
        $cartItem = $request->query( 'cartItem' );

        if ( $buynowItem === null && $cartItem === null ) {
            return redirect()->route( 'home' )->with( 'error', 'Please provide either buynowItem or cartItem.' );
        }
        return view( 'shipping', compact( 'buynowItem', 'cartItem' ) );

    }

    public function FilterProduct( $id, $slug ) {
        $products = Product::where( 'product_category_id', $id )->get();
        $categories = Category::get();
        return view( 'filter-product', compact( 'products' ) );
    }

    public function Shop() {
        $products = Product::get()->All();
        return view( 'shop', compact( 'products' ) );
    }

    public function Test() {
        return view( 'single-poduct' );
    }
}