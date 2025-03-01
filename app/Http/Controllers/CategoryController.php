<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\QuestionAnswer;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function show(Category $category)
    {
        $category->load('posts');
        $categories = Category::with('children')->whereNull('parent_id')->get();
        return view('categories.show', compact('category', 'categories'));
    }public function category()
    {
        $categories = Category::all();
        $questions = QuestionAnswer::with(['user', 'category'])
                    ->orderBy('created_at', 'desc')
                    ->get();
        
        return view('questions-and-answers', compact('categories', 'questions'));
    }
}
