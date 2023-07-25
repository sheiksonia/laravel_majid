<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\ProductController;

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
/*anonymous function route*/


Route::get('/welcome', function () {
    return view('welcome');
});






Route::get('/addproduct',[ProductController::class,'addproduct'])->name("addproduct");
Route::post('/productstore',[ProductController::class,'productstore'])->name("productstore");
Route::get('/showproduct',[ProductController::class,'showproduct'])->name("showproduct");
Route::get('/edditproduct/{id}',[ProductController::class,'edditproduct'])->name("edditproduct");
Route::post('/update/{id}',[ProductController::class,'update'])->name("update");
Route::get('/delete/{id}',[ProductController::class,'delete'])->name("delete");
Route::get('/status/{id}',[ProductController::class,'status'])->name("status");


Route::get('/', function () {
    return view('home');
});