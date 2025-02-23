<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use function Symfony\Component\Finder\name;

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
Route::resource('users', UserController::class);


Route::get('/', [UserController::class, 'home'])->name('home');

//Route::get('/', function () {
//    return view('welcome');
//});
