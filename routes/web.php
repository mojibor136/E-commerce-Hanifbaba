<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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

Route::controller(ProductController::class)->group(function () {
    Route::get('/' , 'Index')->name('home');
    Route::get('/product', 'ProductView')->name('ProductView');
});
Route::middleware(['auth','web'])->group(function () {
    Route::controller(ProductController::class)->group(function () {
        Route::get('/Data' , 'data')->name('data');
    });
});
require __DIR__.'/auth.php';
