<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CommonController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\AdminProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::controller(AdminController::class)->group(function () {
    Route::get('/admin' , 'Admin')->name('admin');
});
Route::controller(AdminProductController::class)->group(function () {
    Route::get('add/product' , 'AddProduct')->name('addproduct');
    Route::get('all/product' , 'AllProduct')->name('allproduct');
    Route::post('store/product' , 'StoreProduct')->name('storeproduct');
    Route::get('/delete/product/{id}' , 'DeleteProduct')->name('deleteproduct');
    Route::get('/edit/product/{id}' , 'EditProduct')->name('editproduct');
    Route::post('/update/product' ,'UpdateProduct')->name('updateproduct');
});  
Route::controller(CategoryController::class)->group(function () {
    Route::get('/add/category' , 'AddCategory')->name('addcategory');
    Route::get('/all/category' , 'AllCategory')->name('allcategory');
    Route::post('/store-category' , 'StoreCategory')->name('storecategory');
    Route::get('/category/page' , 'CategoryPage')->name('categorypage');
    Route::get('/delete/category/{id}' , 'DeleteCategory')->name('deletecategory');
    Route::get('/edit/category/{id}' , 'EditCategory')->name('editcategory');
    Route::post('/update/category' ,'UpdateCategory')->name('updatecategory');
});
Route::controller(SubCategoryController::class)->group(function () {
    Route::get('/add/subcategory' , 'AddSubCategory')->name('addsubcategory');
    Route::get('/all/subcategory' , 'AllSubCategory')->name('allsubcategory');
    Route::post('/store-subcategory' , 'StoreSubCategory')->name('storesubcategory');
    Route::get('/delete/subcategory/{id}' , 'DeleteSubCategory')->name('deletesubcategory');
    Route::get('/edit/subcategory/{id}' , 'EditSubCategory')->name('editsubcategory');
    Route::post('/update/subcategory' ,'UpdateSubCategory')->name('updatesubcategory');
}); 
Route::controller(ProductController::class)->group(function () {
    Route::get('/' , 'Index')->name('home');
    Route::get('/single/product{id}' , 'SingleProduct')->name('singleproduct');
    Route::get('/GetCategoriesData','GetCategoriesData')->name('GetCategoriesData');
    Route::get('/test' , 'Test')->name('test');
});
Route::middleware(['auth','web'])->group(function () {
    Route::controller(ProductController::class)->group(function () {
        Route::get('/shipping' , 'Shipping')->name('shipping');
    });
});

Route::middleware(['auth','web'])->group(function () {
    Route::controller(CommonController::class)->group(function(){
        Route::get('/receivedata', 'ReceiveData')->name('receivedata');
    });
    Route::controller(CheckoutController::class)->group(function(){
        Route::get('/Checkout', 'SandData')->name('sanddata');
    });
    Route::controller(CartController::class)->group(function(){
        Route::get('/addtocart' , 'AddtoCart')->name('addtocart');
        Route::post('store/cart' , 'StoreCart')->name('storecart');
        Route::post('/buynow' , 'StoreBuyNow')->name('storebuynow');
    });
});

require __DIR__.'/auth.php';
