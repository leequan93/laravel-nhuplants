<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
})->name('home');

Route::get('/shop', [App\Http\Controllers\ShopController::class, 'index'])->name('shop');

Route::get('/product', function () {
    return view('product');
})->name('product');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin/index');
    })->name('admin.index');

    // Auth
    Route::get('auth', [App\Http\Controllers\Admin\AuthController::class, 'index'])
        ->withoutMiddleware(['auth'])
        ->name('admin.auth.index');

    Route::post('auth/register', [App\Http\Controllers\Admin\AuthController::class, 'register'])
        ->withoutMiddleware(['auth'])
        ->name('admin.auth.register');

    Route::post('auth/login', [App\Http\Controllers\Admin\AuthController::class, 'login'])
        ->withoutMiddleware(['auth'])
        ->name('admin.auth.login');

    Route::get('auth/logout', [App\Http\Controllers\Admin\AuthController::class, 'logout'])
        ->name('admin.auth.logout');

    // User
    Route::get('user', [App\Http\Controllers\Admin\UserController::class, 'show'])
        ->name('admin.user.show');

    Route::put('user', [App\Http\Controllers\Admin\UserController::class, 'update'])
        ->name('admin.user.update');

    // Cover
    Route::get('cover', [App\Http\Controllers\Admin\CoverController::class, 'index'])
        ->name('admin.cover.index');

    Route::get('cover/create', [App\Http\Controllers\Admin\CoverController::class, 'create'])
        ->name('admin.cover.create');

    Route::post('cover/store', [App\Http\Controllers\Admin\CoverController::class, 'store'])
        ->name('admin.cover.store');

    Route::get('cover/{cover}', [App\Http\Controllers\Admin\CoverController::class, 'show'])
        ->name('admin.cover.show');

    Route::put('cover/{cover}', [App\Http\Controllers\Admin\CoverController::class, 'update'])
        ->name('admin.cover.update');

    Route::delete('cover/{cover}', [App\Http\Controllers\Admin\CoverController::class, 'destroy'])
        ->name('admin.cover.destroy');

    Route::put('cover/{cover}/public', [App\Http\Controllers\Admin\CoverController::class, 'public'])
        ->name('admin.cover.public');

    Route::put('cover/{cover}/draft', [App\Http\Controllers\Admin\CoverController::class, 'draft'])
        ->name('admin.cover.draft');

    // Category
    Route::get('category', [App\Http\Controllers\Admin\CategoryController::class, 'index'])
        ->name('admin.category.index');

    Route::get('category/create', [App\Http\Controllers\Admin\CategoryController::class, 'create'])
        ->name('admin.category.create');

    Route::post('category/store', [App\Http\Controllers\Admin\CategoryController::class, 'store'])
        ->name('admin.category.store');

    Route::get('category/{category}', [App\Http\Controllers\Admin\CategoryController::class, 'show'])
        ->name('admin.category.show');

    Route::put('category/{category}', [App\Http\Controllers\Admin\CategoryController::class, 'update'])
        ->name('admin.category.update');

    Route::delete('category/{category}', [App\Http\Controllers\Admin\CategoryController::class, 'destroy'])
        ->name('admin.category.destroy');

    Route::put('category/{category}/public', [App\Http\Controllers\Admin\CategoryController::class, 'public'])
        ->name('admin.category.public');

    Route::put('category/{category}/draft', [App\Http\Controllers\Admin\CategoryController::class, 'draft'])
        ->name('admin.category.draft');

    // Product
    Route::get('product', [App\Http\Controllers\Admin\ProductController::class, 'index'])
        ->name('admin.product.index');

    Route::get('product/create', [App\Http\Controllers\Admin\ProductController::class, 'create'])
        ->name('admin.product.create');

    Route::post('product/store', [App\Http\Controllers\Admin\ProductController::class, 'store'])
        ->name('admin.product.store');

    Route::get('product/{product}', [App\Http\Controllers\Admin\ProductController::class, 'show'])
        ->name('admin.product.show');

    Route::put('product/{product}', [App\Http\Controllers\Admin\ProductController::class, 'update'])
        ->name('admin.product.update');

    Route::delete('product/{product}', [App\Http\Controllers\Admin\ProductController::class, 'destroy'])
        ->name('admin.product.destroy');

    Route::put('product/{product}/public', [App\Http\Controllers\Admin\ProductController::class, 'public'])
        ->name('admin.product.public');

    Route::put('product/{product}/draft', [App\Http\Controllers\Admin\ProductController::class, 'draft'])
        ->name('admin.product.draft');

    Route::delete('product/image-extra/{productImageExtra}', [App\Http\Controllers\Admin\ProductController::class, 'productImageExtraDestroy'])
        ->name('admin.product.image-extra.destroy');
});
