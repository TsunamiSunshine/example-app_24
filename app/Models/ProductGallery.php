<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\InfoCards;

class ProductGallery extends Model
{
    use HasFactory;
    protected $table = 'gallery';
    protected $fillable = [
        'category_id','name_category',
    ];



    public function infocards(){
        return $this->belongsToMany(InfoCards::class,'gallery_infocards','categories_id','cards_id');
    }



}
