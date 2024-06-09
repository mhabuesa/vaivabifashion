<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function addCategory(){
        return view('backend.category.addCategory');
    }

    public function CategoryStore(Request $request){
        $request->validate([
            'category_name' => 'required|unique:category_models'
        ]);

        CategoryModel::insert([
            'category_name' => $request->category_name,
            'slug' => strtolower(str_replace(' ','-', $request->category_name))
        ]);

        return redirect()->route('allCategory')->with('message', 'Category Added Successfully!');
    }

    public function AllCategory(){
        $categories = CategoryModel::latest()->get();

        return view('backend.category.allCategory', compact('categories'));
    }

    public function EditCategory($id){
        $categories_info = CategoryModel::findOrFail($id);

        return view('backend.category.editCategory', compact('categories_info'));
    }

    public function updateCategory(Request $request){
        $category_id = $request->id;

        $request->validate([
            'category_name' => 'required|unique:category_models'
        ]);

        CategoryModel::findOrFail($category_id)->update([
            'category_name' => $request->category_name,
            'slug' => strtolower(str_replace(' ','-', $request->category_name))
        ]);

        return redirect()->route('allCategory')->with('message', 'Category Added Successfully!');
    }

    public function deleteCategory($id){
        CategoryModel::findOrFail($id)->delete();

        return redirect()->route('allCategory')->with('message', 'Category Move to Trash!');
    }

    function trash(){
        $categories = CategoryModel::onlyTrashed()->get();
        return view('backend.category.trash', compact('categories'));
    }

    function catRestore($id){
        CategoryModel::withTrashed()->find($id)->restore();
        return back()->with('message', 'Category Restore Successfully!');
    }
    function catPerDelete($id){
        CategoryModel::withTrashed()->find($id)->forceDelete();
        return back()->with('message', 'Category Permanent Delete!');
    }
}
