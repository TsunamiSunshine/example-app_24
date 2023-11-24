<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductGallery;

class InfoCards extends Model
{
    use HasFactory;
    protected $table = 'infocards';
    protected $fillable = [
        'card_id', 'image', 'clarge', 'cmedium',
    ];
    public function gallery(){
        return $this->belongsToMany(ProductGallery::class,'gallery_infocards','cards_id','categories_id');
    }
}
