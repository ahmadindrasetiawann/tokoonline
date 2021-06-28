<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Controllers\HomeController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/produk', function () {
    return view('produk');
})->name('produk');
Route::middleware(['auth:sanctum', 'verified'])->get('keranjang', function () {
    return view('keranjang');
})->name('keranjang');
Route::middleware(['auth:sanctum', 'verified'])->get('cart', function () {
    return view('cart');
})->name('cart');


Route::get('redirects','App\Http\Controllers\HomeController@index');