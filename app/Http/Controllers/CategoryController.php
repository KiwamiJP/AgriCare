<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function show(Category $category)
    {
        $posts = $category->posts()->get();
        return view('categories.show', compact('category', 'posts'));
    }
}
