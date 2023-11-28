<?php

namespace App\Models;

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
}
