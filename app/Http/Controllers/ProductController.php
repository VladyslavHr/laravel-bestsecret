<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{ProductGallery,Product};


class ProductController extends Controller
{
    public function womenAccessories()
    {
        $women_products = Product::where('category', 'women_accessoires')->where('description', '!=', '404')->paginate(150);

        return view('products.womenAccessories', [
            'women_products' => $women_products,
        ]);
    }


    // public function menAccessories()
    // {
    //     $men_products = Product::where('category', 'men_accessoires')->where('description', '!=', '404')->where('amount', '!=', null)->paginate(150);
    //     $store_categories = Product::where('category', 'men_accessoires')->where('store_category', '!=', ' ')
    //     ->where('store_category', '!=', '#TRENDS')
    //     ->where('store_category', '!=', 'Ski & snowboard')
    //     ->where('store_category', '!=', 'Girls')
    //     ->where('store_category', '!=', 'Boys')
    //     ->distinct('store_category')->pluck('store_category');

    //     return view('products.menAccessories', [
    //         'men_products' => $men_products,
    //         'store_categories' => $store_categories,
    //     ]);
    // }

    public function show($code)
    {

        $product = Product::where('code', $code)->first();

        $images = [];
        foreach ($product->gallery as $image) {
            $images[] = str_replace('68x84', '620x757', $image->image);
        }

        // $product->price = ($product->price * 0.30) + $product->price;
        // $product->price *= 1.3;

        $product->sale = 100 - (($product->price / $product->old_price) * 100);

        $size = str_replace('Select your size,', '', $product->size);

        $sizes = explode(',', $size);

        $color = explode(',', $product->color);

        $color = explode(' ', $color[1]);

        $color_separate = array_shift($color);

        $color_string = implode(' ', $color);
        // dd($color_string);



        $codeExploded = explode('-', $code);

        $codeFirst = (int)$codeExploded[0];

        $similarProducts = Product::where('code', $codeFirst)->get();
        // dd($similarProducts);

        $color_string_similar = [];
        foreach ($similarProducts as $product) {
            $colorSimilar = explode(',', $product->color);
            // dd($similarProducts);

            $colorSimilar = explode(' ', $colorSimilar[1]);

            $color_separate_similar = array_shift($colorSimilar);

            $color_string_similar = implode(' ', $colorSimilar);

        }

        return view('products.show',[
            'product' => $product,
            'images' => $images,
            'sizes' => $sizes,
            'color_string' => $color_string,
            'similarProducts' => $similarProducts,
            'color_string_similar' => $color_string_similar,
        ]);
    }

    public function storeCategories($store_category)
    {
        $products = Product::where('store_category', $store_category)->get();

        return view('products.storeCategories',[
            'products' => $products,
        ]);
    }

    public function subCategories($sub_category)
    {
        $products = Product::where('sub_category', $sub_category)->get();



        return view('products.subCategories',[
            'products' => $products,
        ]);
    }

    public function titles($title)
    {
        $products = Product::where('title', $title)->get();

        return view('products.titles',[
            'products' => $products,
        ]);
    }


    public function sizeChart() {





        return [
            'status' => 'ok',
            'chart_size_view' => view('products.blocks.chartSizeResult')->render(),
        ];
    }
}
