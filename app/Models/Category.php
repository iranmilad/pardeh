<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * AutoKit\Category
 *
 * @property int $id
 * @property string $title
 * @property string $alias
 * @property int $menu_id
 * @property string|null $img
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \AutoKit\Menu $menu
 * @property-read \Illuminate\Database\Eloquent\Collection|\AutoKit\Product[] $products
 * @method static \Illuminate\Database\Eloquent\Builder|\AutoKit\Category whereAlias($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\AutoKit\Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\AutoKit\Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\AutoKit\Category whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\AutoKit\Category whereMenuId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\AutoKit\Category whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\AutoKit\Category whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Category extends Model
{
    protected $fillable = [
        'title', 'alias', 'menu_id'
    ];

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'category_product', 'category_id', 'product_id');
    }

    public function subcategories()
    {
        return $this->hasMany(Subcategory::class);
    }

    public function menus()
    {
        return $this->belongsToMany(Menu::class, 'category_menu', 'category_id', 'menu_id');
    }

    public function getImgAttribute(string $value): string
    {
        return '/images/categories/' . $value;
    }

    public function getForMainPage()
    {
        return $this
            ->whereNotNull('img')
            ->with('menu')
            ->take(8)
            ->get();
    }

    public function getWhereMenu(Menu $menu)
    {
        return $this
            ->whereMenuId($menu->id)
            ->with('menu')
            ->withCount('products')
            ->get();
    }

    public function filters()
    {
        return $this->belongsToMany(Filter::class);
    }
}
