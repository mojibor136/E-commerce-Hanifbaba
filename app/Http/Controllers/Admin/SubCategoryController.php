<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Product;
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
            'category_id' => 'required',
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

    public function DeleteSubCategory($id){
        try {
            $category_id = SubCategory::where('id', $id)->value('category_id');
            $product_id = SubCategory::where('id', $id)->value('product_id');
            
            SubCategory::findOrFail($id)->delete();
            Category::where('id', $category_id)->decrement('subcategory_count', 1);
        
            if ($product_id) {
                Product::findOrFail($product_id)->delete();
            }
            
            return redirect()->route('allsubcategory')->with('message', 'Deleted your SubCategory Successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error occurred: ' . $e->getMessage());
        }        
    }

    public function EditSubCategory($id){
        $subcategories = SubCategory::findOrFail($id);
        return view('admin.edit.editsubcategory' , compact('subcategories'));
    }

    public function UpdateSubCategory(Request $request)
    {
        $categoryId = $request->subcategory_id;
        $data = [
            'subcategory_name' => $request->subcategory_name,
            'slug' => strtolower(str_replace(' ', '-', $request->subcategory_name)),
        ];
        SubCategory::findOrFail($categoryId)->update($data);
        
        return redirect()->route('allsubcategory')->with('massage', 'Deleted your SubCategory Successful');
    }    
}
