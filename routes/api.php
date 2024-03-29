<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::any('/savePage', [\App\Http\Controllers\ParserController::class, 'ac_parsePage']);
// Route::any('/getProductLink/{timeStart}', [\App\Http\Controllers\ParserController::class, 'ac_get_product_link']);
Route::get('/getProductLink/{timeStart}/{buttonName}', [\App\Http\Controllers\ParserController::class, 'ac_get_product_link']);

Route::any('/saveProductInfo', [\App\Http\Controllers\ParserController::class, 'ac_save_product_info']);

