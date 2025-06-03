<?php
namespace App\Http\Controllers;
use App\Models\ShopItem;

class ShopItemController extends Controller
{
    public function __invoke() {
        $shopItems = ShopItem::all();
        return view('eshop', compact('shopItems'));        
    }
}
