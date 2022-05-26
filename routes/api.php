<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebsiteController;

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

Route::get('/posts',[PostController::class,'index']);
Route::prefix('/post')->group(function() {
    Route::post('/store',[PostController::class,'store']);
    Route::put('/{id}',[PostController::class,'update']);
    Route::delete('/{id}',[PostController::class,'destroy']);
});

Route::get('/users',[UserController::class,'index']);
Route::get('/websites',[WebsiteController::class,'index']);


Route::post('/user/subscribe',[UserController::class,'subscribe']);