<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

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

Route::get('/users', [UserController::class,'index']);
Route::get('/users/{id}', [UserController::class,'show']);
Route::get('/createUser', [UserController::class,'create']);
Route::get('/destroyUser/{id}', [UserController::class,'destroy']);


Route::get('/brands', [BrandController::class,'index']);
Route::get('/brands/{id}', [BrandController::class,'show']);
Route::get('/createBrand', [BrandController::class,'create']);
Route::get('/destroyBrand/{id}', [BrandController::class,'destroy']);
