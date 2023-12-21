<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{
    public function index()
    {
        return view('cart');
    }

    public function store(Request $request)
    {
        $duplicates = Cart::search(function ($cartItem, $rowId) use ($request) {
            return $cartItem->id === $request->id;
        });

        if ($duplicates->isNotEmpty()) {
            return redirect()->route('cart.index')->with('success_message', 'Item is already in your cart!');
        }

        Cart::add($request->id, $request->name, 1, $request->price, $request->image)
            ->associate('App\Product');

        return redirect()->route('cart.index')->with('success_message', 'Item was added to your cart!');
    }

    public function update(Request $request, $id)
    {
        Cart::update($id, $request->quantity);

        return redirect()->route('cart.index')->with('success_message', 'Quantity was updated successfully!');
    }

    public function destroy($id)
    {
        Cart::remove($id);

        return back()->with('success_message', 'Item has been removed!');
    }

    public function switchToSaveForLater($id)
    {
        $item = Cart::get($id);

        Cart::remove($id);

        Cart::instance('saveForLater')->add($item->id, $item->name, 1, $item->price, $item->image)
            ->associate('App\Model\Product');

        return redirect()->route('cart.index')->with('success_message', 'Item has been saved for later!');
    }
}

