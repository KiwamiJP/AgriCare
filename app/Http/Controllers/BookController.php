<?php
namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    public function publicIndex(Request $request)
{
    $query = Book::with('category');
    if($request->author && $request->author != 'all') {
        $query->where('author', $request->author);
    }
    if ($request->category && $request->category != 'all') {
        $query->where('category_id', $request->category);
    }
    $books = $query->paginate(10);
    $authors = Book::select('author')->distinct()->get(); // Get distinct authors from books
    $categories = Category::all();
    return view('books.index', compact('books', 'authors', 'categories'));

}
    public function index()
    {
        $books = Book::with('category')->paginate(10);
        return view('admin.books.index', compact('books'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.books.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'file' => 'required|file|mimes:pdf,epub,mobi|max:51200', // Validate file upload
            'cover_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:10000', // Validate cover image upload

        ]);
        $originalFileName = $request->file('file')->getClientOriginalName();

        $filePath = $request->file('file')->storeAs('books', time() . '_' . $originalFileName);
        $coverImageName = time() . '_' . $request->file('cover_image')->getClientOriginalName();
    $coverImagePath = $request->file('cover_image')->storeAs('book_covers', $coverImageName);
        Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'category_id' => $request->category_id,
            'file_path' => $filePath,
            'file_name' => $originalFileName, // Store original file name in DB
            'cover_image' => $coverImagePath,
        ]);

        return redirect()->route('admin.books.index')->with('success', 'Book added successfully.');
    }

    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    public function edit(Book $book)
    {
        $categories = Category::all();
        return view('admin.books.edit', compact('book', 'categories'));
    }

    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'file' => 'nullable|file|mimes:pdf,epub,mobi|max:2048', // Validate file upload
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10000', // Validate cover image upload

        ]);

        $data = $request->only(['title', 'author', 'category_id']);

        if ($request->hasFile('file')) {
            // Delete the old file if it exists
            if ($book->file_path) {
                Storage::delete($book->file_path);
            }
            $originalFileName = $request->file('file')->getClientOriginalName();

            $filePath = $request->file('file')->storeAs('books', time() . '_' . $originalFileName);
            $data['file_path'] = $filePath;
            $data['file_name'] = $originalFileName;
        }
        if ($request->hasFile('cover_image')) {
            // Delete the old cover image if it exists
            if ($book->cover_image) {
                Storage::delete($book->cover_image);
            }
            $coverImageName = time() . '_' . $request->file('cover_image')->getClientOriginalName();
            $coverImagePath = $request->file('cover_image')->storeAs('book_covers', $coverImageName);
            $data['cover_image'] = $coverImagePath;
        }

        $book->update($data);

        return redirect()->route('admin.books.index')->with('success', 'Book updated successfully.');
    }

    public function destroy(Book $book)
    {
        // Delete the file if it exists
        if ($book->file_path) {
            Storage::delete($book->file_path);
        }
        $book->delete();
        return redirect()->route('admin.books.index')->with('success', 'Book deleted successfully.');
    }
}