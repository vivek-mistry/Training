<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SubCategoryController extends Controller
{
    public function index()
    {
        $subcategories = SubCategory::with(['category'])->has('category')->get();
        // dd($subcategories);
        return view('backend.sub_category_list', compact('subcategories'));
    }

    public function create()
    {
        $categories = Category::get();
        $sub_category = app(SubCategory::class);
        return view('backend.sub_category_create', compact('sub_category', 'categories'));
    }

    public function store(Request $request)
    {
        
        SubCategory::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
        ]);

        Session::flash('success', "SubCategory stored successfully.");
        return redirect()->route('sub_category_list');

    }

    public function edit($id)
    {
        $sub_category = SubCategory::where('id', $id)->first();
        
        $categories = Category::get();
        return view('backend.sub_category_edit', compact('sub_category', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $sub_category = SubCategory::where('id', $id)->first();
        $sub_category->update([
            'name' => $request->name,
            'category_id' => $request->category_id,
        ]);

        Session::flash('success', "SubCategory updated successfully.");
        return redirect()->route('sub_category_list');
    }
}
