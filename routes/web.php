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
  if(Auth::user()!=null){
    return view('home');
  }else{
    return view('auth.login');
  }
});
Route::get('/addProducts',[ProductsController::class,'addProducts'])->middleware('auth');

Route::get('/addObjectives',[ProductsController::class,'addObjectives'])->middleware('auth');


Route::get('/productsResults',[ProductsController::class,'productsResults'])->middleware('auth');

Route::get('/productsApprove',[ProductsController::class,'productsApprove'])->middleware('auth');
Route::get('/productsSetFinalPrice',[ProductsController::class,'productsSetFinalPrice'])->middleware('auth');

Route::get('/productsSetPrice',[ProductsController::class,'productsSetPrice'])->middleware('auth');
Route::get('/productsSetDescription',[ProductsController::class,'productsSetDescription'])->middleware('auth');
Route::get('/productsSetPicture',[ProductsController::class,'productsSetPicture'])->middleware('auth');

Route::get('/arwi',[ProductsController::class,'products'])->middleware('auth');

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
  ]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
