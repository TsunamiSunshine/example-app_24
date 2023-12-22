<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;

    protected $fillable = ['type', 'value'];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public function discount()
    {
        return $this->morphTo();
    }
}
