<?php
namespace App\Http\Controllers;
use App\Models\ShopItem;

class ShopItemController extends Controller
{
    public function __invoke() {
        $shopItems = ShopItem::paginate(10);

        return view('eshop', compact('shopItems'));        
    }
}
