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
    $books = $query->paginate(8);
    $authors = Book::select('author')->distinct()->pluck('author'); // Get distinct authors from books
    $categories = Category::all();
    return view('books.index', compact('books', 'authors', 'categories'));

}
    public function index()
    {
        $books = Book::with('category')->paginate(8);
        return view('admin.books.index', compact('books'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.books.create', compact('categories'));
    }

    public function store(Request $request)
{
    try {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'file' => 'required|file|mimes:pdf,epub,mobi|max:51200',
            'cover_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:10000',
            'description' => 'required|string',
        ], [
            'file.mimes' => 'စာအုပ်ဖိုင်သည် pdf, epub, mobi ဖြစ်ရမည်။',
            'file.max' => 'စာအုပ်ဖိုင်သည် 50MB ထက်မကြီးသင့်ပါ။',
            'cover_image.mimes' => 'ဓာတ်ပုံဖိုင်သည် jpeg, png, jpg, gif ဖြစ်ရမည်။',
            'cover_image.max' => 'ဓာတ်ပုံဖိုင်သည် 10MB ထက်မကြီးသင့်ပါ။',
            'cover_image.image' => 'ဖိုင်အမျိုးအစားသည် ပုံဖိုင်ဖြစ်ရမည်။',
        ]);

    $originalFileName = $request->file('file')->getClientOriginalName();

    // Store files in 'public' disk to make them accessible
    $filePath = $request->file('file')->storeAs('books', time() . '_' . $originalFileName, 'public');
    $coverImageName = time() . '_' . $request->file('cover_image')->getClientOriginalName();
    $coverImagePath = $request->file('cover_image')->storeAs('book_covers', $coverImageName, 'public');

// Store in the database without the 'storage/' prefix
Book::create([
    'title' => $request->title,
    'author' => $request->author,
    'category_id' => $request->category_id,
    'file_path' => Storage::url($filePath),
    'file_name' => $originalFileName,
    'cover_image' => 'book_covers/' . $coverImageName,  // Don't include 'storage/' here
    'description' => $request->description,
]);

    return redirect()->route('admin.books.index')->with('success', 'Book added successfully.');
} catch (\Illuminate\Validation\ValidationException $e) {
    return redirect()->back()
        ->withErrors($e->validator)
        ->withInput();
}

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
    try {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'file' => 'nullable|file|mimes:pdf,epub,mobi|max:51200',
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10000',
            'description' => 'required|string',
        ], [
            'file.mimes' => 'စာအုပ်ဖိုင်သည် pdf, epub, mobi ဖြစ်ရမည်။',
            'file.max' => 'စာအုပ်ဖိုင်သည် 50MB ထက်မကြီးသင့်ပါ။',
            'cover_image.mimes' => 'ဓာတ်ပုံဖိုင်သည် jpeg, png, jpg, gif ဖြစ်ရမည်။',
            'cover_image.max' => 'ဓာတ်ပုံဖိုင်သည် 10MB ထက်မကြီးသင့်ပါ။',
            'cover_image.image' => 'ဖိုင်အမျိုးအစားသည် ပုံဖိုင်ဖြစ်ရမည်။',
        ]);

    $data = $request->only(['title', 'author', 'category_id']);

    // Handle file upload
    if ($request->hasFile('file')) {
        // Delete old file
        if ($book->file_path) {
            Storage::delete(str_replace('storage/', '', $book->file_path)); // Correct deletion
        }

        // Store new file
        $fileName = time() . '_' . $request->file('file')->getClientOriginalName();
        $filePath = $request->file('file')->storeAs('books', $fileName, 'public');

        $data['file_path'] = Storage::url($filePath); // Ensure correct public URL
        $data['file_name'] = $fileName;
    }

    // Handle cover image upload
    if ($request->hasFile('cover_image')) {
        // Delete old cover image
        if ($book->cover_image) {
            Storage::delete(str_replace('storage/', '', $book->cover_image)); // Correct deletion
        }

        // Store new cover image
        $coverImageName = time() . '_' . $request->file('cover_image')->getClientOriginalName();
        $coverImagePath = $request->file('cover_image')->storeAs('book_covers', $coverImageName, 'public');

        $data['cover_image'] = 'book_covers/' . $coverImageName;// Ensure correct public URL
    }

    // Update the book record
    $book->update($data);

    return redirect()->route('admin.books.index')->with('success', 'Book updated successfully.');
} catch (\Illuminate\Validation\ValidationException $e) {
    return redirect()->back()
        ->withErrors($e->validator)
        ->withInput();
}
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