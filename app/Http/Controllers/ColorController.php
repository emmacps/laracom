<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller{
    public function index(){
        $colors = Color::all();
        return view('pages.admin.colors.index', compact('colors'));
    }

    public function storecolors(Request $request){
        $request->validate([
            'name' => 'required|unique:categories|max:255',
            'code' => 'required|max:255',
        ]);
        //store
        $color = new Color();
        $color->name = $request->input('name');
        $color->code = $request->input('code');
        $color->save();

        return back()->with('success', 'Category added successfully');
    }

    public function destroy($id){
        Color::findOrfail($id)->delete();
        return back()->with('success', 'Category deleted successfully');
    }
}
