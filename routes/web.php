<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SaleController;

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

Route::get('/',[HomeController::class,'home']);
Route::get('/category/baby-kid',[ProductsController::class,'babyKid']);
Route::get('/category/beauty-health',[ProductsController::class,'beautyHealth']);
Route::get('/category/food-beverage',[ProductsController::class,'foodBeverage']);
Route::get('/category/home-care',[ProductsController::class,'homeCare']);

Route::get('/user/{id}/name/{name}',[UserController::class,'user']);

Route::get('/sale',[SaleController::class,'sale']);