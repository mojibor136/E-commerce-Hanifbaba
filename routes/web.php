<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CommonController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\AdminProductController;

Route::controller(AdminController::class)->group(function () {
    Route::get('/admin/login', 'AdminLogin')->name('admin.login');
    Route::post('/admin/login', 'AdminStoreLogin')->name('admin.store.login');
});

// Protected routes with 'admin' middleware
Route::middleware(['admin'])->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('/admin', 'Admin')->name('admin');
    });

    Route::controller(AdminProductController::class)->group(function () {
        Route::get('add/product', 'AddProduct')->name('addproduct');
        Route::get('all/product', 'AllProduct')->name('allproduct');
        Route::post('store/product', 'StoreProduct')->name('storeproduct');
        Route::get('/delete/product/{id}', 'DeleteProduct')->name('deleteproduct');
        Route::get('/edit/product/{id}', 'EditProduct')->name('editproduct');
        Route::post('/update/product', 'UpdateProduct')->name('updateproduct');
    });

    Route::controller(CategoryController::class)->group(function () {
        Route::get('/add/category', 'AddCategory')->name('addcategory');
        Route::get('/all/category', 'AllCategory')->name('allcategory');
        Route::post('/store-category', 'StoreCategory')->name('storecategory');
        Route::get('/category/page', 'CategoryPage')->name('categorypage');
        Route::get('/delete/category/{id}', 'DeleteCategory')->name('deletecategory');
        Route::get('/edit/category/{id}', 'EditCategory')->name('editcategory');
        Route::post('/update/category', 'UpdateCategory')->name('updatecategory');
    });

    Route::controller(SubCategoryController::class)->group(function () {
        Route::get('/add/subcategory', 'AddSubCategory')->name('addsubcategory');
        Route::get('/all/subcategory', 'AllSubCategory')->name('allsubcategory');
        Route::post('/store-subcategory', 'StoreSubCategory')->name('storesubcategory');
        Route::get('/delete/subcategory/{id}', 'DeleteSubCategory')->name('deletesubcategory');
        Route::get('/edit/subcategory/{id}', 'EditSubCategory')->name('editsubcategory');
        Route::post('/update/subcategory', 'UpdateSubCategory')->name('updatesubcategory');
    });

    Route::controller(OrderController::class)->group(function () {
        Route::get('/all/order', 'AllOrder')->name('allorder');
        Route::get('/view/order/{orderId}', 'ViewOrder')->name('vieworder');
        Route::get('/processing/order/{id}', 'processing')->name('processingorder');
        Route::get('/completed/order/{id}', 'completed')->name('completedorder');
        Route::get('/cancelled/order/{id}', 'cancelled')->name('cancelledorder');
    });

    Route::controller(UserController::class)->group(function () {
        Route::get('/all/user', 'AllUser')->name('alluser');
        Route::get('/delete/user/{id}', 'DeleteUser')->name('deleteuser');
    });
});

Route::controller(ProductController::class)->group(function () {
    Route::get('/', 'Index')->name('home');
    Route::get('/view/product{id}', 'ViewProduct')->name('viewproduct');
    Route::get('/filter/products{id}/{slug}', 'FilterProduct')->name('filterproduct');
    Route::get('/price/filter', 'PriceFilter')->name('pricefilter');
    Route::get('/size/filter', 'SizeFilter')->name('sizefilter');
    Route::get('/shop', 'Shop')->name('shop');
    Route::get('/GetCategoriesData', 'GetCategoriesData')->name('GetCategoriesData');
    Route::get('/test', 'Test')->name('test');
});

Route::controller(Controller::class)->group(function () {
    Route::post('/question', 'Question')->name('question');
    Route::get('/all/question', 'AllQuestion')->name('allquestion');
    Route::get('/answer/{id}', 'Answer')->name('answer');
    Route::post('/answer/update', 'AnswerUpdate')->name('answerupdate');
});

Route::controller(SettingsController::class)->group(function () {
    Route::get('/setting', 'Setting')->name('setting');
    Route::prefix('settings')->group(function () {
        Route::get('/banner/change', 'BannerChange')->name('bannerchange');
        Route::post('/banner/upload', 'BannerUpload')->name('bannerupload');
        Route::get('banner/delete/{id}', 'BannerDelete')->name('bannerdelete');
        Route::get('/delivery/charge', 'Charge')->name('charge');
        Route::post('/delivery/charge', 'StoreCharge')->name('storecharge');
        Route::get('/logo/change', 'LogoChange')->name('logochange');
        Route::post('/logo/upload', 'LogoUpload')->name('logoupload');
        Route::get('/account/settings', 'AccountSettings')->name('accountsettings');
        Route::prefix('account/settings')->group(function () {
            Route::get('/password/change', 'PasswordChange')->name('passwordchange');
            Route::post('/password/upload', 'PasswordUpload')->name('passwordupload');
        });
        Route::post('/admin/update', 'AdminUpdate')->name('adminupdate');
        Route::get('/shop/address', 'ShopAddress')->name('shopaddress');
    });
});

Route::middleware(['auth', 'web'])->group(function () {
    Route::controller(ProductController::class)->group(function () {
        Route::get('/shipping', 'Shipping')->name('shipping');
    });
});

Route::middleware(['auth', 'web'])->group(function () {
    Route::controller(CommonController::class)->group(function () {
        Route::get('/receivedata', 'ReceiveData')->name('receivedata');
    });
    Route::controller(CheckoutController::class)->group(function () {
        Route::post('/Checkout', 'SandData')->name('sanddata');
        Route::post('/store/shipping', 'StoreShipping')->name('storeshipping');
        Route::post('/order', 'Order')->name('order');
        Route::post('/payment', 'Payment')->name('payment');
    });
    Route::controller(CartController::class)->group(function () {
        Route::get('/addtocart', 'AddtoCart')->name('addtocart');
        Route::post('store/cart', 'StoreCart')->name('storecart');
        Route::post('/buynow', 'StoreBuyNow')->name('storebuynow');
        Route::get('/delete/cart/{id}' , 'DeleteCart')->name('delete.cart');
    });
});

require __DIR__.'/auth.php';
