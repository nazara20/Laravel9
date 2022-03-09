<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view('categories.index', compact('category'));
    }

    public function detail($slug)
    {
        $categories = Category::whereSlug($slug)->firstOrFail();

        return view('categories.detail', compact('categories'));
    }
}
