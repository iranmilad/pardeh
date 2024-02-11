<?php

namespace App\Models;

use AttributeItem;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{


    public function attributeItems()
    {
        return $this->hasMany(AttributeItem::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'attribute_product', 'attribute_id', 'product_id');
    }
}
