<?php

namespace App\Http\Controllers;

use App\Models\Parser;
use Illuminate\Http\Request;
use simplehtmldom\HtmlWeb;
use Illuminate\Support\Facades\Http;


class ParserController extends Controller8
{
    public function ac_parsePage()
    {

        header('Access-Control-Allow-Origin: *');

        $json = file_get_contents('php://input');

        $arr = json_decode($json, true);

        $products = $arr['products'];

        $json = json_encode($products, 128);

        file_put_contents(__DIR__.'/products.json', $json);

        echo json_encode([
            'status' => 'ok',
            'back' => $arr['title'],
        ]);

        // $started_at = request('started_at') ? request('started_at') : date('Y-m-d H:i:s');

        // if (request('started_at') && request('page') == 0) {
        //     $lastParsedPage = Parser::where('started_at', $started_at)->orderBy('id', 'desc')->value('page');
        //     $page_num = $lastParsedPage + 1;
        // }elseif (request('started_at') == 0 && request('page') == 0) {
        //     $page_num = 1;
        // }else{
        //     $page_num = request('page');
        // }


        try{
            $doc = new HtmlWeb();
            // $html = $doc->load('https://www.bestsecret.com/category.htm?category=men_bekleidung&gender=MALE');
            // $html = $doc->load($products['']);



            $prods = $html->find('h3.a', 0);

            $returnTitle = '';

            foreach ($prods as $key => $prod) {
                // if (in_array($key, [0,1,2])) {
                //     continue;
                // }
                $title = $prod->find('h3 [data-hj-masked].a', 0)?->plaintext ?? '';
                if ($title) {

                    $prodModel = Parser::firstOrNew(['title' => $title]);

                    $prodModel->url = $prod->find('h3 [data-hj-masked].a', 0)?->plaintext ?? '';
                    $prodModel->sub_description = $prod->find('h6 [data-hj-masked].product-desc', 0)?->plaintext ?? '';
                    $prodModel->sale = $prod->find('h6 [data-hj-masked].t-savings', 0)?->plaintext ?? '';
                    $prodModel->old_price = $prod->find('h6 [data-hj-masked].t-value-old', 0)?->plaintext ?? '';
                    $prodModel->price = $prod->find('h4 [data-hj-masked].t-value t-highlight', 0)?->plaintext ?? '';
                    $prodModel->image_defaulr = $prod->find('.figure-image-default', 0)?->getAttribute('data-srcset') ?? '';
                    $prodModel->image_additional = $prod->find('.figure-image-additional', 0)?->getAttribute('data-srcset') ?? '';
                    // $prodModel->page = $page_num;
                    // $prodModel->started_at = $started_at;
                    $prodModel->save();
                    $returnTitle = $title;

                }

            }

            if ($returnTitle) {
                return [
                    'status' => 'ok',
                    'title' => $returnTitle,
                    // 'page' => $page_num,
                    // 'started_at' => $started_at,
                ];
            }else{
                return [
                    'status' => 'finish',
                ];
            }



        } catch (Exeption $e) {
            return response([
                'status' => 'error',
                'title' => $e->getMessage(),
            ], 400);

        }


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
