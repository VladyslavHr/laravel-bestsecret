<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Product};

class BrandController extends Controller
{
    public function index()
    {
        $brands = Product::where('title', '!=', ' ')
        ->distinct('title')->orderBy('title', 'asc')->pluck('title');



        // dd($brands);
        return view('brands.index',[
            'brands' => $brands,
        ]);
    }

    public function show($brand)
    {
        $brand = Product::where('title', $brand)->get();

        // dd($brand);
        return view('brands.show', [
            'brand' => $brand,
        ]);
    }
}
