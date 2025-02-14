<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'author',
        'category_id',
        'file_path', 
        'cover_image', 
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
