<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    // Listing Load View
    public function index()
    {
        /**
         * Steps
         * 
         * 1. Data Fetch ✅
         * 2. Bind and pass to view ✅
         * 3. Load View with Data ✅
         */

        // "select * from categories";
        // DB::query("select * from categories")->get();

        $categories = Category::all();
        // $subcategoies = SubCategory::all();
        // dd($categories->count());
        // echo "<pre>";
        // foreach($categories as $category)
        // {
        //     echo "<br/>";
        //     print_r($category->name);
        // }
        // die;

        

        /**
         * Load View with passing the variables
         */

        return view('backend.category_list', compact('categories'));
        // return view('backend.category_list')->with(['categories'=> $categories, 'subcategoies'=> $subcategoies]);
        // return view('backend.category_list', ["all_Categories" => $categories, "all_sub_Categories" => $subcategoies]);
    }
}
