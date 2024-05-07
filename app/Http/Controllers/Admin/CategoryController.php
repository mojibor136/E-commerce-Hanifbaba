<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{

    public function AddCategory(){
        return view('admin.addcategory');
    }

    public function StoreCategory(Request $request){
       $request->validate([
         'category_name' => 'required',
         'category_img' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
       ]);

       $imageName = '';
       if($image = $request->file('category_img')){
           $imageName = time().'-'.uniqid().'.'.$image->getClientOriginalExtension();
           $image->move(public_path('assets/CategoryImg'), $imageName);
       }
       $data = [
          'category_name' =>$request->category_name,
          'slug' => strtolower(str_replace('','-', $request->category_name)), 
          'category_img' => $imageName,
      ];
      Category::insert($data);
      return redirect()->route('allcategory')->with('massage', 'Added Category Successful');
    }

    public function AllCategory(){
        $adminCategoires = Category::get()->all();
        return view('admin.allcategory',compact('adminCategoires'));
    }
}
