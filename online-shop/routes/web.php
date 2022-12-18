<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontController;

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

Route::get('/',[FrontController::class,'index'])->name('home');
Route::get('/detail/{id}',[FrontController::class,'detail'])->name('detail');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');
    Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::resource('categories',\App\Http\Controllers\CategoryController::class);
    Route::resource('brands', \App\Http\Controllers\BrandController::class);
    Route::resource('products', \App\Http\Controllers\ProductController::class);
});
