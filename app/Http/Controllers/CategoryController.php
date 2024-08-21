<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller{
    public function index(){
        $categories = Category::all();
        return view('pages.admin.categories.index', compact('categories'));
    }

    public function storeCat(Request $request){
        $request->validate([
            'name' => 'required|unique:categories|max:255',
        ]);
        //store
        $category = new Category();
        $category->name = $request->input('name');
        $category->save();

        return back()->with('success', 'Category added successfully');
    }

    public function destroy($id){
        Category::findOrfail($id)->delete();
        return back()->with('success', 'Category deleted successfully');
    }
}
