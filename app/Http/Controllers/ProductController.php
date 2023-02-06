<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{ProductGallery,Product};


class ProductController extends Controller
{
    public function womenAccessories()
    {
        $women_products = Product::where('category', 'women_accessoires')->where('description', '!=', '404')->limit(50)->get();

        return view('products.womenAccessories', [
            'women_products' => $women_products,
        ]);
    }


    public function menAccessories()
    {
        $men_products = Product::where('category', 'men_accessoires')->where('description', '!=', '404')->limit(50)->get();
        $store_categories = Product::where('category', 'men_accessoires')->where('store_category', '!=', ' ')
        ->where('store_category', '!=', '#TRENDS')
        ->where('store_category', '!=', 'Ski & snowboard')
        ->where('store_category', '!=', 'Girls')
        ->where('store_category', '!=', 'Boys')




        ->distinct('store_category')->pluck('store_category');
        return view('products.menAccessories', [
            'men_products' => $men_products,
            'store_categories' => $store_categories,
        ]);
    }

    public function menAccessoriesShow($code)
    {
        # code...
    }
}
