<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AttributeItem extends Model
{
    protected $fillable = [
        'name', 'details', 'max_value', 'min_value', 'unit_factor', 'unit_description', 'conversion_factor', 'base_unit', 'img', 'attribute_id',
    ];

    public function attribute()
    {
        return $this->belongsTo(Attribute::class);
    }
}
