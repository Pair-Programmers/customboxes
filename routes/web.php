<?php

use App\Http\Controllers\Adminpanel\OrderController;
use App\Models\Industry;
use App\Models\Product;
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



Auth::routes(['verify'=>true]);

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/industry/{industry}', [App\Http\Controllers\IndustryController::class, 'show'])->name('industry.show');
Route::get('/custom-printed-boxes', [App\Http\Controllers\IndustryController::class, 'showCustomPrintedBoxes'])->name('industry.custom-printed-boxes.show');
Route::get('/boxes-styles', [App\Http\Controllers\IndustryController::class, 'showBoxesStyles'])->name('industry.boxes-styles');

//product
Route::get('/industry/{industry:slug}/{product:slug}', [App\Http\Controllers\ProductController::class, 'show'])->name('product.show');
Route::post('/products-results', [App\Http\Controllers\ProductController::class, 'search'])->name('product.search');
Route::get('/custom-qoute', [App\Http\Controllers\ProductController::class, 'index'])->name('product.index');
Route::get('/rush-order', [App\Http\Controllers\ProductController::class, 'showRushOrderPage'])->name('product.rush-order');

//order

//newsletter
Route::post('/news-subscriber/store', [App\Http\Controllers\NewsSubscriberController::class, 'store'])->name('news-subsciber.store');

Route::get('/blogs/{category?}', [App\Http\Controllers\BlogController::class, 'index'])->name('blog.index');
//Route::get('/blogs-by-category/{blogcategory:slug}', [App\Http\Controllers\BlogController::class, 'indexByIndustry'])->name('blog.index-by-category');
//Route::get('/blogs/{blogcatgeory}', [App\Http\Controllers\BlogController::class, 'index'])->name('blog.index.by-category');
Route::get('/blog/{blog}', [App\Http\Controllers\BlogController::class, 'show'])->name('blog.show');

Route::controller(App\Http\Controllers\OrderController::class)->prefix('order')->name('order.')->group(function () {
    Route::post('/', 'store')->name('store');
});
Route::get('/contact-us', [App\Http\Controllers\ContactUsController::class, 'create'])->name('contact-us');
Route::post('/contact-us/store', [App\Http\Controllers\ContactUsController::class, 'store'])->name('contact-us.store');
Route::get('/about-us', [App\Http\Controllers\WebPagesController::class, 'showAboutUsPage'])->name('about-us');
Route::get('/privacy-policy', [App\Http\Controllers\WebPagesController::class, 'showPrivacyPolicyPage'])->name('privacy-policy');
Route::get('/term-and-conditions', [App\Http\Controllers\WebPagesController::class, 'showTermAndConditionsPage'])->name('term-conditions');
Route::get('/faqs', [App\Http\Controllers\WebPagesController::class, 'showFAQSPage'])->name('faqs');
Route::get('/paper-weight-chart', [App\Http\Controllers\WebPagesController::class, 'showPaperWeightPage'])->name('paper-weight');

//adminpanel
Route::get('admin/login', [App\Http\Controllers\Adminpanel\AuthController::class, 'show'])->name('admin.login.show');
Route::post('admin/login', [App\Http\Controllers\Adminpanel\AuthController::class, 'login'])->name('admin.login');
Route::prefix('admin')->name('admin.')->middleware('auth:admin')->group(function () {

    Route::post('admin/logout', [App\Http\Controllers\Adminpanel\AuthController::class, 'logout'])->name('logout');

    //dashboard
    Route::controller(App\Http\Controllers\Adminpanel\DashboardController::class)->name('dashboard')->group(function () {
        Route::get('/', 'index');
    });

    //industry
    Route::controller(App\Http\Controllers\Adminpanel\IndustryController::class)->prefix('industry')->name('industry.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{industry}', 'show')->name('show');
        Route::get('/{industry}/edit', 'edit')->name('edit');
        Route::put('/{industry}', 'update')->name('update');
        Route::delete('/{industry:id}', 'destroy')->name('destroy');
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

    // user
    Route::controller(App\Http\Controllers\Adminpanel\UserController::class)->prefix('users')->name('user.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{user}', 'show')->name('show');
        Route::get('/{user}/edit', 'edit')->name('edit');
        Route::put('/{user}', 'update')->name('update');
        Route::delete('/{user:id}', 'destroy')->name('destroy');
    });

    // order
    Route::controller(App\Http\Controllers\Adminpanel\OrderController::class)->prefix('orders')->name('order.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{order}', 'show')->name('show');
        Route::get('/{order}/edit', 'edit')->name('edit');
        Route::put('/{order}', 'update')->name('update');
        Route::delete('/{order:id}', 'destroy')->name('destroy');
    });

    //blog
    Route::controller(App\Http\Controllers\Adminpanel\BlogController::class)->prefix('blogs')->name('blog.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{blog}', 'show')->name('show');
        Route::get('/{blog}/edit', 'edit')->name('edit');
        Route::put('/{blog}', 'update')->name('update');
        Route::delete('/{blog:id}', 'destroy')->name('destroy');
    });

    //blog-category
    Route::controller(App\Http\Controllers\Adminpanel\BlogCategoryController::class)->prefix('blogs-category')->name('blog-category.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{blogCategory}', 'show')->name('show');
        Route::get('/{blogCategory}/edit', 'edit')->name('edit');
        Route::put('/{id}', 'update')->name('update');
        Route::delete('/{blogCategory:id}', 'destroy')->name('destroy');
    });

    //sitemap
    Route::controller(App\Http\Controllers\Adminpanel\SitemapController::class)->prefix('other.sitemap')->name('sitemap.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::get('/', 'store')->name('store');
        Route::get('/{blogCategory}', 'show')->name('show');
        Route::get('/{blogCategory}/edit', 'edit')->name('edit');
        Route::put('/{id}', 'update')->name('update');
        Route::delete('/{blogCategory:id}', 'destroy')->name('destroy');
    });
});


