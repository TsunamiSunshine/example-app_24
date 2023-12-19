<?php
namespace App\Http\Controllers;

use App\Models\Order;
use App\Order as AppOrder;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('checkout');
    }

    public function store(Request $request)
    {
        $order = new Order;

        $order->user_id = auth()->user()->id;
        $order->billing_email = $request->email;
        $order->billing_name = $request->name;
        $order->billing_address = $request->address;
        $order->billing_city = $request->city;
        $order->billing_province = $request->province;
        $order->billing_postalcode = $request->postalcode;
        $order->billing_phone = $request->phone;
        $order->billing_name_on_card = $request->name_on_card;
        $order->billing_discount = getNumbers()->get('discount');
        $order->billing_discount_code = getNumbers()->get('code');
        $order->billing_subtotal = getNumbers()->get('newSubtotal');
        $order->billing_tax = getNumbers()->get('newTax');
        $order->billing_total = getNumbers()->get('newTotal');

        $order->save();

        foreach (Cart::content() as $item) {
            $order->products()->attach($item->id, ['quantity' => $item->qty]);
        }

        Cart::instance('default')->destroy();

        return redirect()->route('confirmation.index')->with('success_message', 'Thank you! Your payment has been successfully accepted!');
    }
}
