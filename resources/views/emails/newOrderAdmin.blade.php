<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width">
    <meta name="color-scheme" content="light">
    <meta name="supported-color-schemes" content="light">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Objednávka Administrace</title>
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
</style>
<body>
    <header style="background: #222b33; padding-bottom: 15px; padding-top: 15px; margin-bottom: 15px">
        <div class="center white ">
            <a class="white" href="https://www.orlickalodni.cz/">OrlickaLodni.cz</a>
        </div>
        <div class="center padding-l">
            {{-- <img src="{{ $logo }}" alt="OrlickaLodni.cz" width="100px"> --}}
            <img src="{{ config('app.url') }}/logo/logo.png" alt="OrlickaLodni.cz" width="100px">
        </div>
        <h2 class="center white">Objednávka Administrace</h2>

    </header>

    <main style="padding: 10px 0;">
        <div class="center padding">Zákazník: <span class="bold">{{$order->name}} </span> <span class="bold">{{ $order->last_name }}</span></div>
        <div class="center padding">Čislo objednávky: <span class="bold">O {{ $order->numeric_series }}</span></div>

        <div class="divider"></div>

        <div class="padding-l">
            <div class="center padding">
                <span>Celkový počet:</span>
                <span><b>{{ count($order->items) }}</b></span>
            </div>
            <div class="center padding">
                <span>Celkové:</span>
                <span><b>{{ $order->total_price }} ₴</b></span>
            </div>
        </div>



    </main>

    <footer style="background: #222b33; padding-top: 25px; padding-bottom 25px; margin-top:15px;" >
        <div class="center white">
            <a class="white" href="https://www.orlickalodni.cz/">OrlickaLodni.cz</a>
        </div>
        <div class="center padding-l">
            {{-- <img src="{{ $logo }}" alt="OrlickaLodni.cz" width="100px"> --}}
        </div>
        <div class="center white padding">
            Бажаємо вам всього найкращого! Ваша команда OrlickaLodni.cz.
        </div>
    </footer>

</body>

