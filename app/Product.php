<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    const IS_FEATURED = 1;
    const NOT_FEATURED = 0;

    protected $table = 'products';
    protected $fillable = [
        'slug', 'name', 'category_id', 'description', 'is_featured'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function productAttrs()
    {
        return $this->hasMany(ProductAttribute::class, 'product_id');
    }

    public function scopeIsFeatured($query)
    {
        return $query->whereIsFeatured(self::IS_FEATURED);
    }
}
