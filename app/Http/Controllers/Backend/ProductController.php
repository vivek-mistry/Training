<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Facades\Storage;
use voku\helper\ASCII;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id', 'DESC')->get();
        return view('backend.product_list', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('backend.product_create', compact('categories'));
    }

    public function store(Request $request)
    {
        $data = [
            'category_id' => $request->category_id,
            'sub_category_id' => $request->sub_category_id,
            'name' => $request->name,
            'product_image' => Storage::disk('public')->putFile('product_images', $request->product_image),
            'product_color' => implode(',', $request->product_color),
            'description' => $request->description,
            'price' => $request->price,
            'status' => $request->status ? true : false,
        ];
        // dd($data);
        $product = Product::create($data);

        return redirect()->route('product_list')->with('success', 'Product created successfully');
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        $subcategories = SubCategory::where('category_id', $product->category_id)->get();
        // dd($subcategories->toArray());
        // echo $product->product_color;
        $product_color = explode(',', $product->product_color);
        // dd($product_color);
        // if(in_array('Blue',$product_color)){
        //    echo "->True"; 
        // }else{
        //     echo "->False";
        // }

        // die;
        return view('backend.product_edit', compact('product', 'categories', 'subcategories', 'product_color'));

    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->category_id = $request->category_id;
        $product->sub_category_id = $request->sub_category_id;
        $product->name = $request->name;
        if($request->product_image){
            $product->product_image = Storage::disk('public')->putFile('product_images', $request->product_image);
        }
        $product->product_color = implode(',', $request->product_color);
        $product->description = $request->description;
        $product->price = $request->price;
        $product->status = $request->status ? true : false;
        $product->save();
        
        


        return redirect()->route('product_list')->with('success', 'Product updated successfully');
    }
}
