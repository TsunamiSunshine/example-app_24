<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = [
        'name',
        'image',
        'category_id',
        'description'
    ];
    use HasFactory;
    public function products()
    {
        return $this->belongsToMany(Product::class, 'categories_products', 'categories_id','products_id');
    }
}
