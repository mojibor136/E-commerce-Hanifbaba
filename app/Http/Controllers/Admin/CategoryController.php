<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;

class CategoryController extends Controller {

    public function AddCategory() {
        return view( 'admin.addcategory' );
    }

    public function StoreCategory( Request $request ) {
        $request->validate( [
            'category_name' => 'required',
            'category_img' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ] );

        $imageName = '';
        if ( $image = $request->file( 'category_img' ) ) {
            $imageName = time().'-'.uniqid().'.'.$image->getClientOriginalExtension();
            $image->move( public_path( 'CategoryImg' ), $imageName );
        }
        $data = [
            'category_name' => $request->category_name,
            'slug' => strtolower( str_replace( ' ', '-', $request->category_name ) ),
            'category_img' => $imageName,
        ];
        Category::insert( $data );
        return redirect()->route( 'allcategory' )->with( 'success', 'Added Category Successful' );
    }

    public function AllCategory() {
        $categoires = Category::get()->all();
        return view( 'admin.allcategory', compact( 'categoires' ) );
    }

    public function DeleteCategory( $id ) {
        Category::findOrFail( $id )->delete();
        SubCategory::where( 'category_id', $id )->delete();
        Product::where( 'product_category_id', $id )->delete();
        return redirect()->route( 'allcategory' )->with( 'massage', 'Deleted your Category Successful' );
    }

    public function EditCategory( $id ) {
        $category =  Category::findOrFail( $id );
        return view( 'admin.edit.editcategory', compact( 'category' ) );
    }

    public function UpdateCategory( Request $request ) {
        $request->validate( [
            'category_name' => 'required',
            'category_img' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ] );

        $category = Category::findOrFail( $request->id );

        if ( $image = $request->file( 'category_img' ) ) {
            if ( $category->category_img && file_exists( public_path( 'CategoryImg/' . $category->category_img ) ) ) {
                unlink( public_path( 'CategoryImg/' . $category->category_img ) );
            }

            $imageName = time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move( public_path( 'CategoryImg' ), $imageName );
            $category->category_img = $imageName;
        }

        $category->category_name = $request->category_name;
        $category->slug = strtolower( str_replace( ' ', '-', $request->category_name ) );
        $category->save();

        return redirect()->route( 'allcategory' )->with( 'message', 'Updated Category Successfully' );
    }

    public function CategoryPage() {
        return view( 'categorypage' );
    }
}
