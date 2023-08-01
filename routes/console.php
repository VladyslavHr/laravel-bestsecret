<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use App\Models\Product;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');


Artisan::command('parse', function() {

    $parsed_url = parse_url('https://www.bestsecret.com/product.htm?listName=Men%2fAccessories%2fBelts&position=1&code=31672611&colorCode=10&area=MEN_ACCESSORIES&gender=MALE&back_url=%2fcategory.htm&originProdLink=&back_param_category=men_accessoires_guertel&back_param_gender=MALE&back_param_area=MEN_ACCESSORIES&back_param_sort_by=topseller&back_param_back_url=%2fcategory_menu.htm');

    $url_query = $parsed_url['query'];

    parse_str($url_query, $output);

    print_r($output);
});



Artisan::command('myTest', function() {

    $time = strtotime(now());

    // dd($time, time(), now());

    echo now();

});


Artisan::command('product', function() {
    $products = Product::limit(10)->get();

    foreach ($products as $product) {
        dump($product->size);
        // foreach ($product->size as $size) {
        //     dump($size);
        // }
    }

    dd('End');
});
