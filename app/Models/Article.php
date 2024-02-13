<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Article extends Model
{
    protected $perPage = 3;

    protected $fillable = [
        'title', 'alias', 'text', 'user_id', 'img'
    ];

    public function getImgAttribute(string $value): string
    {
        return '/images/posts/' . $value;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function getLastForMainPage()
    {
        return $this
            ->with('user')
            ->withCount('comments')
            ->orderByDesc('id')
            ->take(3)
            ->get();
    }

    public function getForBlog()
    {
        return $this
            ->with('user')
            ->withCount('comments')
            ->orderByDesc('id')
            ->paginate();
    }
}
