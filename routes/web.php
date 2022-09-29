<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookController;
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
    return view('admin\layout');
});

Route::get('/admin',[AdminController::class,'index']);
Route::get('/admin/books',[AdminController::class,'books']);
Route::get('/admin/images/{id}',[AdminController::class,'images'])->name('images');
Route::get('/admin/addbook',[AdminController::class,'addbook'])->name('addbook');
Route::post('/admin/addbook',[BookController::class,'store'])->name('storebook');

