<?php

namespace App\Http\Controllers;

use App\Models\{Parser,Product,ProductGallery};
use Illuminate\Http\Request;
use simplehtmldom\HtmlWeb;
use Illuminate\Support\Facades\Http;


class ParserController extends Controller
{
    public function ac_get_product_link()
    {
        $product = Product::where('description', null)->first();

        $code = explode('-', $product->code)[0];

        $url = "https://www.bestsecret.com/product.htm?code=$code";

        return [
            'status' => 'ok',
            'url' => $url,
            'code' => $product->code,
            'product' => $product,
        ];
    }

    public function ac_save_product_gallery()
    {
        $json = file_get_contents('php://input');

        $arr = json_decode($json, true);

        $images = $arr['images'];

        foreach ($images as $image) {
            ProductGallery::updateOrCreate([
                'product_id' => $image['product_id'],
                'image' => $image['image'],
            ]);
        }

        return([
            'status' => 'ok',
            'images' => $images,
        ]);
    }

    public function ac_save_product_info(Request $request)
    {
        Product::where('code', $request->code)->update([
            'size' => implode(',', $request->product['sizes']),
            'amount' => $request->product['amount'],
            'color' => $request->product['color'],
            'description' => $request->product['description'] ? $request->product['description'] : '404',
        ]);

        return([
            'status' => 'ok',
            'request' => $request->all(),
            'sizes' => strlen(implode(',', $request->product['sizes'])),
            'link' => $this->ac_get_product_link(),
        ]);

    }

    public function ac_parsePage()
    {

        $json = file_get_contents('php://input');

        $arr = json_decode($json, true);

        $products = $arr['products'];

        // $code = preg_replace('//', '', $product['code']);


        $counter = [];
        foreach ($products as $product) {

            $parsed_url = parse_url($product['url']);


            $url_query = $parsed_url['query'];

            parse_str($url_query, $url_params);

            if(empty($url_params['code'])){
                continue;
            }

            $sale = preg_replace('/\D/', '', $product['sale']);

            $sale = abs($sale);


            Product::updateOrCreate([
                'code' => $url_params['code'] . '-' . $url_params['colorCode']],[
                'category' => $url_params['back_param_category'] ?? null,
                'area' => $url_params['area'] ?? null,
                'title' => $product['title'],
                'sub_description' => $product['desc'],
                'image_default' => $product['image_default'],
                'image_additional' => $product['image_additional'],
                'old_price' => str_replace('RRP Kc', '', $product['old_price']) ,
                'price' => str_replace('Kc', '', $product['price']) ,
                'sale' => str_replace('%', '', $product['sale']),
                'sale' => $sale,
            ]);


            // @$counter[$output['code']] += 1;

        }


        return([
            'status' => 'ok',
            'products' => $products,
            // 'counter' => $counter,
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
