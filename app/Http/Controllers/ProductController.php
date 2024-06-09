<?php

namespace App\Http\Controllers;

use App\Models\Attributesets;
use App\Models\Attributevalue;
use App\Models\Category;
use App\Models\Color;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //product reviews
    public function ProductReviews(){
        return view('admin.productreviews');
    }



    //Colors
    public function Colors(){
        $colors = Color::latest()->get();

        return view('admin.colors', compact('colors'));
    }

    public function StoreColor(Request $request){
        $request->validate([
            'color_name' => 'required|unique:colors',
            'color_code' => 'required'
        ]);

        Color::insert([
            'color_name' => $request->color_name,
            'color_code' => $request->color_code,
        ]);

        return redirect()->back()->with('message', 'Category Added Successfully!');
    }

    public function EditColors($id){
        $colors_info = Color::findOrFail($id);

        return view('admin.editcolor', compact('colors_info'));
    }

    public function UpdateColor(Request $request){
        $id = $request->id;

        $request->validate([
             'color_name' => 'required|unique:colors',
             'color_code' => 'required'
        ]);

        Color::findOrFail($id)->update([
            'color_name' => $request->color_name,
            'color_code' => $request->color_code,
        ]);

        return redirect()->route('colors')->with('message', 'Color Updated Successfully!');
    }

    public function DeleteColors($id){
        Color::findOrFail($id)->delete();

        return redirect()->back()->with('message', 'Color Deleted Successfully!');
    }



    //Attribute sets
    public function AttributeSets(){
        $attributes = Attributesets::with('arrtibutevalue')->latest()->get();
        $categories_info = Category::latest()->get();


        dd($attributes);
        return view('admin.attributesets', compact('attributes', 'categories_info'));
    }

    public function StoreAttribute(Request $request){
        $request->validate([
            'title' => 'required|unique:attributesets',
            'category_id' => 'required'
        ]);

        $category_id = $request->category_id;
        //$category_id = Category::where('id', $category_id)->value('category_id');

        Attributesets::insert([
            'title' => $request->title,
            'category_id' => $category_id
        ]);

        return redirect()->back()->with('message', 'Attribute Added Successfully!');
    }

    public function EditAttributes($id){
        $attrubutes_info = Attributesets::findOrFail($id);
        $categories_info = Category::latest()->get();

        return view('admin.editattributes', compact('attrubutes_info', 'categories_info'));
    }

    public function UpdateAttribute(Request $request, $id){
        $request->validate([
            'title' => 'required|unique:attributesets',
            'category_id' => 'required'
        ]);

        $category_id = $request->category_id;
        //$category_name = Category::where('id', $request->category_id)->value('category_name');

        Attributesets::findOrFail($id)->update([
            'title' => $request->title,
            'category_id' => $category_id
        ]);

        return redirect()->route('attributesets')->with('message', 'Attribute Added Successfully!');
    }

    public function DeleteAttributes($id){
        Attributesets::findOrFail($id)->delete();

        return redirect()->back()->with('message', 'Attributes Deleted Successfully!');
    }



    //Attriute Values
    public function AttriuteValues(){
        $attributeset_info = Attributesets::latest()->get();
        $attributevalue_info = Attributevalue::latest()->get();

        return view('admin.attributevalues', compact('attributeset_info', 'attributevalue_info'));
    }

    public function StoreAttributeValue(Request $request){
        $request->validate([
            'value' => 'required|unique:attributevalues',
            'attributes_id' => 'required'
        ]);

        $attributes_id = $request->attributes_id;
        //$category_id = Category::where('id', $category_id)->value('category_id');

        Attributevalue::insert([
            'value' => $request->value,
            'attributes_id' => $attributes_id
        ]);

        return redirect()->back()->with('message', 'Attribute Value Added Successfully!');
    }

}
