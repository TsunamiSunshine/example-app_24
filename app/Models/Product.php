<?php

namespace App\Models;

use App\Models\Order as ModelsOrder;
use App\Order;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'name',
        'image',
        'product_id',
        'description',
        'price'
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'categories_products', 'categories_id','products_id');
    }
    public function orders()
    {
        return $this->belongsToMany(ModelsOrder::class)->withPivot('quantity');
    }
    public function discounts()
    {
        return $this->belongsToMany(Discount::class);
    }
    public function applyDiscount()
    {
        $discounts = $this->discounts;

        foreach ($discounts as $discount) {
            $this->price -= $this->price * ($discount->percent_off / 100);
        }

        return $this->price;
    }

}
