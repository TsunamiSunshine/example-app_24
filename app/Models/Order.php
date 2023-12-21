<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cart;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'billing_email',
        'billing_name',
        'billing_address',
        'billing_city',
        'billing_province',
        'billing_postalcode',
        'billing_phone',
        'billing_name_on_card',
        'billing_discount',
        'billing_discount_code',
        'billing_subtotal',
        'billing_tax',
        'billing_total',
        'payment_gateway',
        'error',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('quantity');
    }

    function getNumbers()
{
    $tax = config('cart.tax') / 100;
    $discount = session()->get('coupon')['discount'] ?? 0;
    $discount_code = session()->get('coupon')['name'] ?? null;
    $newSubtotal = (Cart::subtotal() - $discount);
    if ($newSubtotal < 0) {
        $newSubtotal = 0;
    }
    $newTax = $newSubtotal * $tax;
    $newTotal = $newSubtotal * (1 + $tax);

    return collect([
        'tax' => $tax,
        'discount' => $discount,
        'code' => $discount_code,
        'newSubtotal' => $newSubtotal,
        'newTax' => $newTax,
        'newTotal' => $newTotal,
    ]);
}
}
