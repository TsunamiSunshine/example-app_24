<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SliderController extends Controller
{
    public function index()
    {

        return view("admin.slider", ['slider' => Slider::all()]);
    }
    public function store(Request $request)
    {
        $slider = $request->all();
        $image_path = $request->file('image')->store('image/slider', 'public');
        $option = $request->position;
        $lcaption = $request->clarge;
        $mcaption = $request->cmedium;
        $slider['position'] = $option;
        $slider['image'] = $image_path;
        $slider['clarge'] = $lcaption;
        $slider['cmedium'] = $mcaption;




        Slider::create($slider);


        return redirect()->route('admin.slider');
    }

    public function showSlider($id){



        return view('admin.showslider', ['showslider'=> Slider::find($id)]);
    }

    public function updateSlider($id)
    {
        $slider = Slider::find($id);



        return view('admin.updateslider', ['updateslider'=>[$slider]]);
    }
    public function updateSubmit(Request $request,$id){
        $slider = Slider::find($id);
        $image_path = $request->file('image')->store('image/slider', 'public');
        $option = $request->position;
        $lcaption = $request->clarge;
        $mcaption = $request->cmedium;
        $slider['position'] = $option;
        $slider['image'] = $image_path;
        $slider['clarge'] = $lcaption;
        $slider['cmedium'] = $mcaption;



        $slider->update($request->all($image_path));



        return redirect()->route('admin.slider',$id);
    }

    public function destroySlider(Slider $slider){
        $slider = Slider::first();
        $slider->delete();

        return redirect()->route('admin.slider');
    }
}
