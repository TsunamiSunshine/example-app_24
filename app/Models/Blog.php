<?php

namespace App\Models;

use App\Models\Image as ModelsImage;
use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['name','image', 'description',];

}
