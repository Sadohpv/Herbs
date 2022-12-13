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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('home');
})->name('home');// trả về 1 trang khác

Route::get(
    '/products',
    [
        ProductsController::class,
        'index'
    ]

)->name('products');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');// trả về 1 trang khác

Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');// trả về 1 trang khác

Route::get(
    
    '/single',
    [
        ProductsController::class,
        'single'
    ]

)->name('single');