<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CommonController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\ManageController;
use App\Http\Controllers\ReviewController;
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

    Route::prefix('admin')->group(function () {
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
            Route::get('/delete/order/{Id}', 'DeleteOrder')->name('deleteorder');
            Route::get('/processing/order/{id}', 'Processing')->name('processingorder');
            Route::get('/cancelled/order/{id}', 'Cancelled')->name('cancelledorder');
            Route::get('/completed/order/{id}', 'Completed')->name('completedorder');
        });

        Route::controller(UserController::class)->group(function () {
            Route::get('/all/user', 'AllUser')->name('alluser');
            Route::get('/delete/user/{id}', 'DeleteUser')->name('deleteuser');
        });
        
        Route::controller(QuestionController::class)->group(function () {
            Route::get('/all/question', 'AllQuestion')->name('allquestion');
            Route::get('/answer/{id}', 'Answer')->name('answer');
            Route::post('/answer/update', 'AnswerUpdate')->name('answerupdate');
        });
        
        Route::controller(ManageController::class)->group(function () {
            Route::get('/management', 'Management')->name('management');
            Route::get('/size' , 'Size')->name('size');
            Route::get('color' , 'Color')->name('color');
            Route::post('/store/size' , 'StoreSize')->name('store.size');
            Route::post('/store/color' , 'StoreColor')->name('store.color');
            Route::get('/delete/color/{id}' , 'DeleteColor')->name('delete.color');
            Route::get('/delete/size/{id}' , 'DeleteSize')->name('delete.size');
        });

        Route::controller(DivisionController::class)->group(function(){
            Route::get('/division' , 'Division')->name('division');
            Route::post('/store/division' , 'StoreDivision')->name('store.division');
            Route::get('/delete/division/{id}' , 'DeleteDivision')->name('delete.division');
        });

        Route::controller(CityController::class)->group(function(){
            Route::get('/city', 'index')->name('city');
            Route::post('/store/city', 'storeCity')->name('store.city');
            Route::get('/delete/city/{id}' , 'DeleteCity')->name('delete.city');
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
    });
});

Route::controller(ProductController::class)->group(function () {
    Route::get('/', 'Index')->name('home');
    Route::get('/view/product{id}', 'ViewProduct')->name('viewproduct');
    Route::get('/filter/products{id}/{slug}', 'FilterProduct')->name('filterproduct');
    Route::get('/price/filter', 'PriceFilter')->name('pricefilter');
    Route::get('/size/filter', 'SizeFilter')->name('sizefilter');
    Route::get('/shop', 'Shop')->name('shop');
    Route::post('/search' , 'Search')->name('search');
    Route::get('/all/category','AllCategoryProduct')->name('all.category.product');
    Route::get('/GetCategoriesData', 'GetCategoriesData')->name('GetCategoriesData');
    Route::get('/test', 'Test')->name('test');
});

Route::controller(QuestionController::class)->group(function () {
    Route::post('/question', 'Question')->name('question');
});

Route::middleware(['auth', 'web'])->group(function () {
    Route::controller(ProductController::class)->group(function () {
        Route::get('/shipping', 'Shipping')->name('shipping');
    });

    Route::controller(CommonController::class)->group(function () {
        Route::get('/receivedata', 'ReceiveData')->name('receivedata');
    });

    Route::controller(CheckoutController::class)->group(function () {
        Route::post('/checkout', 'SandData')->name('sanddata');
        Route::post('/store/shipping', 'StoreShipping')->name('storeshipping');
        Route::post('/order', 'Order')->name('order');
        Route::post('/payment', 'Payment')->name('payment');
    });

    Route::controller(CartController::class)->group(function () {
        Route::get('/addtocart', 'AddToCart')->name('addtocart');
        Route::post('store/cart', 'StoreCart')->name('storecart');
        Route::post('/buynow', 'StoreBuyNow')->name('storebuynow');
        Route::get('/delete/cart/{id}', 'DeleteCart')->name('delete.cart');
    });

    Route::controller(ReviewController::class)->group(function(){
        Route::get('/review/{productId}/{orderId}' , 'Review')->name('review');
        Route::post('/create/review' , 'CreateReview')->name('createreview');
    });
});

Route::controller(Controller::class)->group(function(){
    Route::get('/test/data' , 'TestData')->name('test');
    Route::post('/test/data' , 'Data')->name('data');
});

require __DIR__.'/auth.php';
