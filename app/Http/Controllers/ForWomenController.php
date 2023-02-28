<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{ProductGallery,Product};

class ForWomenController extends Controller
{
    public function index() {
        $products = Product::get();
        return view('forWomen.index',[
            'products' => $products,
        ]);
    }

    public function showWomen($code) {

        $product = Product::where('code', $code)->first();

        $size = explode(',', $product->size);
        // dd($product);
        return view('forWomen.show',[
            'product' => $product,
            'size' => $size,
        ]);
    }
}
