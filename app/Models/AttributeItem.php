<?php

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class AttributeItem extends Model
{
    protected $fillable = [
        'name',
        'details',
        'attribute_id',
        'max_value',
        'min_value',
        'unit_factor',
        'unit_description',
        'conversion_factor',
        'base_unit',
    ];

    public function attribute()
    {
        return $this->belongsTo(Attribute::class);
    }
}
