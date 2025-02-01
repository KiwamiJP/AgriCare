<?php
// filepath: /Users/heinzinaung/laravelapps/AgriCare/app/Http/Controllers/PostController.php
namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function welcome()
    {
        $posts = Post::all();
        return view('welcome', compact('posts'));
    }
   
    public function index()
    {
        $posts = Post::with('category')->paginate(5);
        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.posts.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'category_id' => 'nullable|exists:categories,id',
        ]);

        $data = $request->all();

        if ($request->hasFile('photo')) {
            $imageName = time().'.'.$request->photo->extension();
            $request->photo->move(public_path('images'), $imageName);
            $data['photo'] = $imageName;
        }

        Post::create($data);

        return redirect()->route('admin.posts.index')->with('success', 'Post created successfully.');
    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('admin.posts.edit', compact('post', 'categories'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'category_id' => 'nullable|exists:categories,id',
        ]);

        $data = $request->all();

        if ($request->hasFile('photo')) {
            if ($post->photo && file_exists(public_path('images/' . $post->photo))) {
                unlink(public_path('images/' . $post->photo));
            }

            $imageName = time().'.'.$request->photo->extension();
            $request->photo->move(public_path('images'), $imageName);
            $data['photo'] = $imageName;
        } else {
            unset($data['photo']);
        }

        $post->update($data);

        return redirect()->route('admin.posts.index')->with('success', 'Post updated successfully.');
    }

    public function destroy(Post $post)
    {
        if ($post->photo && file_exists(public_path('images/' . $post->photo))) {
            unlink(public_path('images/' . $post->photo));
        }

        $post->delete();

        return redirect()->route('admin.posts.index')->with('success', 'Post deleted successfully.');
    }
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }
}