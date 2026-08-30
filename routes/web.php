<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrganicController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', [OrganicController::class, 'index']);



Route::get('/NaN', function () {
    return view('not_found');
});

Route::get('/icon', function () {
    return view('icon');
});

Route::get('/test', function () {
    // return view('backend.partials.analytics');
    
});

Auth::routes(['verify' => true]);


Route::get('/singleProduct/{id}', [OrganicController::class, 'showProduct'])->name('singleProduct');


Route::resource('home', HomeController::class)->middleware('auth');
Route::get('/admin', [HomeController::class, 'adminDashboard'])->name('admin.dashboard')->middleware('auth');



Route::resource('users', UserController::class)->middleware('verified');
Route::get('image/{id}', [UserController::class, 'getImage'])->name('users.image')->middleware('verified');


Route::prefix('product_category')->as('product_category.')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('index');
    Route::get('/create', [CategoryController::class, 'create_category'])->name('create');
    Route::post('/store', [CategoryController::class, 'store_category'])->name('store');
    Route::get('/{id}/edit', [CategoryController::class, 'edit_category'])->name('edit');
    Route::put('/{id}', [CategoryController::class, 'update_category'])->name('update');
    Route::delete('/{id}', [CategoryController::class, 'destroy_category'])->name('destroy');
    Route::get('/category/{id}/image', [CategoryController::class, 'getCategoryImage'])->name('image');
});


Route::resource('products', ProductController::class)->middleware('verified');
Route::get('/products/{id}/image', [ProductController::class, 'getProductImage'])->name('products.image');
Route::get('/product/{id}', [ProductController::class, 'singleProduct'])->name('single_product');


