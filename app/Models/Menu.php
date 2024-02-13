<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Menu extends Model
{
    protected $fillable = ['title', 'alias', 'show_title'];

    public function filters()
    {
        return $this->hasMany(Filter::class);
    }

    public function products()
    {
        return $this->hasManyThrough(Product::class, Category::class);
    }

    public function getNavBar()
    {
        return $this
            ->with('categories')
            ->get();
    }

    public function getWithCountProducts()
    {
        return $this
            ->withCount('products')
            ->has('products')
            ->get();
    }

    public function menuItems()
    {
        return $this->hasMany(MenuItem::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_menu', 'menu_id', 'category_id');
    }

}
