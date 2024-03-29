<?php

namespace App\Http\Controllers;

use App\Models\{Parser,Product,ProductGallery,Size};
use Illuminate\Http\Request;
use simplehtmldom\HtmlWeb;
use Illuminate\Support\Facades\Http;


class ParserController extends Controller
{
    // public function ac_get_product_link($timeStart)
    // {
    //     // dd($request);
    //     $time = $timeStart;
    //     // $product = Product::where('description', null)->orWhere('parse_index' != $time)->first();
    //     $product = Product::where('description', null)->where('parse_index', '!=', $time)->first();


    //     if (!$product) {
    //         return response()->json('No products', 404);
    //     }

    //     $code = explode('-', $product->code)[0];

    //     $codeColor = explode('-', $product->code)[1];

    //     $url = "https://www.bestsecret.com/product.htm?code=$code&colorCode=$codeColor";

    //     return [
    //         'status' => 'ok',
    //         'url' => $url,
    //         'code' => $product->code,
    //         'product' => $product,
    //     ];
    // }

    // public function ac_get_product_link($timeStart, $buttonName)
    // {
    //     if ($buttonName == 'ac_get_info_started') {
    //         $product = Product::where(function ($query) use ($timeStart) {
    //             $query->where('description', null)->orWhere('parse_index', '<>', $timeStart);
    //         })->first();
    //     }elseif ($buttonName == 'ac_get_info_continued') {
    //         $product = Product::where('description', null)->first();
    //     }

    //     if (!$product) {
    //         return response()->json('No products', 404);
    //     }

    //     $code = explode('-', $product->code)[0];
    //     $codeColor = explode('-', $product->code)[1];
    //     $url = "https://www.bestsecret.com/product.htm?code=$code&colorCode=$codeColor";

    //     return [
    //         'status' => 'ok',
    //         'url' => $url,
    //         'code' => $product->code,
    //         'product' => $product,
    //     ];
    // }


    public function ac_get_product_link($timeStart, $buttonName)
    {
        $product = null; // Инициализация переменной

        if ($buttonName == 'ac_get_info_started') {
            $product = Product::where(function ($query) use ($timeStart) {
                $query->where('description', null)->orWhere('parse_index', '<>', $timeStart);
            })->first();
        }elseif ($buttonName == 'ac_get_info_continued') {
            $product = Product::where('description', null)->first();
        }

        if ($product) {
            $code = explode('-', $product->code)[0];
            $codeColor = explode('-', $product->code)[1];
            $url = "https://www.bestsecret.com/product.htm?code=$code&colorCode=$codeColor";

            return [
                'status' => 'ok',
                'url' => $url,
                'code' => $product->code,
                'product' => $product,
            ];
        } else {
            // Обработка случая, когда продукт не найден
            return response()->json('No products', 404);
        }
    }


    public function ac_save_product_info(Request $request)
    {
        // $time = time();
        $product = Product::where('code', $request->code)->first();
        // dump($product);
        if ($product != null) {

            $product->update([
                'size' => implode(',', $request->product['sizes']),
                'amount' => $request->product['amount'],
                'color' => $request->product['color'],
                'store_category' => $request->product['store_category'],
                'sub_category' => $request->product['sub_category'],
                // 'description' => $request->product['description'] ? $request->product['description'] : '404',
                'description' => $request->product['description'] ?: '404',
                'product_link' => $request->product['link'],
                'parse_index' => $request->product['timeStart'],
            ]);

            if ($product->description == '404') {
                Size::updateOrCreate([
                    'product_id' => $product->id,
                    'size' => null,
                    'quantity' => null,
                ]);
            }else{
                foreach ($request->product['sizes'] as $size) {

                    if (!$request->product['amount'] ) {
                        if (strstr($size, "(sold out)")) {
                            $quantity = 0;
                        }elseif (strstr($size, "(1 left)")) {
                            $quantity = 1;
                        }elseif(strstr($size, "(2 left)")){
                            $quantity = 2;
                        }else{
                            $quantity = 5;
                        }
                    }else{
                        $quantity = $request->product['amount'];
                    }

                    Size::updateOrCreate([
                        'product_id' => $product->id,
                        'size' => $size,
                        'quantity' => $quantity,
                    ]);
                };
            }

            foreach ($request->product['images'] as $image) {
                ProductGallery::updateOrCreate([
                    'product_id' => $product->id,
                    'image' => $image,
                ]);
            }

            return([
                'status' => 'ok',
                'request' => $request->all(),
                'sizes' => strlen(implode(',', $request->product['sizes'])),
                'link' => $this->ac_get_product_link($request->product['timeStart'], $request->product['buttonName']),
                'product' => $product,
                'parse_index' => $request->product['timeStart'],
            ]);
        }

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

            // $sale = abs($sale);
            $sale = is_numeric($sale) ? abs((float)$sale) : 0;

            $price_replace = [
                '.',
                'Kc',
            ];

            $price_replace_sale = [
                '.',
                'RRP Kc',
            ];

            Product::updateOrCreate([
                'code' => $url_params['code'] . '-' . $url_params['colorCode']
            ],[
                'category' => $url_params['back_param_category'] ?? null,
                'area' => $url_params['area'] ?? null,
                'title' => $product['title'],
                'sub_description' => $product['desc'],
                'image_default' => $product['image_default'],
                'image_additional' => $product['image_additional'],
                // 'old_price' => str_replace($price_replace_sale, '', $product['old_price']) ,
                // 'price' => str_replace($price_replace, '', $product['price']) ,
                // 'sale' => str_replace('%', '', $product['sale']),
                // 'sale' => $sale,

                'old_price' => is_numeric(str_replace($price_replace_sale, '', $product['old_price']))
                        ? str_replace($price_replace_sale, '', $product['old_price'])
                        : 0,
                'price' => is_numeric(str_replace($price_replace, '', $product['price']))
                        ? str_replace($price_replace, '', $product['price'])
                        : 0,
                'sale' => is_numeric(str_replace('%', '', $product['sale']))
                        ? str_replace('%', '', $product['sale'])
                        : 0,
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
