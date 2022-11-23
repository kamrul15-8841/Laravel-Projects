<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\admin\AdminController;

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

Route::get('/', [WebController::class, 'index'])->name('home');
Route::get('/detail', [WebController::class, 'detail'])->name('detail');
Route::get('/user-login', [AuthController::class, 'login'])->name('user-login');
Route::get('/user-register', [AuthController::class, 'register'])->name('user-register');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/add/user', [AdminController::class, 'newUser'])->name('add.user');
Route::middleware(['auth:sanctum', 'verified'])->get('/add/manage', [AdminController::class, 'manageUser'])->name('manage.user');

//Route::middleware([
//    'auth:sanctum',
//    config('jetstream.auth_session'),
//    'verified'
//])->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');
//});
