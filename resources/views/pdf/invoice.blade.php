<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<style>
  /* body {
        font-family: DejaVu Sans, sans-serif;
        background: #ddecff;
        width: 100%;
    }

  main {
        margin-bottom: 2px;
        }
        .white{
            color: #fff;
        }

        .clearfix {
            clear: both;
        } */

        @page {
            font-family: DejaVu Sans, sans-serif;
            font-size: 12px;
            letter-spacing: -1px;
            margin: 0;
        }

        .pay-day{
            background: #1c1c1c;
            color: white
        }

        .table-item-cenetr{
            text-align: center
        }

        .mright{
            margin-right: 10px
        }

        .size{
            font-size: 12px
        }

        .line {
            line-height: 0.4
        }

        header > div {
            font-size: 20px;
            font-style: bold;
            vertical-align: middle;
            /* width: 50%; */
            display: inline-block;
        }

        article {
            padding: 5px 54px;
        }

        h1 {
            text-align: center;
        }

        h3 {
            color: #f08115;
        }

        .col-2 {
            float: left;
            width: 50%;
        }

        .col-3 {
            float: left;
            width: 33.33333%;
        }

        .clearfix {
            clear: both;
        }

        main {
            background: #f9f9ff;
            padding: 16px 54px;
            margin-bottom: 2px;
            font-size: 14px;
        }

        .start-title {
            background: #1c1c1c;
            padding: 10px 12px;
            margin-bottom: 2px;
            font-size: 12px;
            color: white;
        }

        main .sum {
            background: #f9f9ff;
            padding: 16px 54px;
            margin-bottom: 2px;
            font-size: 14px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table .main {
            vertical-align: middle;
            color: #fff;
            background: #1c1c1c;
            padding: 10px 0;
        }

        table.table-stripped tr:nth-child(2n) {
            background: #f9f9ff;
        }

        table.table-stripped td {
            padding: 6px 12px;
        }

        .border-line{
            border: 1px solid;
        }

        .table-border{
            border: 1px solid;
        }

        .start{
            text-align: left;
        }
</style>
<title>Lodní doprava Orlík - jízdenka</title>
</head>
<body>
    <header class="row" style="background: #1c1c1c; height: 10%; padding: 20px 54px 20px 54px;">
        <div style="padding-top: 24px; display:inline">
            {{-- <img src="{{ $logo }}" alt="TopObytneVozy.cz" width="140"> --}}
        </div>
        <div style="display:inline-block; padding: 0px 0px 0px 50px;">
            <span style="display: block; font-size: 14px; color: white; font-weight:bold;">
                <span class="mright" style="font-size: 14px; color:white; ">
                    Zjednodušený daňový doklad:
                </span>
            </span>
            <span style="display: block; font-size: 14px; color: white; font-weight:bold;">
                <span class="mright" style="font-size: 14px; color:white; ">
                    Evidenční číslo pro Kontrolní hlášení:
                </span>
            </span>
            <span style="display: block; font-size: 14px; color: white; font-weight:bold;">
                <span class="mright" style="font-size: 14px; color:white; ">
                    Objednávka:
                </span>
            </span>
        </div>
        <div style="display:inline-block; text-align: justify; padding: 0px 0px 0px 5px;">
            <span style="text-align: end;  font-size: 14px; color: white; font-weight:bold;">
            <span style="text-align: end; ">
                {{ $order->numeric_series }}
            </span>
            </span>

            <span style="display: block; font-size: 14px; color: white; font-weight:bold;">
            <span>
                {{ $order->numeric_series }}
            </span>
            </span>

            <span style="display: block; font-size: 14px; color: white; font-weight:bold;">
            <span>
                {{ $order->numeric_series }}
            </span>
            </span>
        </div>
    </header>
    <div class="clearfix"></div>
    <main>
        <div class="row">
            <div style="margin-left: 5px;float: left; width: 65%; text-align:left;">
                <div class="d-block">Poskytovatel</div>
                <div class="d-block"><strong>GVAR & partners s.r.o.</strong></div>
                <div class="d-block">Světova 523/1</div>
                <div class="d-block">Praha 8, 182 00</div>
                <div class="d-block">IČO: <strong>03608255</strong></div>
                <div class="d-block">E-mail.: bestsecreatgvarpartners@gmail.com</div>
            </div>
            <div style="text-align: left;float: left; width: 35%;">
                <div class="d-block">Odběratel</div>
                @if(!empty($order->firm_bill))
                    <div class="d-block"><strong>{{ $order->firm_bill }}</strong></div>
                @elseif (!empty($order->firm))
                    <div class="d-block"><strong>{{ $order->firm }}</strong></div>
                @endif
                @if(!empty($order->identification_num_bill))
                    <div class="d-block"><strong>{{ $order->identification_num_bill }}</strong></div>
                @elseif (!empty($order->identification_num))
                    <div class="d-block"><strong>{{ $order->identification_num }}</strong></div>
                @endif
                @if(!empty($order->name_bill) && !empty($order->last_name_bill))
                    <div class="d-block">{{ $order->name_bill }} {{ $order->last_name_bill }}</div>
                @elseif (!empty($order->name) && !empty($order->last_name))
                    <div class="d-block">{{ $order->name }} {{ $order->last_name }}</div>
                @endif
                @if(!empty($order->street_bill))
                    <div class="d-block">{{ $order->street_bill }}</div>
                @elseif (!empty($order->street))
                    <div class="d-block">{{ $order->street }}</div>
                @endif
                @if(!empty($order->city_bill))
                    <div class="d-block">{{ $order->city_bill }}, {{ $order->post_code_bill }}</div>
                @elseif (!empty($order->city))
                    <div class="d-block">{{ $order->city }}, {{ $order->post_code }}</div>
                @endif
                @if(!empty($order->phone_bill))
                    <div class="d-block">{{ $order->phone_bill }}</div>
                @elseif (!empty($order->phone))
                    <div class="d-block">{{ $order->phone }}</div>
                @endif
                @if(!empty($order->email_bill))
                    <div class="d-block">E-mail.: {{ $order->email_bill }}</div>
                @elseif (!empty($order->email))
                    <div class="d-block">E-mail.: {{ $order->email }}</div>
                @endif
            </div>
                {{-- <img src="http://api.paylibo.com/paylibo/generator/czech/image?accountNumber=410517002&bankCode=5500&amount={{ $price }}&currency=CZK&vs={{ $reservation->id }}&message=Pronajem&branding=false" alt="QR kód" width="66%"> --}}
        </div>
        <div class="clearfix"></div>
    </main>

    <main>
        <div class="row">
            <div class="col-2" style="width: 65%">
                <div class="d-block">
                    <table>
                        <tr>
                            <td>Způsob platby</td>
                            <td style="color:red;">UHRAZENO - NEHRADIT</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-2" style="float: right; width: 35%;" >
                <table>
                    <tr>
                        <td>Datum vystavení:</td>
                        <td> {{ $order->created_at->format('d.m.Y') }}</td>
                    </tr>
                    <tr>
                        <td>Datum splatnosti:</td>
                        <td class="pay-day">{{ $order->created_at->format('d.m.Y') }}</td>
                    </tr>
                    <tr>
                        <td>Datum zdan. plnění:</td>
                        <td>{{ $order->created_at->format('d.m.Y') }}</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="clearfix"></div>
    </main>

    <article>
        <table class="table-stripped line">
            <thead>
                <tr>
                    <th class="start-title size start">Podrobnosti objednavky:</th>
                    <th class="main size"></th>
                    <th class="main size"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="table-item-cenetr start">Zboží</td>
                    <td class="table-item-cenetr"></td>
                    <td class="table-item-cenetr"></td>
                </tr>
            </tbody>
        </table>
    </article>

    <article>
        <table class="table-stripped line">
                <tr>
                    <th class="main size">Označení dodávky:</th>
                    <th class="main size">Počet m.j.:</th>
                    <th class="main size">Cena za m.j.:</th>
                    <th class="main size">Sazba:</th>
                    <th class="main size">DPH:</th>
                    <th class="main size">Celkem:</th>
                </tr>
                @foreach ($order->items as $item)
                    <tr>
                        <td class="table-item-cenetr">{{$item->product_title}}</td>
                        <td class="table-item-cenetr">{{$item->product_count}}</td>
                        <td class="table-item-cenetr">{{ number_format($item->perOne, 2, ',', ' ')}} </td>
                        <td class="table-item-cenetr">21%</td>
                        <td class="table-item-cenetr">{{number_format($item->dph, 2, ',', ' ')}}</td>
                        <td class="table-item-cenetr">{{number_format($item->product_marged_price, 2, ',', ' ')}}</td>
                    </tr>

                @endforeach
        </table>
    </article>

    <main style="padding: 5px 54px;" class="row">
        <div style="padding-top: 50px; margin-top: 35px;">
            <table class="table-stripped line table-border" style="width: 65%;padding-right: 15px; float: left;">
            <tr>
                <th class="main size">#</th>
                <th class="main size">Sazba:</th>
                <th class="main size">Základ:</th>
                <th class="main size">DPH:</th>
                <th class="main size">Celkem:</th>
            </tr>
            <tr>
                <td></td>
                <td class="table-item-cenetr">21%</td>
                {{-- <td class="table-item-cenetr">{{ number_format($productPerOne, 2, ',', ' ')}} </td>
                <td class="table-item-cenetr">{{number_format($productDph, 2, ',', ' ')}}</td>
                <td class="table-item-cenetr">{{number_format($totalPriceProduct, 2, ',', ' ')}}</td> --}}
                <td class="table-item-cenetr">{{number_format(($totalPreDph), 2, ',', ' ')}}</td>
                <td class="table-item-cenetr">{{number_format(($totalDph) , 2, ',', ' ')}}</td>
                <td class="table-item-cenetr">{{number_format(($order->total_price) , 2, ',', ' ')}}</td>
            </tr>

            <tr class="border-line" >
                <td class="table-item-cenetr"></td>
                <td class="table-item-cenetr"></td>
                <td class="table-item-cenetr">{{number_format(($totalPreDph), 2, ',', ' ')}}</td>
                <td class="table-item-cenetr">{{number_format(($totalDph) , 2, ',', ' ')}}</td>
                <td class="table-item-cenetr">{{number_format(($order->total_price) , 2, ',', ' ')}}</td>
            </tr>

            </table>

            <div style="float: left; width: 35%">
                <div class="d-block">
                </div>
                <div class="d-block" style="background: #1c1c1c; color: white">
                    <strong>Celkem k úhradě : </strong>{{ number_format($order->total_price, 0, '.', ' ') }} Kč
                </div>
                <div class="d-block" >
                    <strong>Doplaceno : </strong>{{ number_format($order->total_price, 0, '.', ' ') }} Kč
                </div>
                <div class="d-block">
                    <strong>Zbyvá uhradit : </strong>{{ number_format(0 , 0, '.', ' ') }}
                </div>
            </div>
        </div>
    </main>
</body>
</html>

