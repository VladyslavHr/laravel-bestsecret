<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Product,User};

class HomeControllerMy extends Controller
{
    public function index() {

        // dd(auth()->user()->admin);
        // $users = User::get();
        // foreach ($users as $user) {
        //     dump($user->isAdmin());
        // }
        // dd($users);
        $brands = Product::where('title', '!=', ' ')
            ->distinct('title')->pluck('title');

        return view('home.index', [
            'brands' => $brands,
        ]);
    }
}
