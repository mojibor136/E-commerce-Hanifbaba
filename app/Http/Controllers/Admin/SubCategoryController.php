<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Pagination\LengthAwarePaginator;

class SubCategoryController extends Controller
{
    
    public function AddSubCategory(){
        $categories = Category::get()->all();
        return view('admin.addsubcategory',compact('categories'));
    }

    public function StoreSubCategory(Request $request){
        $request->validate([
            'subcategory_name' =>'required',
            'category_id' =>'required',
        ]);

        $category_id = $request->category_id;
        $category_name = Category::where('id' , $category_id)->value('category_name');
        SubCategory::insert([
          'subcategory_name' =>$request->subcategory_name,   
          'slug' =>strtolower(str_replace('','-', $request->subcategory_name)),
          'category_id' =>$category_id,
          'category_name' =>$category_name,
        ]);
 
        Category::where('id' , $category_id)->increment('subcategory_count');

        return redirect()->route('allsubcategory')->with('massage', 'Added SubCategory Successful');
    }

    public function AllSubCategory(){
        $adminSubCategories = SubCategory::paginate(8);
        return view('admin.allsubcategory', ['adminSubCategories' => $adminSubCategories]);
    }
}
