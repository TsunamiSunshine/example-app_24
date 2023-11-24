<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Models\ProductGallery;
use App\Models\InfoCards;

class MainController extends Controller
{
    public function index(){
        $sliders = Slider::all();
        $gallery = ProductGallery::with('infocards')->get();
       // dd($gallery);
        $infocards = InfoCards::with('gallery')->get();


        return view("index" , [ 'category'=>$gallery, 'infocards'=>$infocards] );
    }




}
