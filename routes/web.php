<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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


Route::post('/setLocale', function (Request $request) {
    $locale = $request->input('locale');
    $url = $request->input('url');

    if (! in_array($locale, ['en', 'cz'])) {
        abort(400);
    }

    session(['locale' => $locale]);

    // Извлечение и замена сегмента локали в URL
    $segments = explode('/', parse_url($url, PHP_URL_PATH));
    if (in_array($segments[1], ['en', 'cz'])) {
        $segments[1] = $locale; // Замена локали
    } else {
        array_splice($segments, 1, 0, $locale); // Добавление локали, если её нет
    }
    $urlWithLocale = request()->getSchemeAndHttpHost() . implode('/', $segments);

    return redirect()->to($urlWithLocale);
})->name('setLocale');

Route::get('/', function () {
    // Получение локали из сессии или использование языка по умолчанию
    $locale = session('locale', config('app.locale'));
    return  redirect()->to($locale);
});
// Home
Auth::routes();

Route::group(['prefix' => '{locale}', 'where' => ['locale' => '[a-zA-Z]{2}']], function () {
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
    Route::post('/order-create', [App\Http\Controllers\OrderController::class, 'pay'])->name('orders.create');
    Route::get('/thanks/{order}', [App\Http\Controllers\OrderController::class, 'thanks'])->name('orders.thanks');

    // Cart
    Route::get('cart', [\App\Http\Controllers\CartController::class, 'index'])->name('carts.index');

    // Contact
    Route::get('contact', [\App\Http\Controllers\ContactController::class, 'index'])->name('contacts.index');

});



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['auth']], function() {

    Route::get('profile/{user}', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::get('profile/contact-info/{user}', [\App\Http\Controllers\ProfileController::class, 'info'])->name('profile.info');
    Route::get('profile/orders/{user}', [\App\Http\Controllers\ProfileController::class, 'orders'])->name('profile.orders');
    Route::get('profile/return/{user}', [\App\Http\Controllers\ProfileController::class, 'return'])->name('profile.return');
    Route::get('profile/password/{user}', [\App\Http\Controllers\ProfileController::class, 'password'])->name('profile.password');

    Route::get('profile/orders/{user}/{order}', [\App\Http\Controllers\ProfileController::class, 'orderShow'])->name('profile.orderShow');

    Route::put('profile/contact-info/{user}/update', [\App\Http\Controllers\ProfileController::class, 'infoUpdate'])->name('profile.infoUpdate');

    Route::put('profile/password/{user}/update', [\App\Http\Controllers\ProfileController::class, 'passwordUpdate'])->name('profile.passwordUpdate');


});

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function() {
    // Ваши админские маршруты
        // Dashboard
    Route::get('/', [AdminDashboardController::class, 'index'])->name('admin.dashboard.index');
});

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
