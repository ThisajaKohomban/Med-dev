<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\StripeController;


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

Route::get('/', function () {
    return view('home');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/service', function () {
    return view('service');
});

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::resource(
        'product-category',
        \App\Http\Controllers\ProductCategoryController::class
    );

    Route::resource(
        'user',
        \App\Http\Controllers\UserController::class
    );


});

route::resource('product-category', \App\Http\Controllers\ProductCategoryController::class);

Route::get('/admin', function () {
    return view('admin.home');
});



//shop

Route::GET('/shop', 'App\Http\Controllers\ProductController@index');




//details
Route::get('/details', function () {
    return view('shop.product-details');
});


//product




Route::GET('more/{id}', 'App\Http\Controllers\ProductController@show');


Route::post('/cart/add/{id}', [CartController::class, 'addToCart'])->name('cart.add');


Route::GET('cart', 'App\Http\Controllers\CartController@showw');

// web.php
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');

Route::post('/save-order', [OrderController::class, 'saveOrder'])->name('save-order');

Route::GET('edit/{id}', 'App\Http\Controllers\ProductController@edit');



//delete
Route::delete('destroy/{id}', 'App\Http\Controllers\ProductController@destroy');
Route::GET('creste', 'App\Http\Controllers\ProductController@viewproducts');

Route::GET('/edee', 'App\Http\Controllers\ProductController@editsave');
Route::POST('/edee', 'App\Http\Controllers\ProductController@editsave');

Route::GET('/create', 'App\Http\Controllers\ProductController@ccc');


use App\Http\Controllers\ProductController;

// Route::post('/store', [ProductController::class, 'store'])->name('product.store');


Route::get('payment/{id}/{total}', [StripeController::class, 'session'])->name('stripe.payment');
Route::get('success', [StripeController::class, 'success'])->name('success');
Route::get('checkout', [StripeController::class, 'checkout'])->name('checkout');
Route::post('/newsave', [ProductController::class, 'store'])->name('newsave');