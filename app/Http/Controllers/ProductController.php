<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::all();
        $category = Category::all();

        return view('admin.marketproduct',['product' => $product, 'category'=> $category]);
    }

    public function store(Request $request)
    {
        $image_path = $request->file('image')->store('image/product' , 'public');
        $product['name'] = $request->name;
        $product['price'] = $request->price;
        $product['product_id'] = $request->product_id;
        $product['image'] = $image_path;
        $product['description'] = $request->description;


        $product_id = Product::create($product);
         $category_id = Category::find($request->product_id);
         $category_id->products()->attach($product_id->id);

        return redirect()->back()->withSuccess('Add Product successfully');
    }


    public function showProduct($id)
    {
        $product = Product::find($id);


        return view('card',['product'=>$product]);
    }

    public function updateProduct($id)
    {
        $product = Product::find($id);


        return view('admin.marketproduct', ['product'=>$product]);
    }
    public function updateSubmit(Request $request, $id)
    {
        $product = Product::find($id);
        $image_path = $request->file('image')->store('image/Product', 'public');
        $product['name'] = $request->name;
        $product['image'] = $image_path;
        $product['description'] = $request->description;
        $product['price'] = $request->price;

        $product->update($request->all($image_path));



        return redirect()->route('admin.marketproduct', $id);
    }

    public function destroy(Product $product,$id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect()->back();
    }
}
