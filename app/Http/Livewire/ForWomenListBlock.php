<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\{Product};
use Livewire\WithPagination;

class ForWomenListBlock extends Component
{
    use WithPagination;
    public $paginationTheme = 'bootstrap';

    public $category;
    public $categories;
    public $choosenStoreCategory = 'all';
    public $choosenSubCategory = null;
    public $sortingSelectValue = null;
    public $sortingBy = 'title';
    public $sortingDirection = 'asc';
    public $queryParams = [];

    public function updatedSortingSelectValue()
    {
        $this->sortingBy = explode('_', $this->sortingSelectValue)[0];
        $this->sortingDirection = explode('_', $this->sortingSelectValue)[1] ?? 'asc';
        $this->setQueryParams(['sortingBy' => $this->sortingBy, 'sortingDirection' => $this->sortingDirection]);

    }

    public function changeCategory($storeCategory)
    {
        $this->choosenSubCategory = null;

        $this->choosenStoreCategory = $storeCategory;

        $this->setQueryParams(['store_category' => $storeCategory]);

    }

    public function changeSubCategory($subCategory)
    {
        $this->choosenSubCategory = $subCategory;

        $this->setQueryParams(['sub_category' => $subCategory]);

        debug($subCategory);
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

        if ($store_category = request('store_category')) {
            $this->choosenStoreCategory = $store_category;
        }

        if ($sub_category = request('sub_category')) {
            $this->choosenSubCategory = $sub_category;
        }

    }

    public function render()
    {
        $categories = Product::select('store_category', 'sub_category')
        ->where('category', 'women_accessoires')
        ->where('store_category', '!=', ' ')
        // ->where('store_category', '!=', '#TRENDS')
        // ->where('store_category', '!=', 'Ski & snowboard')
        // ->where('store_category', '!=', 'Girls')
        ->where('description', '!=', '404')
        ->where('store_category', '!=', 'Boys')
        ->groupBy('sub_category','store_category')->get();

        $categoriesSorted = [];

        foreach ($categories as $product) {

            $categoriesSorted[$product->store_category][] = $product->sub_category;

        }
        // dd($categoriesSorted);

        $products = Product::where('category', 'women_accessoires')->where('store_category', '!=', ' ');

        if ($this->choosenStoreCategory !== 'all') {
            $products->where('store_category', $this->choosenStoreCategory);
        }

        if ($this->choosenSubCategory) {
            $products->where('sub_category', $this->choosenSubCategory);
        }

        debug($this->choosenStoreCategory);

        $products = $products->orderBy($this->sortingBy, $this->sortingDirection)->paginate(150);
        return view('livewire.for-women-list-block', [
            'products' => $products,
            // 'store_categories' => $store_categories,
            'categoriesSorted' => $categoriesSorted,
        ]);
    }
}
