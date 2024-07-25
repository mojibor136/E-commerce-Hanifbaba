<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Question;

class ProductController extends Controller {
    public function Index() {
        $products = Product::get()->All();
        $categories = Category::get()->all();
        return view( 'welcome', compact( 'products', 'categories' ) );
    }

    public function ViewProduct( $id ) {
        $questions = Question::where( 'status', 1 )
        ->where( 'productId', $id )
        ->get();
        $product = Product::where( 'id', $id )->first();

        $reviews = $product->reviews;

        return view( 'productview', compact( 'product', 'questions', 'reviews' ) );
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

    public function AllCategoryProduct() {
        $categories = Category::get()->all();
        return view( 'categorypage', compact( 'categories' ) );
    }
}