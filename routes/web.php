<?php

use App\Http\Controllers\Adminpanel\OrderController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes(['verify'=>true]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', function () {
        return view('adminpanel.pages.blog.create');
    });

    // Route::resource('products', App\Http\Controllers\Adminpanel\ProductController::class);
    Route::controller(App\Http\Controllers\Adminpanel\ProductController::class)->prefix('products')->name('product.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{product}', 'show')->name('show');
        Route::get('/{product}/edit', 'edit')->name('edit');
        Route::put('/{product}', 'update')->name('update');
        Route::delete('/{product:id}', 'destroy')->name('destroy');
    });

    // Route::resource('users', App\Http\Controllers\Adminpanel\UserController::class);
    Route::controller(App\Http\Controllers\Adminpanel\UserController::class)->prefix('users')->name('user.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{user}', 'show')->name('show');
        Route::get('/{user}/edit', 'edit')->name('edit');
        Route::put('/{user}', 'update')->name('update');
        Route::delete('/{user:id}', 'destroy')->name('destroy');
    });

    // Route::resource('orders', App\Http\Controllers\Adminpanel\rderController::class);
    Route::controller(App\Http\Controllers\Adminpanel\OrderController::class)->prefix('orders')->name('order.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{order}', 'show')->name('show');
        Route::get('/{order}/edit', 'edit')->name('edit');
        Route::put('/{order}', 'update')->name('update');
        Route::delete('/{order:id}', 'destroy')->name('destroy');
    });
});


