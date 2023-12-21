<?php

namespace App\Http\Controllers;


use App\Models\Discount;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    public function index()
    {
        $discounts = Discount::all();

        return view('admin.discount', compact('discounts'));
    }

    public function create()
    {
        return view('admin.creatediscount');
    }

    public function store(Request $request)
    {
        $discount = Discount::create($request->all());

        return redirect()->route('admin.discount');
    }

    public function edit(Discount $discount)
    {
        return view('admin.editdiscount', compact('discount'));
    }

    public function update(Request $request, Discount $discount)
    {
        $discount->update($request->all());

        return redirect()->route('admin.discounts');
    }

    public function destroy(Discount $discount)
    {
        $discount->delete();

        return redirect()->route('admin.discounts');
    }
}

