<?php

namespace App\Http\Controllers;

use App\Models\ShopItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $cart = $request->session()->get('cart', []);
        //$shopping_cart = [];

        foreach ($cart as $product) {
            $product_id = $product['id'];
            $shopItem = ShopItem::findOrFail($product_id);

            if ($shopItem) {
                $shopping_cart[] = [
                    'product' => $shopItem,
                    'quantity' => $product['quantity'],
                ];
            } else {
                dd('errror has been made');
            }
        }

        return view('shopping_cart', compact('shopping_cart'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product_id = $request->query('product');

        if (!ShopItem::findOrFail($product_id)) {
            return back()->withErrors([
                'error' => 'The product dosent exist.',
            ]);
        }

        $cart = $request->session()->get('cart', []);

        if (isset($cart[$product_id])) {
            $cart[$product_id]['quantity']++;
        } else {
            $cart[$product_id] = [
                'id' => $product_id,
                'quantity' => 1,
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product_id = $request->query('product');

        if (!ShopItem::findOrFail($product_id)) {
            return back()->withErrors([
                'error' => 'The product dosent exist.',
            ]);
        }
        
        $cart = $request->session()->get('cart', []);

        if (true) {
            $cart[$product_id]['quantity']++;
        } else {
            $cart[$product_id]['quantity']++;
        }

        if ($cart[$product_id]['quantity'] <= 0) {
            return redirect('destroy');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ShopItem::deleted($id);
        
    }
   
}
