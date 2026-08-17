<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UserController;
use App\Models\User;
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
    return view('index');
});

// Redirect from /home to /dashboard
Route::get('/home', function () {
    return redirect()->route('dashboard');
});

Auth::routes(['verify' => true]);


// App Routes

Route::get('/dashboard', [DashboardController::class, 'show'])->name('dashboard')->middleware('verified');


// Users
Route::get('/users', [UserController:: class, 'index'])->name('user.index');
Route::get('/users/create', [UserController:: class, 'create'])->name('user.create');
Route::post('/users/create', [UserController:: class, 'store'])->name('user.store');
Route::get('/users/{user}', [UserController::class, 'edit'])->name('user.edit');
Route::patch('/users/{user}', [UserController::class, 'update'])->name('user.update');
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('user.destroy');

// Profile
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');

Route::resource('products', ProductController::class);
Route::resource('orders', OrderController::class);
Route::resource('suppliers', SupplierController::class);
