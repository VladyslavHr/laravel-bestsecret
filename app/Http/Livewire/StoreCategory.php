<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\{Product};
use Livewire\WithPagination;


class StoreCategory extends Component
{

    use WithPagination;
    public $paginationTheme = 'bootstrap';
    // public $products;
    public $category;
    // public $categories;
    public $choosenStoreCategory = 'all';
    public $sortingSelectValue = null;
    public $sortingBy = 'title';
    public $sortingDirection = 'asc';
    public $queryParams = [];
    // public $url_back = '';
    public $products;

    public function updatedSortingSelectValue()
    {
        $this->sortingBy = explode('_', $this->sortingSelectValue)[0];
        $this->sortingDirection = explode('_', $this->sortingSelectValue)[1] ?? 'asc';
        $this->setQueryParams(['sortingBy' => $this->sortingBy, 'sortingDirection' => $this->sortingDirection]);

    }

    public function changeCategory($categorySlug)
    {
        $this->choosenStoreCategory = $categorySlug;

        $this->setQueryParams(['category' => $categorySlug]);

    }

    public function setQueryParams($params = [])
    {
        $this->queryParams = array_merge($this->queryParams, $params);

        $queryString = '?' . http_build_query($this->queryParams);

        $this->emit('urlChange', $queryString);

        $this->resetPage();

    }

    public function mount()
    {
        $this->queryParams = $_GET;
        $this->sortingBy = request('sortingBy') ?? 'title';
        $this->sortingDirection = request('sortingDirection') ?? 'asc';
        $this->sortingSelectValue = $this->sortingBy . '_' . $this->sortingDirection;
        // debug($this->products);
    }

    public function render()
    {
        // $store_categories = Product::where('category', 'men_accessoires')->where('store_category', '!=', ' ')
        // ->where('store_category', '!=', 'Girls')
        // ->distinct('store_category')->pluck('store_category');

        // $products = Product::where('store_category', $store_category)->where('store_category', '!=', ' ');

        // if ($store_category = request('store_category')) {
        //     $this->choosenStoreCategory = $store_category;
        // }

        // if ($this->choosenStoreCategory !== 'all') {
        //     $products->where('store_category', $this->choosenStoreCategory);
        // }

        // debug($this->choosenStoreCategory);

        // $produtcs = $this->products;

        // debug($products);
        // $this->products->orderBy($this->sortingBy, $this->sortingDirection)->paginate(150);

        return view('livewire.store-category',[
            // 'products' => $products,
            // 'store_categories' => $store_categories,
        ]);
    }
}
