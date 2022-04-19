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

Route::get('/productsResults',[ProductsController::class,'productsResults'])->middleware('auth');
Route::get('/productsAdmin',[ProductsController::class,'productsAdmin'])->middleware('auth');
Route::get('/productsSetPrice',[ProductsController::class,'productsSetPrice'])->middleware('auth');
Route::get('/productsSetDescription',[ProductsController::class,'productsSetDescription'])->middleware('auth');
Route::get('/productsSetPicture',[ProductsController::class,'productsSetPicture'])->middleware('auth');

Route::get('/products',[ProductsController::class,'products'])->middleware('auth');
Route::post('/find',[ProductsController::class,'find'])->name('find')->middleware('auth');
Route::get('/product/{id}',[ProductsController::class,'product'])->name('product')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
