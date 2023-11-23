<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width">
    <meta name="color-scheme" content="light">
    <meta name="supported-color-schemes" content="light">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Objednávka</title>
</head>
<style>
      body {
        font-family: DejaVu Sans, sans-serif;
        background: #fff;
    }
    .padding{
        padding: 5px;
    }
    .padding-l{
        padding: 15px;
    }
    .white{
        color: #fff;
    }
    .center{
        text-align: center;
    }
    .bold{
        font-weight: bold
    }
    .divider{
        border: 1px solid #000000;
        /* padding-top: 5px; */
        /* padding-bottom: 5px; */
        margin: 10px 0;
    }
    .me{
        margin-right: 10px
    }

    .tab-center{
        margin-left: auto;
        margin-right: auto;
    }
    .tab-padding{
        padding: 15px;
        text-align: center;
    }

    .wrap{
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .col-5{
        width: 5%;
    }
    .col-15{
        width: 15%;
    }
    .col-10{
        width: 10%;
    }
    .img-margin{
        margin-right: 20px;
    }
</style>
<body>
    <header style="background: #1c1c1c; padding-bottom: 15px; padding-top: 15px; margin-bottom: 15px">
        <div class="center white ">
            <a class="white" href="#">Best Secreat</a>
        </div>
        <div class="center padding-l">
            {{-- <img src="{{ $logo }}" alt="Orlická lodní doprava" width="100px"> --}}
            {{-- <img src="{{ config('app.url') }}/logo/logo.png" alt="Orlická lodní doprava" width="100px"> --}}
        </div>
        <h2 class="center white">Thank you for your order!</h2>

    </header>

    <main style="padding: 10px 0;">
        <div class="center padding">Customer: <span class="bold">{{$order->name}} </span> <span class="bold">{{ $order->last_name }}</span></div>
        <div class="center padding">Order number: <span class="bold">{{ $order->numeric_series }}</span></div>

        <table class="table tab-center">
            <tr>
                <th class="tab-padding">#</th>
                <th class="tab-padding">Product number</th>
                <th class="tab-padding">Title</th>
                <th class="tab-padding">Size</th>
                <th class="tab-padding">Price</th>
                <th class="tab-padding">Amount</th>
                <th class="tab-padding">Total price</th>
                <th class="tab-padding">Info</th>
            </tr>
            @foreach ($order->items as $item)
            <tr >

                <td class="tab-padding">
                    <img
                    width="200" height="auto" style="max-width: 100%; height: auto;"
                    {{-- style="max-width: 100%" --}}
                    src="{{ $item->product->image_default }}" alt="">
                </td>
                <td class="tab-padding">{{ $item->product_code }}</td>
                <td class="tab-padding">{{ $item->product_title }}</td>
                <td class="tab-padding">{{ $item->size->size }}</td>
                <td class="tab-padding">{{ number_format($item->product_marged_price, 0, ',', ' ') }}</td>
                <td class="tab-padding">{{ $item->product_count }}</td>
                <td class="tab-padding">{{ number_format($item->product_new_sum, 0, ',', ' ') }}</td>
                <td class="tab-padding">{{ $item->product->color }}</td>
            </tr>
            @endforeach
        </table>

        <div class="divider"></div>

        <div class="padding-l">
            <div class="center padding">
                <span>Number of items:</span>
                <span><b>{{ $order->product_quantity }}</b></span>
            </div>
            <div class="center padding">
                <span>Total price:</span>
                <span><b>{{ number_format($order->total_price, 0, ',', ' ') }} CZK</b></span>
            </div>
        </div>

    </main>

    <footer style="background: #1c1c1c; padding-top: 25px; padding-bottom 25px; margin-top:15px;" >
        <div class="center white">
            <a class="white" href="#">Best Secreat</a>
        </div>
        <div class="center padding-l">
            {{-- <img src="{{ $logo }}" alt="Orlická lodní doprava" width="100px"> --}}
        </div>
        <div class="center white padding">
            Wishing you a touch of elegance with our curated selection of accessories! Your team Best Secreat.
        </div>
    </footer>

</body>
