<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller{
    //show page
    public function index(){
        $products = Product::all();
        return view('pages.admin.products.index', compact('products'));
    }

    //create products page
    public function create(){
        return view('pages.admin.products.create');
    }
    public function store(Request $request){
        return "store products";
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
