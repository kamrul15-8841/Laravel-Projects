<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\TeacherController;
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

Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard')->middleware(['auth:sanctum', 'verified']);
Route::get('/add/user', [AdminController::class, 'addUser'])->name('add.user')->middleware(['auth:sanctum', 'verified', 'superAdmin']);
Route::post('/new/user', [AdminController::class, 'create'])->name('new.user')->middleware(['auth:sanctum', 'verified', 'superAdmin']);
Route::get('/manage/user', [AdminController::class, 'manageUser'])->name('manage.user')->middleware(['auth:sanctum', 'verified', 'superAdmin']);
Route::get('/edit/user/{id}', [AdminController::class, 'editUser'])->name('edit.user')->middleware(['auth:sanctum', 'verified', 'superAdmin']);
Route::post('/update/user/{id}', [AdminController::class, 'updateUser'])->name('update.user')->middleware(['auth:sanctum', 'verified', 'superAdmin']);
Route::post('/delete/user/{id}', [AdminController::class, 'deleteUser'])->name('delete.user')->middleware(['auth:sanctum', 'verified', 'superAdmin']);

Route::get('/add/teacher', [TeacherController::class, 'addTeacher'])->name('add.teacher')->middleware(['auth:sanctum', 'verified']);
Route::get('/manage/teacher', [TeacherController::class, 'manageTeacher'])->name('manage.teacher')->middleware(['auth:sanctum', 'verified']);
Route::post('/new/teacher', [TeacherController::class, 'create'])->name('new.teacher')->middleware(['auth:sanctum', 'verified']);
Route::get('/edit/teacher/{id}', [TeacherController::class, 'editTeacher'])->name('edit.teacher')->middleware(['auth:sanctum', 'verified']);
Route::post('/update/teacher/{id}', [TeacherController::class, 'updateTeacher'])->name('update.teacher')->middleware(['auth:sanctum', 'verified']);
Route::post('/delete/teacher/{id}', [TeacherController::class, 'deleteTeacher'])->name('delete.teacher')->middleware(['auth:sanctum', 'verified']);

//Route::middleware([
//    'auth:sanctum',
//    config('jetstream.auth_session'),
//    'verified'
//])->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');
//});
