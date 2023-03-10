<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contacts.index');
    }

    public function returnProduct()
    {
        return view('contacts.');
    }
}
