<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\ProductSize;
use App\Models\ProductImg;

class AdminProductController extends Controller {
    public function AddProduct() {
        $categories = Category::all();
        $subcategories = SubCategory::all();
        return view( 'admin.addproduct', compact( 'categories', 'subcategories' ) );
    }

    public function AllProduct() {
        $products = Product::get()->all();
        return view( 'admin.allproduct', compact( 'products' ) );
    }

    public function StoreProduct( Request $request ) {
        $request->validate( [
            'name' => 'required|string',
            'description' => 'required',
            'regularPrice' => 'required|numeric',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            'subcategory_id' => 'required|exists:sub_categories,id',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'multipleImg.*' => 'image|mimes:jpeg,png,jpg|max:2048',
        ] );

        $imageName = '';

        if ( $image = $request->file( 'image' ) ) {
            $imageName = time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move( public_path( 'ProductImg' ), $imageName );
        }

        $categoryId = $request->category_id;
        $subcategoryId = $request->subcategory_id;

        $categoryName = Category::where( 'id', $categoryId )->value( 'category_name' );
        $subcategoryName = SubCategory::where( 'id', $subcategoryId )->value( 'subcategory_name' );

        $product = Product::create( [
            'product_name' => $request->name,
            'product_desc' => $request->description,
            'product_img' => $imageName,
            'product_price' => $request->price,
            'regular_price' => $request->regularPrice,
            'product_quantity' => $request->quantity,
            'product_category_id' => $categoryId,
            'product_category_name' => $categoryName,
            'product_subcategory_id' => $subcategoryId,
            'product_subcategory_name' => $subcategoryName,
        ] );

        if ( $request->hasFile( 'multipleImg' ) ) {
            $uploadedFiles = [];

            foreach ( $request->file( 'multipleImg' ) as $multipleImg ) {
                $multipleImgName = time() . '-' . uniqid() . '.' . $multipleImg->getClientOriginalExtension();
                $multipleImg->move( public_path( 'ProductImg' ), $multipleImgName );
                $uploadedFiles[] = [
                    'product_id' => $product->id,
                    'product_img' => $multipleImgName,
                ];
            }

            ProductImg::insert( $uploadedFiles );
        }

        $subCategory = SubCategory::find( $subcategoryId );
        $subCategory->product_id = $product->id;
        $subCategory->save();
        SubCategory::where( 'id', $subcategoryId )->increment( 'product_count', 1 );
        Category::where( 'id', $categoryId )->increment( 'product_count', 1 );

        return redirect()->route( 'allproduct' )->with( 'message', 'Product added successfully' );
    }

    public function DeleteProduct( $id ) {
        Product::findOrFail( $id )->delete();
        return redirect()->route( 'allproduct' )->with( 'massage', 'Delete your product Successful' );
    }

    public function EditProduct( $id ) {
        $products = Product::where( 'id', $id )->get();
        return view( 'admin.edit.editproduct', compact( 'products' ) );
    }

    public function UpdateProduct( Request $request ) {

        $id = $request->id;
        $product = Product::findOrFail( $id );

        if ( $image = $request->file( 'image' ) ) {
            $imageName = time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move( public_path( 'ProductImg' ), $imageName );
            $product->product_img  = $imageName;
            // Update product image if a new image is provided
        }

        $product->update( [
            'product_name' => $request->name,
            'product_desc' => $request->description,
            'product_price' => $request->price,
            'product_quantity' => $request->quantity,
            'regular_price' => $request->regular_price,
        ] );

        return redirect()->route( 'allproduct' )->with( 'success', 'Products Updated Successfully' );
    }
}
