<div>


    <div class="row">

        <form action="" class="col-lg-9">
            @csrf

            @foreach ($products as $product)
            <div class="row py-3 align-items-center">
                <div class="col-lg-2">
                    <img style="width: 100%" src="{{ $product->image_default }}" alt="">
                </div>
                <div class="col-lg-3">
                    <div class="pt-3">
                        {{ $product->sale }}

                    </div>
                    <div class="pt-3">
                        <h4>
                            {{$product->title}}

                        </h4>

                    </div>
                    <div class="pt-3">
                        {{$product->sub_category}}

                    </div>
                </div>
                <div class="col-lg-2">
                    {{$product->size}}
                </div>
                <div class="col-lg-3">
                    <button class="me-3">-</button>
                    <span>
                        @if ($product->amount == null)
                            1
                        @else
                            {{ $product->amount }}
                        @endif
                    </span>
                    <button class="ms-3">+</button>
                </div>
                <div class="col-lg-2">
                    <div class="pt-3">
                        {{$product->old_price}} KČ

                    </div>
                    <div class="pt-3">
                        {{$product->price}} KČ

                    </div>
                </div>
            </div>

            @endforeach



        </form>

        <div class="col-lg-3">
            <div class="order-summary-wrap">
                <h5>Order summery</h5>
                <span class="text-danger">
                    You're saving Kc 34.120
                </span>

            </div>

            <div class="order-summary-bottom">
                <div class="total">
                    <span>
                        Total price
                    </span>
                    <span>
                        452 145 KČ
                    </span>
                </div>
                <div class="order-link">
                    <a href="#" >
                        Continue
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>
