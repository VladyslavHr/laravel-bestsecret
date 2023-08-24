<?php

namespace App\Services;

use Illuminate\Support\ServiceProvider;
use App\Models\{Product,Size};


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
        // debug($cart);
        $products = collect();

        foreach ($cart as $productId => $sizes) {
            // debug($productId);
            // debug($sizes);
            $product = Product::find($productId);
            // dd($product);
            foreach ($sizes as $size => $count) {
                // debug($sizes);
                $productSize = Size::where('id', $size)->first();
                // debug($size);
                // debug($productSize);
                // debug($count);
                $productCopy = clone $product;

                $productCopy->old_sum = $product->old_price * $count;

                $productCopy->sum = $product->marged_price  * $count;
                $productCopy->new_sale = $product->new_sale;
                $productCopy->new_price = $product->new_price;

                // (+ $product->price)
                $productCopy->sum_formated = number_format($product->marged_price * $count, 2);
                $productCopy->cart_amount = $count;
                $productCopy->size = $productSize->size;
                $productCopy->sizeId = $productSize->id;
                $productCopy->color = $product->color; // Используем одинаковый цвет для каждого ID продукта

                $products->push($productCopy);
            }
        }

        self::$products = $products;
        // debug($products);

        return $products;

    }

    public static function getTotalSum()
    {
        if (!self::$products) {
            self::getProducts();
        }

        $total = 0;

        foreach (self::$products as $product) {
            if ($product->new_sale < 5) {
                $total += $product->new_price;
            }else{
                $total += $product->sum;
            }

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

        // dump(self::$products);
        foreach (self::$products as $product) {
            // $total += $product->sum;
            // $old_total += $product->old_sum;
            // dump($product);
            if ($product->new_sale < 5) {
                $product->saving = 0;
            }else{
                // $product->saving = self::getOldSum() - self::getTotalSum();
                // $saving = self::getOldSum() - self::getTotalSum();
                // dump($product->old_price, $product->marged_price, $product->cart_amount);
                $product->saving = ($product->old_price - $product->marged_price) * $product->cart_amount;
                // dd($product->saving);

            }
        }


        foreach (self::$products as $product) {
            $saving += $product->saving;
        }


        // dd(self::$products, $saving);
        return $saving;
    }

    public static function getOldSum()
    {
        if (!self::$products) {
            self::getProducts();
        }

        $old_total = 0;

        foreach (self::$products as $product) {
            if ($product->new_sale < 5) {
                $old_total += $product->new_price;
            }else{
                $old_total += $product->old_sum;
            }
        }

        return $old_total;
    }


    public static function getDeliverySum()
    {
        $deliverySum = 0;
        $min = 1500;
        $total = self::getTotalSum();

        if ($total <= $min) {
            $deliverySum = 129;
        }else{
            $deliverySum = 0;
        }

        return $deliverySum;
    }

    public static function getTotalSumPay()
    {
        $total = self::getTotalSum();
        $deliverySum = self::getDeliverySum();

        $totalPay = $total + $deliverySum;

        return $totalPay;
    }

    public static function addProduct($productId, $amount = 1, $size = null)
    {
        $cart = session('cart', []);

        $productSize = Size::where('id', $size)->first();
        // Bug ? Fitch ? $cart[$productId][$size] >= $productSize->quantity

        // $currentCount = Cart::getProductSizeCount($productId, $productSize->id);
        // debug($currentCount);

        // $expectedCount = $currentCount + $action;
        // debug($expectedCount);

        if (isset($cart[$productId][$size])) {
            if ($productSize->quantity >= $cart[$productId][$size] + $amount) {
                debug('if2');
                $cart[$productId][$size] += $amount;
            }
            debug('if');
        } else {
            debug('else');
            $cart[$productId][$size] = $amount;
        }

        // if (isset($cart[$productId][$size])) {
        //     if (isset($cart[$productId][$size])) {
        //         $cart[$productId][$size] += $amount;
        //     } else {
        //         $cart[$productId][$size] = $amount;
        //     }
        // } else {
        //     $cart[$productId][$size] = $amount;
        // }

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

    public static function removeProduct($productId, $sizeId)
    {
        $cart = session('cart', []);

        if (isset($cart[$productId])) {
            if ($sizeId && isset($cart[$productId][$sizeId])) {
                unset($cart[$productId][$sizeId]);
                if (empty($cart[$productId])) {
                    unset($cart[$productId]);
                }
            }
        }

        session(['cart' => $cart]);

        return $cart;
    }


    public static function getProductSum($productId)
    {
        $cart_arr = session('cart', []);

        $price = Product::findOrFail($productId)->price;
        // $price = Product::findOrFail($productId)->marged_price;

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
