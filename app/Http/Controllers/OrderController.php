<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateOrderRequest;
use App\Models\{Order,OrderItem};
use App\Services\Cart;

class OrderController extends Controller
{
    public function confirm()
    {
        // $products = Cart::getProducts();
        // dd($products);
        return view('orders.confirm',[
            'products' => Cart::getProducts(),
            'total_sum_product_formated' => number_format(Cart::getTotalSum(), 0, ',', ' '),
            'total_price_pay_formated' => number_format(Cart::getTotalSumPay(), 0, ',', ' '),
            // 'savingMoney' => number_format(Cart::getSavingMoney(), 0, ',', ' '),
            'savingMoney' => Cart::getSavingMoney(),
            'oldTotalPrice' => Cart::getOldSum(),
            'totalPrice' => Cart::getTotalSum(),
            'deliverySum' => Cart::getDeliverySum(),
            'totalPricePay' => Cart::getTotalSumPay(),
        ]);
    }


    public function createOrder(CreateOrderRequest $request)
    {
        $products = Cart::getProducts();
        $order = Order::create([
            'firm' => $request->firm,
            'identification_num' => $request->identification_num,
            'name' => $request->name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'street' => $request->street,
            'add_address' => $request->add_address,
            'post_code' => $request->post_code,
            'city' => $request->city,
            'firm_bill' => $request->firm_bill,
            'identification_num_bill' => $request->identification_num_bill,
            'name_bill' => $request->name_bill,
            'last_name_bill' => $request->last_name_bill,
            'email_bill' => $request->email_bill,
            'phone_bill' => $request->phone_bill,
            'street_bill' => $request->street_bill,
            'add_address_bill' => $request->add_address_bill,
            'post_code_bill' => $request->post_code_bill,
            'city_bill' => $request->city_bill,
            'product_quantity' => Cart::getTotalCount(),
            'delivery_status' => Order::STATUS_PREPARING,
            'total_price' => Cart::getTotalSum($request),
            'payment_status' => Order::STATUS_PENDING,
        ]);

        foreach ($products as $key => $product) {
            // $price_one = $product->new_sum / $product->cart_amoun;
            // $old_price_one = $product->old_sum / $product->cart_amount;
            // dd($product->new_sum, $product->cart_amoun);
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $product->id,
                'product_code' => $product->code,
                'product_title' => $product->title,
                'product_sizeId' => $product->sizeId,
                'product_link' => $product->product_link,
                'product_sum' => $product->old_sum,
                'product_new_sale' => $product->new_sale,
                'product_new_sum' => $product->sum,
                'product_count' => $product->cart_amount,
                'product_old_price' => $product->old_price,
                'product_sale' => $product->sale,
                'product_price' => $product->price,
            ]);
        }

        // $last = Order::orderBy('numeric_series', 'desc')->pluck('numeric_series')->first();
        // if ($last == null) {
        //     $order->numeric_series = 230001;
        // }else{
        //     $order->numeric_series = $last + 1;
        // }

        return $order;
        // return redirect()->route('orders.thanks');
    }

    public function pay(CreateOrderRequest  $request)
    {
        $order = $this->createOrder($request);
        return  redirect()->route('orders.thanks');
    }

    public function thanks()
    {
        return view('orders.thanks');
    }
}
