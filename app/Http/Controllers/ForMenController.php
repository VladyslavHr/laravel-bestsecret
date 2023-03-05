<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{ProductGallery,Product};

class ForMenController extends Controller
{
    public function index() {
        $products = Product::get();
        return view('forMen.index',[
            'products' => $products,
        ]);
    }

    public function showMen($code) {

        $product = Product::where('code', $code)->get();

        $size = explode(',', $product->size);

        return view('forMen.show',[
            'product' => $product,
        ]);
    }
}
