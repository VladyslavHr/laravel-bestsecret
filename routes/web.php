<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
// require __DIR__.'/auth.php';


// Home
Route::get('/', [\App\Http\Controllers\HomeControllerMy::class, 'index'])->name('home.index');

Route::get('/for-men', [\App\Http\Controllers\ForMenController::class, 'index'])->name('forMen.index');
Route::get('/for-women', [\App\Http\Controllers\ForWomenController::class, 'index'])->name('forWomen.index');
Route::get('/product/{code}', [\App\Http\Controllers\ProductController::class, 'show'])->name('products.show');
Route::get('/store-categies/{store_category}', [\App\Http\Controllers\ProductController::class, 'storeCategories'])->name('products.storeCategories');
Route::get('/sub-categories/{sub_category}', [\App\Http\Controllers\ProductController::class, 'subCategories'])->name('products.subCategories');
Route::get('/titles/{title}', [\App\Http\Controllers\ProductController::class, 'titles'])->name('products.titles');

// Brands
Route::get('/designers', [\App\Http\Controllers\BrandController::class, 'index'])->name('brands.index');
Route::get('/designers/{brand}', [\App\Http\Controllers\BrandController::class, 'show'])->name('brands.show');

// Size
Route::post('sizeChart/{product}', [App\Http\Controllers\ProductController::class, 'sizeChart']);

// Orders
Route::get('/order-confrim', [App\Http\Controllers\OrderController::class, 'confirm'])->name('orders.confirm');
Route::get('/thanks', [App\Http\Controllers\OrderController::class, 'thanks'])->name('orders.thanks');


Route::post('/order-create', [App\Http\Controllers\OrderController::class, 'pay'])->name('orders.create');



Route::get('cart', [\App\Http\Controllers\CartController::class, 'index'])->name('carts.index');


Auth::routes();


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['auth']], function() {


});

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function() {
    // Ваши админские маршруты
        // Dashboard
    // Route::get('/', [AdminDashboardController::class, 'index'])->name('admin.dashboard.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
