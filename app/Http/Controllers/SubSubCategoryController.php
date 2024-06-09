<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
use App\Models\Subsubcategories;
use Illuminate\Http\Request;

class SubSubCategoryController extends Controller
{
    public function AddSubSubCategory(){
        $subcategories = Subcategory::latest()->get();

        return view('admin.addsubsubcategory', compact('subcategories'));
    }

    public function AllSubSubCategory(){
        $subsubcategories = Subsubcategories::latest()->get();

        return view('admin.allsubsubcategory', compact('subsubcategories'));
    }

    public function StoreSubSubCategory(Request $request){
        $request->validate([
            'subsubcategory_name' => 'required|unique:subsubcategories',
            'subcategory_id' => 'required'
        ]);

        $subcategory_id = $request->subcategory_id;

        $subcategory_name = Subcategory::where('id', $subcategory_id)->value('subcategory_name');

        Subsubcategories::insert([
            'subsubcategory_name' => $request->subsubcategory_name,
            'slug' => strtolower(str_replace(' ','-', $request->subsubcategory_name)),
            'subcategory_id' => $subcategory_id,
            'subcategory_name' => $subcategory_name
        ]);

        Subcategory::where('id', $subcategory_id)->increment('subsubcategory_count', 1);

        return redirect()->route('allsubsubcategory')->with('message', 'Sub Sub Category Added Successfully!');
    }

    public function EditSubSubCategory($id){
        $subsubcategories_info = Subsubcategories::findOrFail($id);

        return view('admin.editsubsubcategory',compact('subsubcategories_info'));
    }

    public function UpdateSubSubCategory(Request $request){
        $request->validate([
            'subsubcategory_name' => 'required|unique:subsubcategories',
        ]);

        $subsubcatid = $request->id;

        Subsubcategories::findOrFail($subsubcatid)->update([
            'subsubcategory_name' => $request->subsubcategory_name,
            'slug' => strtolower(str_replace(' ','-', $request->subsubcategory_name))
        ]);

        return redirect()->route('allsubsubcategory')->with('message', 'Sub Sub Category Updated Successfully!');
    }

    public function DeleteSubSubCategory($id){
        $subcat_id = Subsubcategories::where('id', $id)->value('subcategory_id');
        Subsubcategories::findOrFail($id)->delete();

        Subcategory::where('id', $subcat_id)->decrement('subsubcategory_count', 1);

        return redirect()->route('allsubsubcategory')->with('message', 'Sub Sub Category Deleted Successfully!');
    }
}
