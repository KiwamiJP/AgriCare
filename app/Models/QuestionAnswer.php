<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuestionAnswer extends Model
{
    protected $table = 'question_answers';
    
    protected $fillable = ['question', 'user_id', 'photos'];

    protected $casts = [
        'photos' => 'array'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'question_id');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'question_category', 'question_answer_id', 'category_id');
    }
}