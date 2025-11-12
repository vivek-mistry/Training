<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
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
            'status' => $request->status,
        ];
        // dd($data);
        $product = Product::create($data);

        return redirect()->route('product_list')->with('success', 'Product created successfully');
    }
}
