<?php

namespace App\Http\Controllers;

use App\Models\ShopItem;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke(Request $request) {
        $search = $request->input('q');
        $results = ShopItem::where('product_name', 'like', "%$search%")->paginate(5);

        return view('search_items', ['results' => $results]);
    }  
}
