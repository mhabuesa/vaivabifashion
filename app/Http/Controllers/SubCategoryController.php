<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function AddSubCategory(){
        $categories_info = Category::latest()->get();

        return view('admin.addsubcategory', compact('categories_info'));
    }

    public function AllSubCategory(){
        return view('admin.allsubcategory');
    }

    public function StoreSubCategory(Request $request){
        
    }

}
