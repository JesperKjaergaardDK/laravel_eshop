<?php
namespace App\Http\Controllers;
use App\Models\ShopItem;

class ShopItemController extends Controller
{
    public function __invoke() {
        $shopItems = ShopItem::paginate(12);
        return view('eshop', compact('shopItems'));        
    }
}
