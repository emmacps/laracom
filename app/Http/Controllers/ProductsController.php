<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller{
    //show page
    public function index(){
        $products = Product::with(['category'])->orderBy('created_at', 'desc')->get();
        return view('pages.admin.products.index', compact('products'));
    }

    //create products page
    public function create(){
        $categories = Category::all();
        $colors = Color::all();
        return view('pages.admin.products.create', compact('categories','colors'));
    }
    public function storeProducts(Request $request){
        $request->validate([
           'title' => 'required',
           'category_id' => 'required',
           'price' => 'required',
           'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
           'description' => 'required',
        ]);
        $image_name = 'products/'.time().rand(0,9999).'.'.request()->image->getClientOriginalExtension();
        $request->image->storeAs('public', $image_name);

        $product = Product::create([
            'title' => $request->title,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $request->image,

        ]);

//        $product->colors()->attach($request->colors);
        $product->save();

        return back()->with('success', 'Product added successfully!');
    }

    public function edit($id){
        return "store products";
    }

    public function update(Request $request){
        return "store products";
    }

    public function destroy($id){
        return "store products";
    }
}
