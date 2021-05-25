<?php

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

Route::get('/', [App\Http\Controllers\TopController::class, 'top']);

Route::get('/product/list', [App\Http\Controllers\ProductController::class, 'list']);
Route::get('/product/{id}', [App\Http\Controllers\ProductController::class, 'product']);

Route::get('/cart', [App\Http\Controllers\CartController::class, 'cart']);
Route::post('/cart/add', [App\Http\Controllers\CartController::class, 'add']);
Route::get('/cart/remove/{id}', [App\Http\Controllers\CartController::class, 'remove']);
Route::post('/cart/change', [App\Http\Controllers\CartController::class, 'change']);

Route::get('/history', [App\Http\Controllers\UserController::class, 'history']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
