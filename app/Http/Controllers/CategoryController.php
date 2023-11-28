<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view('admin.market',['category' => $category
        ]);
    }

    public function store(Request $request)
    {
        $image_path = $request->file('image')->store('image/category', 'public');
        $category['name'] = $request->name;
        $category['category_id'] = $request->category_id;
        $category['image'] = $image_path;
        $category['description'] = $request->description;


        Category::create($category);

        return redirect()->back()->withSuccess('Add category successfully');
    }


    public function showCategory($id)
    {
        $category = Category::find($id);


        return view('admin.market',['category'=>$category]);
    }

    public function updateCategory($id)
    {
        $category = Category::find($id);


        return view('admin.market', ['category'=>$category]);
    }
    public function updateSubmit(Request $request, $id)
    {
        $category = Category::find($id);
        $image_path = $request->file('image')->store('image/category', 'public');
        $category['name'] = $request->name;
        $category['image'] = $image_path;
        $category['description'] = $request->description;

        $category->update($request->all($image_path));



        return redirect()->route('admin.market', $id);
    }

    public function destroy(Category $category,$id)
    {
        $category = Category::find($id);
        $category->delete();

        return redirect()->back();
    }
}
