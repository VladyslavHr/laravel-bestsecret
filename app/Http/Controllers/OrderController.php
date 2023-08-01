<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateOrderRequest;
use App\Models\Order;
use App\Services\Cart;

class OrderController extends Controller
{
    public function confirm()
    {

        // dd( Cart::getOldSum());
        return view('orders.confirm',[
            'products' => Cart::getProducts(),
            'total_sum_product_formated' => number_format(Cart::getTotalSum(), 0, ',', ' '),
            'total_price_pay_formated' => number_format(Cart::getTotalSumPay(), 0, ',', ' '),
            'savingMoney' => number_format(Cart::getSavingMoney(), 0, ',', ' '),
            'oldTotalPrice' => Cart::getOldSum(),
            'totalPrice' => Cart::getTotalSum(),
            'deliverySum' => Cart::getDeliverySum(),
            'totalPricePay' => Cart::getTotalSumPay(),
        ]);
    }


    public function createOrder(CreateOrderRequest $request)
    {
        return redirect()->route('orders.thanks');
    }

    public function pay()
    {

    }





    public function thanks()
    {
        return view('orders.thanks');
    }
}
