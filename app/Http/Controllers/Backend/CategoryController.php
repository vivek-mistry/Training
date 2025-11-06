<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Session;

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

    /**
     * To Store data
     * 
     * Steps :
     * 
     * 1. Load Create page
     * 2. Store data end point
     * 3. In store data endpoint (data store)
     */

    public function create()
    {
        return view('backend.category_create');
    }

    public function store(Request $request)
    {
        // dd($_POST['name']);
        // dd($request->name);
        // INSERT INTO categories  ("name") values ()
        Category::create([
            'name' => $request->name,
        ]);

        // dd("Successfully inserted values");
        return redirect()->route('category_list');
    }

    public function delete($id)
    {
        // $category = Category::find($id);
        $category = Category::where('id', $id)->first();

        if($category)
        {
            $category->delete();
            Session::flash('success', "Category deleted successfully.");
            return redirect()->route('category_list'); 
        }
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('backend.category_edit', compact('category'));
    }
}
