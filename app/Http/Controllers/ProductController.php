<?php

namespace App\Http\Controllers;

use App\Models\ShopItem;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function __invoke($id)
    {
        $product = ShopItem::findOrFail($id);

        return view('product', compact('product'));
    }
}
