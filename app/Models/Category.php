<?php

namespace App\Models;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name','parent_id'];

    public function posts():HasMany
    {
        return $this->hasMany(Post::class);
    }
      // Relationship to get subcategories
      public function children()
      {
          return $this->hasMany(Category::class, 'parent_id');
      }
  
      // Relationship to get the parent category
      public function parent()
      {
          return $this->belongsTo(Category::class, 'parent_id');
      }
      
}
