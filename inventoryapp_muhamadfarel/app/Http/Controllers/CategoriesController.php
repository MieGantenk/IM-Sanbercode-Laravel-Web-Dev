<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function index() {
        $categories = Category::all();

        return view('src.template.categories', compact('categories'));
    }

    public function create() {
        return view('src.template.createcategory');
    }

    public function store(Request $request) {
        Category::create ([
            'name' => $request->name,
            'description' => $request->description
        ]);

        return redirect()->route('categories.index');
    }

    public function show($id) {
        $category = Category::findOrFail($id);

        return view('src.template.show', compact('category'));
    }

    public function edit($id) {
        $category = Category::findOrFail($id);

        return view ('src.template.edit', compact('category'));
    }

    public function update(Request $request,$id) {
        $category = Category::findOrFail($id);

        $category->update([
            'name'=>$request->name,
            'description'=>$request->description
        ]);

        return redirect()->route('categories.index');
    }

    public function destroy($id) {
        $category = Category::findOrFail($id);

        $category->delete();

        return redirect()->route('categories.index');
    }
}
