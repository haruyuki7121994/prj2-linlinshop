<?php

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

Route::get('/home', [\App\Http\Controllers\Frontend\HomeController::class, 'index'])->name('frontend.index');

//admin
Route::group(['prefix' => 'cms', 'as' => 'cms.'], function () {
    Route::get('/dashboard', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('index');

    Route::resource('user', 'Admin\UserController')->except(['store', 'create', 'show']);
    Route::resource('banner', 'Admin\BannerController')->except(['show']);
    Route::resource('category', 'Admin\CategoryController')->except(['show']);
    Route::resource('color', 'Admin\ColorController')->except(['show']);
    Route::resource('comment', 'Admin\CommentController')->except(['show']);
    Route::resource('order', 'Admin\OrderController')->except(['show']);
    Route::resource('promotion', 'Admin\PromotionController')->except(['show']);
    Route::resource('province', 'Admin\ProvinceController')->except(['show']);
    Route::resource('size', 'Admin\SizeController')->except(['show']);
    Route::resource('transport', 'Admin\TransportController')->except(['show']);
    Route::resource('product', 'Admin\ProductController')->except(['show']);
});


