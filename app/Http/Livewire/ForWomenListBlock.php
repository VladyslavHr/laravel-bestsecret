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
    public $choosenCategorySlug = 'all';
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

    public function changeCategory($categorySlug)
    {
        $this->choosenCategorySlug = $categorySlug;

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
    }

    public function render()
    {
        // $products = Product::where('category', 'men_accessoires')->where('description', '!=', '404')->get();
        $store_categories = Product::where('category', 'women_accessoires')->where('store_category', '!=', ' ')
        ->where('store_category', '!=', '#TRENDS')
        ->where('store_category', '!=', 'Ski & snowboard')
        ->where('store_category', '!=', 'Girls')
        ->where('store_category', '!=', 'Boys')
        ->distinct('store_category')->pluck('store_category');
        // if (request('category')) {
        //     $this->choosenCategorySlug = request('category');
        // }

        // $this->category = Product::where($this->category, $this->choosenCategorySlug)->first();

        // $store_categories = ProductCategory::all();

        // $products = $this->category?->products() ?? Product::query();
        $products = Product::where('category', 'women_accessoires')->where('store_category', '!=', ' ');

        $products = $products->orderBy($this->sortingBy, $this->sortingDirection)->paginate(150);
        return view('livewire.for-women-list-block', [
            'products' => $products,
            'store_categories' => $store_categories,
        ]);
    }
}
