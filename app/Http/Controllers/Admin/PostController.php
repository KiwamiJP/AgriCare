<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(10);
        $totalPosts = Post::count();
        
        return view('admin.posts.index', compact('posts', 'totalPosts'));
    }
}