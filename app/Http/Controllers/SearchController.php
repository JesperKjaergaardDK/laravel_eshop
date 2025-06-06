<?php

namespace App\Http\Controllers;

use App\Models\ShopItem;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke(Request $request) {
        $search = $request->query('q');
        $min = $request->query('min_price');
        $max = $request->query('max_price');

        $query = ShopItem::query();

        if ($search) {
            $query->where('product_name', 'like', "%{$search}%");
        }

        if ($min !== null && $max !== null) {
            $query->whereBetween('price', [$min, $max]);
        }

        $results = $query->paginate(5)->appends($request->query());

        return view('search_items', [
            'results' => $results,
            'search' => $search,
            'min_price' => $min,
            'max_price' => $max,
        ]);
    }
}
