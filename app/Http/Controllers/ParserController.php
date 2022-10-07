<?php

namespace App\Http\Controllers;

use App\Models\{Parser,Product};
use Illuminate\Http\Request;
use simplehtmldom\HtmlWeb;
use Illuminate\Support\Facades\Http;


class ParserController extends Controller
{
    public function ac_parsePage()
    {

        $json = file_get_contents('php://input');

        $arr = json_decode($json, true);

        $products = $arr['products'];

        foreach ($products as $product) {
            Product::create([
                'url' => $product['url'],
                'title' => $product['title'],
                'sub_description' => $product['desc'],
                'image_default' => $product['image_default'],
                'image_additional' => $product['image_additional'],
                'old_price' => $product['old_price'],
                'price' => $product['price'],
                'sale' => $product['sale'],
            ]);
        }

        return([
            'status' => 'ok',
            'products' => $products,
        ]);


    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Parser  $parser
     * @return \Illuminate\Http\Response
     */
    public function show(Parser $parser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Parser  $parser
     * @return \Illuminate\Http\Response
     */
    public function edit(Parser $parser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Parser  $parser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Parser $parser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Parser  $parser
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parser $parser)
    {
        //
    }
}
