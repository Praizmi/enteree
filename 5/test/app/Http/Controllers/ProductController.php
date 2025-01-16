<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    public function store(Request $request)
{
    // Correct the validation rules
    $request->validate([
        'name' => 'required|string|max:255', // Use 'required' instead of 'require'
        'price' => 'required|numeric', // Use 'required' instead of 'require'
    ]);

    // Create and save the product
    $product = new Product();
    $product->name = $request->name;
    $product->price = $request->price;
    $product->save();

    // Redirect back to the product index with a success message
    return redirect()->route('product.index')->with('success', 'Product created successfully');
}

    public function create(){
        return view('product.create',);
    }
    public function greater(){
        $products = Product::where('price', '>', 50)
        ->orderBy('created_at', 'desc')
        ->get();
    return view('product.index', compact('products'));
}
}