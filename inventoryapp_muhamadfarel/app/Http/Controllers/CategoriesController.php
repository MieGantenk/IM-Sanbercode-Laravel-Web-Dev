<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function index() {
        $categories = Category::with('products')->get();
        return view('src.template.categories', compact('categories'));
    }

    public function create() {
        return view('src.template.createcategory');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Category::create($request->only(['name', 'description']));

        return redirect()->route('categories.index')->with('success', 'category berhasil ditambahkan');
    }

    public function show($id) {
        $category = Category::with('products')->findOrFail($id);
        return view('src.template.listcategory', compact('category'));
    }


    public function edit($id) {
        $category = Category::findOrFail($id);
        return view('src.template.edit', compact('category'));
    }

    public function update(Request $request, $id) {
        $category = Category::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $category->update($request->only(['name', 'description']));

        return redirect()->route('categories.index')->with('success', 'Produk berhasil diedit');
    }

    public function destroy($id) {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Produk berhasil dihapus');
    }
}



