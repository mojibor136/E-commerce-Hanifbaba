<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;

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

    public function DeleteCategory($id){
        Category::findOrFail($id)->delete();
        SubCategory::where('category_id',$id)->delete();
        Product::where('product_category_id',$id)->delete();
        return redirect()->route('allcategory')->with('massage', 'Deleted your Category Successful');
    }

    public function EditCategory($id){
        $category =  Category::where('id',$id)->get();
        return view('admin.edit.editcategory',compact('category'));
    }

    public function UpdateCategory(Request $request){
        $request->validate([
            'category_name' => 'required',
            'category_img' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ], [
            'category_name.required' => 'Please provide a category name.',
            'category_img.image' => 'The category image must be an image file.',
            'category_img.mimes' => 'The category image must be a jpeg, png, jpg, gif, svg, or webp file.',
            'category_img.max' => 'The category image must not be larger than 2MB.',
        ]);
        
        $imageName = '';
        
        if ($image = $request->file('category_img')) {
            $imageName = time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/CategoryImg'), $imageName);
        }
        
        $categoryId = $request->category_id;
        
        if ($request->file('category_img')) {
            Category::findOrFail($categoryId)->update([
                'category_name' => $request->category_name,
                'slug' => strtolower(str_replace(' ', '-', $request->category_name)),
                'category_img' => $imageName,
            ]);
        } else {
            Category::findOrFail($categoryId)->update([
                'category_name' => $request->category_name,
                'slug' => strtolower(str_replace(' ', '-', $request->category_name)),
            ]);
        }

        return redirect()->route('allcategory')->with('massage', 'Updated Category Successful');
        
    }

    public function CategoryPage(){
        return view('categorypage');
    }
}
