<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//for json response
//Route::get('/', [TestController::class, 'name']);

//for response redirect
Route::get('/first', [TestController::class, 'first']);
Route::get('/second', [TestController::class, 'second']);



//Route::get('/{name}', [TestController::class, 'name']);

//
//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
