<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{ProductController};


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
    return view('home');
});


// Route::get('/parsers/agriculture', [\App\Http\Controllers\ArticleController::class, 'agriculture'])->name('parsers.agriculture');

Route::get('/women-accessories', [\App\Http\Controllers\ProductController::class, 'womenAccessories'])->name('products.womenAccessories');
Route::get('/men-accessories', [\App\Http\Controllers\ProductController::class, 'menAccessories'])->name('products.menAccessories');
