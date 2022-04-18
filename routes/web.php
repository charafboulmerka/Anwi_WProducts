<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController; 

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

Route::get('/productsAdmin',[ProductsController::class,'productsAdmin']);
Route::get('/products',[ProductsController::class,'products']);
Route::post('/find',[ProductsController::class,'find'])->name('find');
Route::get('/product/{id}',[ProductsController::class,'product'])->name('product');
