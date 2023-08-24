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

// Route::get('/', function () {
//     return view('home');
// });

// Home
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
// Route::get('/parsers/agriculture', [\App\Http\Controllers\ArticleController::class, 'agriculture'])->name('parsers.agriculture');

//
// Route::get('/women-accessories', [\App\Http\Controllers\ProductController::class, 'womenAccessories'])->name('products.womenAccessories');
// Route::get('/men-accessories', [\App\Http\Controllers\ProductController::class, 'menAccessories'])->name('products.menAccessories');
// Route::get('/men-accessories/{code}', [\App\Http\Controllers\ProductController::class, 'show'])->name('products.show');


Route::get('/for-men', [\App\Http\Controllers\ForMenController::class, 'index'])->name('forMen.index');
// Route::get('/for-men/{code}', [\App\Http\Controllers\ForMenController::class, 'showMen'])->name('forMen.show');
Route::get('/for-women', [\App\Http\Controllers\ForWomenController::class, 'index'])->name('forWomen.index');
Route::get('/product/{code}', [\App\Http\Controllers\ProductController::class, 'show'])->name('products.show');
Route::get('/store-categies/{store_category}', [\App\Http\Controllers\ProductController::class, 'storeCategories'])->name('products.storeCategories');
Route::get('/sub-categories/{sub_category}', [\App\Http\Controllers\ProductController::class, 'subCategories'])->name('products.subCategories');
Route::get('/titles/{title}', [\App\Http\Controllers\ProductController::class, 'titles'])->name('products.titles');

// Brands
Route::get('/designers', [\App\Http\Controllers\BrandController::class, 'index'])->name('brands.index');
Route::get('/designers/{brand}', [\App\Http\Controllers\BrandController::class, 'show'])->name('brands.show');

// Route::post('sizeChart', [App\Http\Controllers\ProductController::class, 'sizeChart']);
Route::post('sizeChart/{product}', [App\Http\Controllers\ProductController::class, 'sizeChart']);

// Orders
Route::get('/order-confrim', [App\Http\Controllers\OrderController::class, 'confirm'])->name('orders.confirm');
Route::get('/thanks', [App\Http\Controllers\OrderController::class, 'thanks'])->name('orders.thanks');


Route::post('/order-create', [App\Http\Controllers\OrderController::class, 'pay'])->name('orders.create');



Route::get('cart', [\App\Http\Controllers\CartController::class, 'index'])->name('carts.index');
