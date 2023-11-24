<?php

namespace App\Http\Controllers;

use App\Models\Image;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index()
    {
        return view('admin.uploadimage');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|:jpg.png.jpeg.gif.svg',
        ]);


        $image_path = $request->file('image')->store('image', 'public');

        $data = Image::create(['image' => $image_path,]);


        session()->flash('success', 'Image Upload success');
        return redirect()->route('image.index');
    }
}
