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
Route::get('/panier', [ProductController::class, 'panier'])->name('panier.my');



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
