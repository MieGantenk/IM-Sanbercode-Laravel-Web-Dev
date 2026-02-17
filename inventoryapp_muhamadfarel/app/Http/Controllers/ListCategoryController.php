<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class ListCategoryController extends Controller
{
    public function show($id) {
        $category = Category::with('products')->findOrFail($id);
        return view('src.template.show', compact('category'));
    }
}
