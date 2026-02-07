<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
    public function index() {
        $categories = DB::table('categories')->get();

        return view('src.template.categories', compact('categories'));
    }

    public function create() {
        return view('src.template.createcategory');
    }

    public function store(Request $request) {
        DB::table('categories')->insert([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('categories.index');
    }

    public function show($id) {
        $category = DB::table('categories')->where('id', $id)->first();

        return view('src.template.show', compact('category'));
    }

    public function edit($id) {
        $category = DB::table('categories')->where('id', $id)->first();

        return view('src.template.edit', compact('category'));
    }

    public function update(Request $request, $id) {
        DB::table('categories')->where('id', $id)->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('categories.index');
    }

    public function destroy($id) {
        DB::table('categories')->where('id', $id)->delete();

        return redirect()->route('categories.index');
    }
}

