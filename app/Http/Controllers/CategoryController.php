<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function show(Category $category)
    {
        $category->load('posts');
        $categories = Category::with('children')->whereNull('parent_id')->get();
        return view('categories.show', compact('category', 'categories'));
    }
}
