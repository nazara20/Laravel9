<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $with = ['categories', 'users'];
    protected $withCount = ['comments'];

    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_id'); //foreign key dari category_id
    }
    
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}

