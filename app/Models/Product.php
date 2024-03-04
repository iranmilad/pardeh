<?php

namespace App\Models;

use AutoKit\Components\Cart\Cart;
use AutoKit\Components\Money\Money;
use AutoKit\Components\Money\Currency;
use AutoKit\Components\Money\Exchanger;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    protected $perPage = 6;

    protected $fillable = [
        'title',
        'price',
        'sale_price',
        'wholesale_price',
        'few',
        'fewspd',
        'fewtak',
        'holo_code',
        'type',
        'is_top',
        'is_new',
        'img',
        'hover_img',
        'description',
    ];

    protected $casts = [
        'is_top' => 'boolean',
        'is_new' => 'boolean',
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_product', 'product_id', 'category_id');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function getDiscountPercentageAttribute()
    {
        // Calculate discount percentage
        if ($this->sale_price && $this->price > 0) {
            return round((($this->price - $this->sale_price) / $this->price) * 100) ."%";
        }

        return 0;
    }

    public function isAvailable(): bool
    {
        // Check if the product is available based on the inventory display type
        switch ($this->inventory_display) {
            case 'few':
                return $this->few > 0;
            case 'fewspd':
                return $this->fewspd > 0;
            case 'fewtak':
                return $this->fewtak > 0;
            default:
                return false;
        }
    }

    public function getQuantityAttribute()
    {
        switch ($this->inventory_display) {
            case 'few':
                return $this->few ?? 0;
            case 'fewspd':
                return $this->fewspd ?? 0;
            case 'fewtak':
                return $this->fewtak ?? 0;
            default:
                return 0; // Return 0 if inventory display setting is not specified
        }
    }

    public function hasMinimumQuantity(): bool
    {
        // Check if the product has a minimum quantity requirement
        return $this->minimum_quantity !== null && $this->quantity <= $this->minimum_quantity;
    }

    public function inventoryMessage(): string
    {
        // Generate a message based on inventory and minimum quantity
        if ($this->isAvailable()) {
            if ($this->hasMinimumQuantity()) {
                return "{$this->minimum_quantity} عدد در انبار";
            } else {
                return 'موجود';
            }
        } else {
            return 'ناموجود';
        }
    }


    public function searchTooltips(string $query): array
    {
        $result = $this
            ->where('title', 'like', $query . '%')
            ->get();
        return $result->pluck('title')->all();
    }

    public function search(string $query)
    {
        $query = str_replace(['_', '%'], ['\_', '\%'], $query);
        return $this
            ->where('title', 'like', '%' . $query . '%')
            ->get();
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }


    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function attributes()
    {
        return $this->belongsToMany(Attribute::class, 'attribute_product', 'product_id', 'attribute_id');
    }

}
