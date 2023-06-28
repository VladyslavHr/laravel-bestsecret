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
        $total = 0;

        if (isset($cart[$productId])) {
            foreach ($cart[$productId] as $product) {
            $total += $product;
            }
        }

        return $total;

    }

    public static function getProductSizeCount($productId, $productSize)
    {
        $cart = session('cart', []);

        return $cart[$productId][$productSize];
    }

    public static function getProducts()
    {

        $cart = session('cart', []);
        $products = collect();

        foreach ($cart as $productId => $sizes) {
            $product = Product::find($productId);

            foreach ($sizes as $size => $count) {
                $productCopy = clone $product;
                $productCopy->old_sum = $product->old_price * $count;

                $productCopy->sum = ($product->marged_price + $product->price) * $count;
                $productCopy->sum_formated = number_format($product->price * $count, 2);
                $productCopy->cart_amount = $count;
                $productCopy->size = $size;
                $productCopy->color = $product->color; // Используем одинаковый цвет для каждого ID продукта

                $products->push($productCopy);
            }
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

    public static function getSavingMoney()
    {
        if (!self::$products) {
            self::getProducts();
        }

        // $total = 0;
        // $old_total = 0;
        $saving = 0;

        foreach (self::$products as $product) {
            // $total += $product->sum;
            // $old_total += $product->old_sum;
            $saving = self::getOldSum() - self::getTotalSum();
        }

        return $saving;
    }

    public static function getOldSum()
    {
        if (!self::$products) {
            self::getProducts();
        }

        $old_total = 0;

        foreach (self::$products as $product) {
            $old_total += $product->old_sum;
        }

        return $old_total;
    }


    public static function getDeliverySum()
    {
        $deliverySum = 0;
        $min = 1000;
        $total = self::getTotalSum();

        if ($total <= $min) {
            $deliverySum = 109;
        }else{
            $deliverySum = 0;
        }

        return $deliverySum;
    }

    public static function addProduct($productId, $amount = 1, $size = null)
    {









        $cart = session('cart', []);

        if (isset($cart[$productId][$size])) {
            if (isset($cart[$productId][$size])) {
                $cart[$productId][$size] += $amount;
            } else {
                $cart[$productId][$size] = $amount;
            }
        } else {
            $cart[$productId][$size] = $amount;
        }

        session(['cart' => $cart]);

        return $cart;
    }

    public static function updateProduct($productId, $amount)
    {
        $cart = session('cart', []);

		$cart[$productId]['amount'] = $amount;

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

        return $cart_arr[$productId]['amount'] * $price;
    }


    public static function clear()
    {
        session()->forget('cart');
    }

    public static function getTotalCount()
    {




        $cart = session('cart', []);
        $total = 0;

        foreach ($cart as $cartItem) {
            foreach ($cartItem as $item) {

                $total += $item;

            }
        }

        return $total;
    }


    public static function  isEmpty($ifTrue = 1, $ifFalse = '') {

        return !session('cart', []) ? $ifTrue : $ifFalse;
    }








}
