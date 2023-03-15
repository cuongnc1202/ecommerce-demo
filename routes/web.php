<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;

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


Route::group(['prefix' => ''], function() {
    Route::get('/', [HomeController::class, 'home'])->name('home');
    Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
    Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
    Route::get('/{product}-{slug}', [HomeController::class, 'productDetail'])->name('product.detail');
    Route::get('/shop', [HomeController::class, 'productList'])->name('product.list');
    Route::get('/danh-muc/{category}-{slug}', [HomeController::class, 'category'])->name('home.category');
    // Route::resource('category', CategoryController::class);
    // Route::resource('product', ProductController::class);
});
Route::group(['prefix' => 'cart'], function() {
    Route::get('/view', [CartController::class, 'view'])->name('cart.view');
    Route::get('/add/{prod}', [CartController::class, 'add'])->name('cart.add');
});

Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'check_login']);

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::resource('category', CategoryController::class);
    Route::resource('product', ProductController::class);
});