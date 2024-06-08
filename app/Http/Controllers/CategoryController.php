<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function Addcategory(){
        return view('admin.addcategory');
    }

    public function Storecategory(Request $request){
        $request->validate([
            'category_name' => 'required|unique:categories'
        ]);

        Category::insert([
            'category_name' => $request->category_name,
            'slug' => strtolower(str_replace(' ','-', $request->category_name))
        ]);

        return redirect()->route('allcategory')->with('message', 'Category Added Successfully!');
    }

    public function Allcategory(){
        $categories = Category::latest()->get();

        return view('admin.allcategory', compact('categories'));
    }

    public function Editcategory($id){
        $categories_info = Category::findOrFail($id);

        return view('admin.editcategory', compact('categories_info'));
    }

    public function Updatecategory(Request $request){
        $category_id = $request->id;

        $request->validate([
            'category_name' => 'required|unique:categories'
        ]);

        Category::findOrFail($category_id)->update([
            'category_name' => $request->category_name,
            'slug' => strtolower(str_replace(' ','-', $request->category_name))
        ]);

        return redirect()->route('allcategory')->with('message', 'Category Added Successfully!');
    }

    public function Deletecategory($id){
        Category::findOrFail($id)->delete();

        return redirect()->route('allcategory')->with('message', 'Category Deleted Successfully!');
    }

}
