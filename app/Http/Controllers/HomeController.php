<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Product};

class HomeController extends Controller
{
    public function index() {

        $brands = Product::where('title', '!=', ' ')
            ->distinct('title')->pluck('title');

        return view('home.index', [
            'brands' => $brands,
        ]);
    }
}
