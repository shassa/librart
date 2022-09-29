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
    return view('wepsit.login');
})->name('/');
Route::post('/signin',[AdminController::class,'login'])->name('Signin');
Route::group(['middleware' => 'admin'], function () {

Route::get('/admin',[AdminController::class,'index']);
Route::get('/admin/books',[AdminController::class,'books'])->name('books');
Route::get('/admin/users',[AdminController::class,'users'])->name('user');
Route::get('/admin/tags',[AdminController::class,'tags'])->name('tags');

Route::get('/admin/orders',[AdminController::class,'orders'])->name('orders');
Route::get('/admin/accept/{id}',[AdminController::class,'accept_order'])->name('accept');
Route::get('/admin/refuse/{id}',[AdminController::class,'refuse_order'])->name('refuse');

Route::get('/admin/images/{id}',[AdminController::class,'images'])->name('images');
Route::get('/admin/addbook',[AdminController::class,'addbook'])->name('addbook');
Route::post('/admin/addbook',[BookController::class,'store'])->name('storebook');

});
// /////////////////////////////////////////////////////////
Route::get('/order',[OrderController::class,'index']);
Route::get('/orders',[OrderController::class,'user_orders']);

Route::get('/home',[BookController::class,'index'])->name('home');

Route::post('/order',[OrderController::class,'store'])->name('order');

