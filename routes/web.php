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

//binding
Route::bind('collection', function ($key) {
    return \App\Category::whereSlug($key)->first() ?? abort(404);
});
Route::bind('product', function ($key) {
    if (is_numeric($key)) return \App\Product::find($key) ?? abort(404);
    return \App\Product::whereSlug($key)->first() ?? abort(404);
});
Route::bind('attr', function ($key) {
    return \App\ProductAttribute::with(['product', 'color', 'size', 'images'])->whereId($key)->first() ?? abort(404);
});
Route::bind('order', function ($key) {
    $user = Auth::user();
    return $user && $user->isAdmin()
        ? (\App\Order::with(['detail', 'user', 'province'])->whereId($key)->first() ?? abort(404) )
        : ( \App\Order::with(['detail'])->whereCode($key)->first() ?? abort(404) );
});
Route::bind('code', function ($key) {
    return \App\User::whereIsActive(\App\User::INACTIVE)->whereRememberToken($key)->first() ?? abort(404);
});
Route::bind('user', function ($key) {
    return \App\User::with('orders')->whereId($key)->IsActive()->first() ?? abort(404);
});

//frontend
Route::group(['prefix' => '/', 'as' => 'frontend.'], function () {

    Route::get('/home', [\App\Http\Controllers\Frontend\HomeController::class, 'index'])->name('home');
    Route::get('/collection/{collection}', [\App\Http\Controllers\Frontend\ProductController::class, 'index'])->name('collection');
    Route::get('/all', [\App\Http\Controllers\Frontend\ProductController::class, 'all'])->name('all');
    Route::get('/product/{product}', [\App\Http\Controllers\Frontend\ProductController::class, 'detail'])->name('product');

    //transport
    Route::post('/transport', [\App\Http\Controllers\Frontend\TransportController::class, 'get'])->name('transport.get');

    //cart
    Route::group(['prefix' => '/cart', 'as' => 'cart.'], function () {
        Route::get('/', [\App\Http\Controllers\Frontend\CartController::class, 'index'])->name('index');
        Route::post('/add', [\App\Http\Controllers\Frontend\CartController::class, 'add'])->name('add');
        Route::post('/update', [\App\Http\Controllers\Frontend\CartController::class, 'update'])->name('update');
    });

    //order
    Route::post('/order', [\App\Http\Controllers\Frontend\OrderController::class, 'handle'])->name('order.handle');
    Route::get('/success/{order}', [\App\Http\Controllers\Frontend\OrderController::class, 'success'])->name('order.success');

    //contact-us
    Route::get('/contact-us', [\App\Http\Controllers\Frontend\PageController::class, 'contact'])->name('contact');
    Route::get('/transport', [\App\Http\Controllers\Frontend\PageController::class, 'transport'])->name('transport');
    Route::get('/warranty-policy', [\App\Http\Controllers\Frontend\PageController::class, 'warranty'])->name('warranty');
    Route::get('/term-of-use', [\App\Http\Controllers\Frontend\PageController::class, 'term'])->name('term');
});

//admin
Route::group(['prefix' => 'cms', 'as' => 'cms.', 'middleware' => 'admin'], function () {
    Route::get('/dashboard', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('index');

    Route::group(['prefix' => 'profile', 'as' => 'profile.'], function () {
        Route::get('/', [\App\Http\Controllers\Admin\AdminController::class, 'index'])->name('index');
        Route::post('/update', [\App\Http\Controllers\Admin\AdminController::class, 'update'])->name('update');
        Route::post('/re-password', [\App\Http\Controllers\Admin\AdminController::class, 'repassword'])->name('repassword');
    });

    Route::resource('user', 'Admin\UserController')->except(['store', 'create', 'show']);
    Route::resource('banner', 'Admin\BannerController')->except(['show']);
    Route::resource('category', 'Admin\CategoryController')->except(['show']);
    Route::resource('color', 'Admin\ColorController')->except(['show']);
    Route::resource('comment', 'Admin\CommentController')->except(['show']);
    Route::resource('order', 'Admin\OrderController')->except(['show']);
    Route::resource('promotion', 'Admin\PromotionController');
    Route::post('/promotion/{promotion}/add', [\App\Http\Controllers\Admin\PromotionController::class, 'add'])->name('promotion.add');
    Route::post('/promotion/remove', [\App\Http\Controllers\Admin\PromotionController::class, 'remove'])->name('promotion.remove');
    Route::resource('province', 'Admin\ProvinceController')->except(['show']);
    Route::resource('size', 'Admin\SizeController')->except(['show']);
    Route::resource('transport', 'Admin\TransportController')->except(['show']);
    Route::resource('product', 'Admin\ProductController')->except(['show']);

    Route::group(['prefix' => '/product/attributes', 'as' => 'product.attr.'], function () {
        Route::get('{attr}', [\App\Http\Controllers\Admin\ProductController::class, 'show'])->name('show');
        Route::post('{attr}/update', [\App\Http\Controllers\Admin\ProductController::class, 'updateAttr'])->name('update');
        Route::get('{attr}/delete', [\App\Http\Controllers\Admin\ProductController::class, 'destroyAttr'])->name('delete');
    });

    //file upload
    Route::post('/upload-file', [\App\Http\Controllers\Admin\ImageController::class, 'upload'])->name('upload');
});

//auth

//auth
Route::group(['prefix' => 'auth', 'as' => 'auth.'], function () {
    Route::get('/login', [\App\Http\Controllers\Auth\AuthController::class, 'login'])->name('login.index');
    Route::post('/login/authenticate', [\App\Http\Controllers\Auth\AuthController::class, 'authenticate'])->name('login.authenticate');
    Route::get('/logout', [\App\Http\Controllers\Auth\AuthController::class, 'logout'])->name('logout');
    Route::get('/register', [\App\Http\Controllers\Auth\AuthController::class, 'register'])->name('register.index');
    Route::post('/register/verify', [\App\Http\Controllers\Auth\AuthController::class, 'verify'])->name('register.verify');
    Route::get('/confirm/{code}', [\App\Http\Controllers\Auth\AuthController::class, 'confirm'])->name('register.confirm');
    Route::get('/profile', [\App\Http\Controllers\Auth\AuthController::class, 'profile'])->name('profile.index');
    Route::post('/profile/update', [\App\Http\Controllers\Auth\AuthController::class, 'update'])->name('profile.update');
    Route::post('/profile/re-password', [\App\Http\Controllers\Auth\AuthController::class, 'repassword'])->name('profile.repassword');
});

