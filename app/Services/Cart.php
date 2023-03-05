<?php

namespace App\Services;
use Illuminate\Support\ServiceProvider;
use App\Models\Product;


class Cart extends ServiceProvider
{

    private static $products = [];

    public static function getProductCount($productId)
    {
        $cart = session('cart', []);

        return $cart[$productId] ?? null;
    }

    public static function getProducts()
    {
        $cart = session('cart', []);
        $products = Product::whereIn('id', array_keys($cart))
        ->get(['id', 'name', 'price', 'old_price', 'amount', 'slug']);

        foreach ($products as $product) {
            $product->sum = $product->price * $cart[$product->id];
            $product->sum_formated = number_format($product->price * $cart[$product->id], 2);
            $product->cart_amount = $cart[$product->id];
        }

        self::$products = $products;

        return $products;
    }

    public static function getTotalSum()
    {
        if (!self::$products) {
            self::getProducts();
        }

        $total = 0;

        foreach (self::$products as $product) {
            $total += $product->sum;
        }

        return $total;
    }

    public static function addProduct($productId, $amount = 1)
    {
        $cart = session('cart', []);
        if ($cart) {
			if (isset($cart[$productId])) {
				$cart[$productId] += $amount;
			}else{
				$cart[$productId] = $amount;
			}
		}else{
			$cart = [$productId => $amount];
		}
        session(['cart' => $cart]);
        return $cart;
    }

    public static function updateProduct($productId, $amount)
    {
        $cart = session('cart', []);

		$cart[$productId] = $amount;

        session(['cart' => $cart]);

        return $cart;
    }

    public static function removeProduct($productId)
    {
        $cart_arr = session('cart', []);

        unset($cart_arr[$productId]);

        session(['cart' => $cart_arr]);

        return $cart_arr;

    }

    public static function getproductSum($productId)
    {
        $cart_arr = session('cart', []);

        $price = Product::findOrFail($productId)->price;

        return $cart_arr[$productId] * $price;
    }

    public static function clear()
    {
        session()->forget('cart');
    }

    public static function getTotalCount()
    {
        $cart = session('cart', []);

        $total = 0;

        foreach ($cart as $count) {
            $total += $count;
        }

        return $total;
    }


    public static function  isEmpty($ifTrue = 1, $ifFalse = '') {

        return !session('cart', []) ? $ifTrue : $ifFalse;
    }

}
