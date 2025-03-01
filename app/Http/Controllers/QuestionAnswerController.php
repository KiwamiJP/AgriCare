<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\QuestionAnswer;
use Illuminate\Http\Request;

class QuestionAnswerController extends Controller
{
    public function index()
    {
        $categories = Category::whereNull('parent_id')->get();
        $questions = QuestionAnswer::with(['user', 'category'])->orderBy('created_at', 'desc')->get();
        
        return view('questions-and-answers', compact('categories', 'questions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|array',
            'category_id.*' => 'exists:categories,id',
            'question' => 'required',
            'photos.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
    
        $photos = [];
        if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $photo) {
                $filename = time() . '_' . $photo->getClientOriginalName();
                $photo->storeAs('public/questions', $filename);
                $photos[] = $filename;
            }
        }
    
        // Create the question
        $question = QuestionAnswer::create([
            'user_id' => auth()->id(),
            'category_id' => $request->category_id[0], // Store the first category in the main table
            'question' => $request->question,
            'photos' => $photos
        ]);
    
        // Attach all selected categories
        if (is_array($request->category_id)) {
            $question->categories()->attach($request->category_id);
        }
    
        return redirect()->back()->with('success', 'Question posted successfully');
    }
}