<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductsController extends Controller
{
    public function index() {
        $products = Product::with('category')->get();
        return view('src.template.products', compact('products'));
    }

    public function create() {
        $categories = Category::all();
        return view('src.template.createproduct', compact('categories'));
    }

    public function store(Request $request) {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name'=> 'required|string|max:255',
            'image'=>'required|image|mimes:jpg,jpeg,png|max:2048',
            'price'=>'required|numeric',
            'stock'=>'required|integer',
            'description'=>'required|string'
        ]);

        $imagePath = $request->file('image')->store('products', 'public');

        Product::create([
            'category_id'=>$request->category_id,
            'name'=>$request->name,
            'image'=>$imagePath,
            'price'=>$request->price,
            'stock'=>$request->stock,
            'description'=>$request->description
        ]);

        return redirect()->route('products.index')->with('success', 'Produk berhasil ditambahkan');
    }

    public function show($id) {
        $product = Product::with('category')->findOrFail($id);
        return view('src.template.showproduct', compact('product'));
    }

    public function edit($id) {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('src.template.editproduct', compact('product', 'categories'));
    }

    public function update(Request $request, $id) {
        $product = Product::findOrFail($id);

        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name'=> 'required|string|max:255',
            'image'=>'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'price'=>'required|numeric',
            'stock'=>'required|integer',
            'description'=>'required|string'
        ]);

        $product->update([
            'category_id'=>$request->category_id,
            'name'=>$request->name,
            'price'=>$request->price,
            'stock'=>$request->stock,
            'description'=>$request->description
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
            $product->image = $imagePath;
            $product->save();
        }

        return redirect()->route('products.index')->with('success', 'Produk berhasil diedit');
    }

    public function destroy($id) {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Produk berhasil dihapus');
    }
}

