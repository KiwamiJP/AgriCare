<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        $request->validate([
            'comment' => 'required|string',
            'question_id' => 'required|exists:question_answers,id'
        ]);

        Comment::create([
            'comment' => $request->comment,
            'question_id' => $request->question_id,
            'user_id' => auth()->id()
        ]);

        return back()->with('success', 'မှတ်ချက်ပေးခြင်း အောင်မြင်ပါသည်။');
    }
}