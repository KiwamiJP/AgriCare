<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::with(['user', 'categories', 'comments'])->latest()->paginate(10);
        $totalQuestions = Question::whereNotNull('id')->count();
        
        return view('admin.questions.index', compact('questions', 'totalQuestions'));
    }

    public static function getTotalQuestions()
    {
        return Question::whereNotNull('id')->count();
    }
}