<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;

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
Route::controller(CategoryController::class)->group(function () {
    Route::get('/add/category' , 'AddCategory')->name('addcategory');
    Route::get('/all/category' , 'AllCategory')->name('allcategory');
    Route::post('/store-category' , 'StoreCategory')->name('storecategory');
});
Route::controller(SubCategoryController::class)->group(function () {
    Route::get('/add/subcategory' , 'AddSubCategory')->name('addsubcategory');
    Route::get('/all/subcategory' , 'AllSubCategory')->name('allsubcategory');
    Route::post('/store-subcategory' , 'StoreSubCategory')->name('storesubcategory');
}); 
Route::controller(ProductController::class)->group(function () {
    Route::get('/' , 'Index')->name('home');
    Route::get('/product', 'ProductView')->name('ProductView');
});
Route::middleware(['auth','web'])->group(function () {
    Route::controller(ProductController::class)->group(function () {
        Route::get('/addtocart' , 'AddtoCart')->name('addtocart');
        Route::get('/shipping' , 'Shipping')->name('shipping');
        Route::post('product/data' , 'data')->name('data');
    });
});
require __DIR__.'/auth.php';
