<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\newcontroller;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RestController;


use Illuminate\Support\Facades\App;

Route::get('/', function () {
    return redirect()->route('products.index');
});

// Route::get('/home', function () {
//     return redirect()->route('products.index');
// });



// neeeeeeeeeeeeeeeeeeeeeeeeeeeeew
Route::get('filab', [RestController::class, 'get_restarants'])->name('myfilab');

Auth::routes();



Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    // 'middleware' => 'admin'
], function () {

    // Route::get('/', );

    Route::resource('users', UserController::class);
    Route::get('users/{user}/delete', [UserController::class, 'destroy'])->name('users.delete');
});
Route::get('/register/{type}', [UserController::class, 'registerByType'])->name('register.type');
Route::post('/register/{type}', [UserController::class, 'storeByType'])->name('register.type');


Route::get('/profile/{user}', [UserController::class, 'userProfile'])->name('profile');
Route::get('/profile/{user}', [UserController::class, 'userProfile'])->name('users.profile');
Route::get('/panier', [ProductController::class, 'panier'])->name('panier.my');
Route::get('/products/search/{search}', [ProductController::class, 'search']);
Route::resource('/products', ProductController::class);
Route::get('/my_products', [ProductController::class, 'myProducts'])->name('products.my');
Route::get('/panier', [ProductController::class, 'panier'])->name('panier.my');

Route::get('/products/{product}/order', [OrderController::class, 'order'])->name('products.order');
Route::get('/products/{product}/order/success', [OrderController::class, 'orderExchange'])->name('products.order.exchange');

Route::post('/products/search', [ProductController::class, 'search'])->name('products.search');

// Route::get('/products/search/{search}', [ProductController::class, 'search'])->name('products.search');

Route::get('/products/{product}/payment', [PaymentController::class, 'payment'])->name('products.payment');
Route::get('/products/{product}/payment/success', [PaymentController::class, 'success'])->name('products.payment.success');
Route::get('/products/{product}/payment/failed', [PaymentController::class, 'failed'])->name('products.payment.failed');
// Route::get('/payment', [PaymentController::class, 'payment'])->name('payment');

Route::get('/locale', function () {
    return view('translation');
});

Route::get('/locale/{locale}', function ($locale) {
    App::setLocale($locale);

    return view('translation');
});
Route::resource('news', newcontroller::class);

Auth::routes(['verify' => true]);

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');
