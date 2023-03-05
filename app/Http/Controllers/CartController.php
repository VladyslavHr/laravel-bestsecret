<?php

namespace App\Http\Controllers;

use App\Models\{Product};
use App\Http\Requests\{CartStoreRequest};
use Illuminate\Http\Request;
use App\Http\Services\Cart;

class CartController extends Controller
{
    public function index(Request $request, Product $product)
    {

        return view('carts.index', [
            // 'products' => Cart::getProducts(),
            // 'total_sum_product' => Cart::getTotalSum(),
            // 'total_sum_product_formated' => number_format(Cart::getTotalSum(), 2),
        ]);
    }
}
