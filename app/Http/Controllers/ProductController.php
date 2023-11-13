<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{ProductGallery,Product,ChartSizeGender,ChartSizeCategory,ChartSizeDefenition,ChartSizeGuide,ChartSize,Size};


class ProductController extends Controller
{
    public function womenAccessories()
    {
        $women_products = Product::where('category', 'women_accessoires')->where('description', '!=', '404')->paginate(150);

        return view('products.womenAccessories', [
            'women_products' => $women_products,
        ]);
    }


    // public function menAccessories()
    // {
    //     $men_products = Product::where('category', 'men_accessoires')->where('description', '!=', '404')->where('amount', '!=', null)->paginate(150);
    //     $store_categories = Product::where('category', 'men_accessoires')->where('store_category', '!=', ' ')
    //     ->where('store_category', '!=', '#TRENDS')
    //     ->where('store_category', '!=', 'Ski & snowboard')
    //     ->where('store_category', '!=', 'Girls')
    //     ->where('store_category', '!=', 'Boys')
    //     ->distinct('store_category')->pluck('store_category');

    //     return view('products.menAccessories', [
    //         'men_products' => $men_products,
    //         'store_categories' => $store_categories,
    //     ]);
    // }

    public function show($code)
    {
        // dump($code);
        $product = Product::where('code', $code)->first();
        // dd($product->store_category);


        $images = [];
        foreach ($product->gallery as $image) {
            $images[] = str_replace('68x84', '620x757', $image->image);
        }

        // dd($product->image_default);
        // $product->price = ($product->price * 0.30) + $product->price;
        // $product->price *= 1.3;

        // $product->sale = 100 - (($product->price / $product->old_price) * 100); ?????

        $size = str_replace('Select your size,', '', $product->size);
        $sizes = explode(',', $size);
        $color = explode(',', $product->color);
        $color = explode(' ', $color[1]);
        $color_separate = array_shift($color);
        $color_string = implode(' ', $color);

        // SIZES!
        // $productSizes = $product->sizes;
        $productSizes = Size::where('product_id', $product->id)->where('size', '!=', 'Select your size')->get();

        $exCode = explode('-', $product->code);
        $otherColors = Product::whereRaw("SUBSTRING_INDEX(`code`, '-', 1) = ?", [$exCode[0]])->get();

        foreach ($otherColors as $item) {
            $expColor = explode(',', $item->color);
            $item->category_name = $expColor[0];
            $item->color_name = $expColor[1];
        }

        return view('products.show',[
            'product' => $product,
            'images' => $images,
            'sizes' => $sizes,
            'color_string' => $color_string,
            'productSizes' => $productSizes,
            'otherColors' => $otherColors,
        ]);
    }

    public function storeCategories($store_category)
    {
        $products = Product::where('store_category', $store_category)
        ->whereHas('sizes', function ($query) {
            $query->where('quantity', '>', 0);
        })
        // ->whereIn('id', function ($query) {
        //     $query->select('product_id')
        //         ->from('sizes')
        //         ->where('quantity', '>', 0);
        // })
        ->get();

        return view('products.storeCategories',[
            'products' => $products,
        ]);
    }

    public function subCategories($sub_category)
    {
        $products = Product::where('sub_category', $sub_category)
        ->whereHas('sizes', function ($query) {
            $query->where('quantity', '>', 0);
        })
        // ->whereIn('id', function ($query) {
        //     $query->select('product_id')
        //         ->from('sizes')
        //         ->where('quantity', '>', 0);
        // })
        ->get();



        return view('products.subCategories',[
            'products' => $products,
        ]);
    }

    public function titles($title)
    {
        dump($title);
        $products = Product::where('title', $title)
        ->whereHas('sizes', function ($query) {
            $query->where('quantity', '>', 0);
        })
        // ->whereIn('id', function ($query) {
        //     $query->select('product_id')
        //         ->from('sizes')
        //         ->where('quantity', '>', 0);
        // })
        ->get();

        return view('products.titles',[
            'products' => $products,
            'title' => $title,
        ]);
    }


    public function sizeChart(Request $request, $productCode)
    {
        $gender = $request->gender;
        $category = $request->category;

        $product = Product::where('code', $productCode)->first();

        $chartSizegender = ChartSizeGender::where('title', $gender)->first();
        $chartSizeCategory = ChartSizeCategory::where('title', $category)->where('chart_size_gender_id', $chartSizegender->id)->first();

        $chartSizeDefenitions = ChartSizeDefenition::where('chart_size_gender_id', $chartSizegender->id)
        ->where('chart_size_category_id', $chartSizeCategory->id)
        ->get();

        $chartSizeDefenitionsIds = [];
        foreach ($chartSizeDefenitions as $chartSizeDefenition) {
            $chartSizeDefenitionsIds[] = $chartSizeDefenition->id;
        }

        $chartSizeGuides = ChartSizeGuide::where('chart_size_gender_id', $chartSizegender->id)
        ->where('chart_size_category_id', $chartSizeCategory->id)
        ->get();

        $chartSizeGuidesIds = [];
        foreach ($chartSizeGuides as $chartSizeGuide) {
            $chartSizeGuidesIds[] = $chartSizeGuide->id;
        }

        // debug();
        $chartSizes = ChartSize::where('chart_size_category_id', $chartSizeCategory->id)
        ->where('chart_size_gender_id', $chartSizegender->id)
        ->whereIn('chart_size_guide_id', $chartSizeGuidesIds)
        ->whereIn('chart_size_defenition_id', $chartSizeDefenitionsIds)
        ->get();


        debug($chartSizeCategory->id,$chartSizegender->id,$chartSizeGuidesIds,$chartSizeDefenitionsIds,$chartSizes);

        // $neededSizes = array_filter($chartSizes->toArray(), function ($size) {
        //     return $size['needed'] == true;
        // });

        return [
            'status' => 'ok',
            'chart_size_view' => view('products.blocks.chartSizeResult', [
                'defenitions' => $chartSizeDefenitions,
                'guides' => $chartSizeGuides,
                'chartSizes' => $chartSizes,
            ])->render(),
        ];
    }
}
