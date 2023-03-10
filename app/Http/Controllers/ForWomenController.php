<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{ProductGallery,Product};

class ForWomenController extends Controller
{
    public function index() {
        $products = Product::where('category', 'women_accessoires')->get();

        return view('forWomen.index',[
            'products' => $products,
        ]);
    }

    public function showWomen($code) {

        $product = Product::where('code', $code)->first();

        $images = [];
        foreach ($product->gallery as $image) {
            $images[] = str_replace('68x84', '620x757', $image->image);
        }

        $product->price = ($product->price * 0.30) + $product->price;

        $product->sale = 100 - (($product->price / $product->old_price) * 100);

        $size = explode(',', $product->size);

        $color = explode(',', $product->color);

        $color = explode(' ', $color[1]);

        $color_separate = array_shift($color);

        $color_string = implode(' ', $color);
        // dd($color_string);

        return view('forWomen.show',[
            'product' => $product,
            'images' => $images,
            'size' => $size,
            'color_string' => $color_string,
        ]);
    }
}
