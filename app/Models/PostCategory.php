<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function posts()
    {
        return $this->hasMany(Post::class, 'post_category_id');
    }

    public function getTotalPostsAttribute()
    {
        return $this->posts()->count();
    }

    public function getLinkAttribute()
    {
        $nameWithHyphen = str_replace(' ', '-', $this->name);
        return "/search/category/{$nameWithHyphen}";
    }

}
