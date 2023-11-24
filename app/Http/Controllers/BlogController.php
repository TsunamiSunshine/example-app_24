<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class BlogController extends Controller
{
    public function index()
    {
        return view("admin.blog", ['blog' => Blog::all()]);
}

public function create(){
    return view('admin.blog');
}


public function store(Request $request){

   $data = $request->all();
   $data['name'] = $request->name;
   $data['description'] = $request->body;
   $image_path = $request->file('image')->store('', 'public');
   $data['image'] = $image_path;

   Blog::create($data);

   //return dd($data['name'],$data['body'],$data['image']);
   return redirect()->route('admin.blog.store');
}
}
