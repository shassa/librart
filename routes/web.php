<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

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
    return view('wepsit\layout');
});

Route::get('/admin',[AdminController::class,'index']);
Route::get('/admin/books',[AdminController::class,'books']);
Route::get('/admin/users',[AdminController::class,'users']);
Route::get('/admin/orders',[AdminController::class,'orders']);
Route::get('/admin/accept/{id}',[AdminController::class,'accept_order'])->name('accept');

Route::get('/admin/images/{id}',[AdminController::class,'images'])->name('images');
Route::get('/admin/addbook',[AdminController::class,'addbook'])->name('addbook');
Route::post('/admin/addbook',[BookController::class,'store'])->name('storebook');
// /////////////////////////////////////////////////////////
Route::get('/order',[OrderController::class,'index']);

Route::post('/order',[OrderController::class,'store'])->name('order');

