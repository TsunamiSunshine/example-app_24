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

    // public function applyNumberDiscount($quantity)
    // {
    //     $discountThreshold = 10; // Количество штук для скидки
    //     $discountPercentage = 10; // Процент скидки

    //     if ($quantity >= $discountThreshold) {
    //         $discount = $this->price * ($discountPercentage / 100);
    //         return $this->price - $discount;
    //     }

    //     return $this->price;
    // }

    // public function applySimpleDiscount()
    // {
    //     $discountPercentage = 20; // Процент скидки

    //     $discount = $this->price * ($discountPercentage / 100);
    //     return $this->price - $discount;
    // }

    // public function applyClockDiscount()
    // {
    //     $discountPercentage = 25; // Процент скидки
    //     $happyHoursStart = '11:00'; // Время начала счастливых часов
    //     $happyHoursEnd = '20:00'; // Время окончания счастливых часов

    //     $currentTime = now()->format('H:i');

    //     if ($currentTime >= $happyHoursStart && $currentTime <= $happyHoursEnd) {
    //         $discount = $this->price * ($discountPercentage / 100);
    //         return $this->price - $discount;
    //     }

    //     return $this->price;
    // }

}
