<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use GuzzleHttp\Psr7\Request;
use App\Models\Main;
use App\Models\Product;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function marketindex(){
        $category = Category::all();
       $product = Product::all();
        return view ('marketindex', ['product'=>$product, 'category'=>$category]);
    }


}
