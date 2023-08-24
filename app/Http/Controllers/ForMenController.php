<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{ProductGallery,Product};

class ForMenController extends Controller
{
    public function index(Request $request) {
        // $products = Product::where('category', 'men_accessoires')->where('description', '!=', '404')->get();
        // $products = Product::where('category', 'men_accessoires')
        // ->where('description', '!=', '404')
        // ->where(function ($query) {
        //     $query->whereHas('sizes', function ($subQuery) {
        //         $subQuery->where('quantity', '>', 0);
        //     });
        // })
        // ->get();
    //     $products = Product::where('category', 'men_accessoires')
    // ->where('description', '!=', '404')
    // ->whereDoesntHave('sizes', function ($subQuery) {
    //     $subQuery->where('quantity', 0);
    // })
    // ->get();

    $products = Product::where('category', 'men_accessoires')
    ->where('description', '!=', '404')
    ->whereHas('sizes', function ($query) {
        $query->where('quantity', '>', 0);
    })->get();




        // $previous_url = $request->session()->put('_previous', url()->full());

        // debug($previous_url);

        return view('forMen.index',[
            'products' => $products,
        ]);
    }

    public function showMen(Request $request, $code) {

        $product = Product::where('code', $code)->first();

        $code_short = explode('-', $code);

        // dd($code_short);
        $code = explode('-', $code);
        // dd($code);

        $same_products = Product::where('code', $code_short[0])->get();

        // dd($same_products);

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

        // $previous_url = $request->session()->put('_previous', url()->previous());

        // $url_back = url()->previous();
        session(['returnUrl' => url()->previous()]);
        // debug($url_back);
        // debug($previous_url);

        return view('forMen.show',[
            'product' => $product,
            'images' => $images,
            'size' => $size,
            'color_string' => $color_string,
            'same_products' => $same_products,
            // 'url_back' => $url_back,
        ]);
    }
}
