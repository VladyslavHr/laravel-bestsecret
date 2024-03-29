<div>
    {{-- Stop trying to control. --}}
    {{-- <ul class="nav nav-pills nav-fill">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Clothing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Shoes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Sports</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Accessories</a>
        </li>
    </ul> --}}
    <div class="row py-5">
        <div class="col-lg-3">
            <select wire:model="sortingSelectValue" class="form-select sorting-select">
                <option value="price_asc">By price ↑</option>
                <option value="price_desc">By price ↓</option>
                <option value="title_asc">By Name</option>
            </select>
        </div>
        <div class="col-lg-9 text-end">
            {{-- {{ $products->links() }} --}}
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3">

            {{-- <ul class="category-list">
                <li class="category-item">
                    <a href="#"
                        class="category-list-link @if ($choosenStoreCategory === 'all')
                            category-list-link-active
                        @endif"
                        wire:click.prevent="changeCategory('all')">
                            All accessories
                        @if ($choosenStoreCategory === 'all')
                            <i class="bi bi-check-lg"></i>
                        @endif
                    </a>
                </li>
                @foreach ($store_categories as $category)
                    <li class="category-list-element">
                        <a href="#"
                            class="category-list-link @if ($category == $choosenStoreCategory) category-list-link-active @endif"
                            wire:click.prevent="changeCategory('{{ $category }}')">
                            {{$category}}
                            @if ($category == $choosenStoreCategory)
                                <i class="bi bi-check-lg"></i>
                            @endif
                        </a>
                    </li>
                @endforeach
            </ul> --}}
        </div>
        @foreach ($products as $product)
        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 product-wrap-card pb-3">
            <a href="{{ route('products.show', ['locale' => app()->getLocale()], $product->code) }}" class="product-link">
                <img src="{{ $product->image_default }}" class="product-image-card" alt="">
                <img src="{{ $product->image_additional }}" class="product-image-card-additional" alt="">
                <h2 class="text-center pt-2">{{ $product->title }}</h2>
                <div class="text-center pt-2">
                    <span class="me-2">Item number:</span><b>{{ $product->code }}</b>
                </div>
                <div class="text-center pt-2">
                    {{ $product->sub_description }}
                </div>
                <div class="prodcut-sale-wrap text-center pt-2">
                    <span class="me-3 product-cross-price">
                        {{ number_format($product->old_price, 0, ',', ' ') }} Kč
                    </span>
                    <span class="product-sale-percent">
                        -{{ number_format(100 - (((($product->price * 0.30) + $product->price) / $product->old_price) * 100)) }} %
                    </span>
                </div>

                <div class="text-center pt-2 product-price">
                    <strong>{{ number_format(($product->price * 0.30) + $product->price, 0, ',', ' ') }} Kč</strong>
                </div>
            </a>
        </div>
        @endforeach

    </div>
    <div class="row py-5">
        <div class="col-lg-12 text-end">
            {{-- {{ $products->links() }} --}}
        </div>
    </div>
</div>

