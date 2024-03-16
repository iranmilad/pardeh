<?php

namespace App\Models;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'content',
        'image',
        'summary',
        'keywords',
        'publish',
        'views',
        'slug',

        // Add more attributes here if needed
    ];

    public function getLinkAttribute()
    {
        return "blog/".$this->slug;
    }

    public function category()
    {
        return $this->belongsTo(PostCategory::class, 'post_category_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    // مدل Post رابطه‌ی user را اضافه کنید
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }


    public function commentsCount()
    {
        return $this->comments()->count();
    }
}
