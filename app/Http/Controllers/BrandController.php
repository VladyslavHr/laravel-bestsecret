<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Product};

class BrandController extends Controller
{
    public function index()
    {
        $brands = Product::where('title', '!=', ' ')
        ->distinct('title')->orderBy('title', 'asc')->pluck('title')->sort(function ($brandA, $brandB) {
            $startsWithNumberA = is_numeric(mb_substr($brandA, 0, 1, 'UTF-8'));
            $startsWithNumberB = is_numeric(mb_substr($brandB, 0, 1, 'UTF-8'));

            if ($startsWithNumberA && !$startsWithNumberB) {
                return 1; // Перемещаем $brandA в конец списка
            } elseif (!$startsWithNumberA && $startsWithNumberB) {
                return -1; // Перемещаем $brandB в конец списка
            } else {
                return strcasecmp($brandA, $brandB); // Сортируем лексикографически
            }
        });

        $groupedBrands = $brands->groupBy(function ($brand) {
            // Извлекаем первую букву названия бренда и приводим к верхнему регистру
            return mb_strtoupper(mb_substr($brand, 0, 1, 'UTF-8'), 'UTF-8');
        });

        return view('brands.index',[
            'brands' => $brands,
            'groupedBrands' => $groupedBrands,
        ]);
    }

    public function show($brand)
    {
        return view('brands.show', [
            'brand' => $brand,
        ]);
    }
}
